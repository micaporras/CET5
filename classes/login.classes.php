<?php

class Login extends Dbh {

    protected function getUser($uid, $pwd) {
        $statement = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');

        if (!$statement->execute(array($uid, $pwd))) {
            $statement = null;
            header("location: ../index.php?error=statementfailed");
            exit();
        }

        if ($statement->rowCount() == 0)
        {
            $statement = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $statement->fetchAll(PDO::FETCH_ASSOC);
        

        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        if ($checkPwd == false)
        {
            $statement = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }
        elseif($checkPwd == true)
        {
            $statement = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;');

            if (!$statement->execute(array($uid, $uid, $pwdHashed[0]["users_pwd"]))) {
                $statement = null;
                header("location: ../index.php?error=statementfailed");
                exit();
            }

            
            if ($statement->rowCount() == 0)
            {
                $statement = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $statement->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];
            $statement = null;

        }

        $statement = null;
    }

}