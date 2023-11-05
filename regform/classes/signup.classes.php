<?php

class Signup extends Dbh {

    protected function setUser($uid, $email, $pwd) {
        $statement = $this->connect()->prepare('INSERT INTO users (users_uid, users_email, users_pwd) VALUES (?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$statement->execute(array($uid, $email, $hashedPwd))) {
            $statement = null;
            header("location: ../index.php?error=statementfailed");
            exit();
        }

        $statement = null;
    }

    protected function checkUser($uid, $email) {
        $statement = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? or users_email = ?;');

        if (!$statement->execute(array($uid, $email))) {
            $statement = null;
            header("location: ../index.php?error=statementfailed");
            exit();
        }

        $resultCheck = false;
        if ($statement->rowCount() > 0) 
        {
            $resultCheck = false;
        }
        else 
        {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function getUserId($uid){
        $stmt = $this->connect()->prepare('SELECT users_id FROM users WHERE users_uid = ?;');

        if(!$stmt->execute(array($uid))){
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }

}