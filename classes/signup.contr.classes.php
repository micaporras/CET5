<?php

class SignupContr extends Signup {

    private $uid;
    private $email;
    private $pwd;
    private $pwdrepeat;

    public function __construct($uid, $email, $pwd, $pwdrepeat) {
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
    }

    public function signupUser() {
        if ($this->emptyInput() == false) {
            // echo "Empty Input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUID() == false) {
            // echo "Invalid Username!";
            header("location: ../index.php?error=username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            // echo "Invalid Email!";
            header("location: ../index.php?error=email");
            exit();
        }
        if ($this->pwdMatch() == false) {
            // echo "Password does not match!";
            header("location: ../index.php?error=passworddoesnotmatch");
            exit();
        }
        if ($this->userMatch() == false) {
            // echo "Username or Email taken!";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->email, $this->pwd);
    }

    private function emptyInput() {
        $result = false;
        if(empty($this->uid) || 
           empty($this->email) || 
           empty($this->pwd) || 
           empty($this->pwdrepeat)) 
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidUID() {
        $result = false;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) 
        {
            $result = false;
        }
        else 
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) 
        {
            $result = false;
        }
        else 
        {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result = false;
        if ($this->pwd !== $this->pwdrepeat)
        {
            $result = false;
        }
        else 
        {
            $result = true;
        }
        return $result;
    }

    private function userMatch() {
        $result = false;
        if (!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else 
        {
            $result = true;
        }
        return $result;
    }

    public function fetchUserId($uid){
        $userId =$this->getUserId($uid);
        return $userId[0]["users_id"];
    }

}