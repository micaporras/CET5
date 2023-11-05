<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //Grabbing the data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
    $pwdrepeat = htmlspecialchars($_POST["pwdrepeat"], ENT_QUOTES, 'UTF-8');

    // Instatiate signup controller class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup.contr.classes.php";
    $signup = new SignupContr($uid, $email, $pwd, $pwdrepeat);

    // Running error handlers and user signup
    $signup->signupUser();

    $userId = $signup->fetchUserId($uid);

    // Instatiate profile info controller class
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileInfo = new ProfileInfoContr($userId, $uid);
    $profileInfo->defaultProfileInfo();

    // Going back to front page
    header("location: ../index.php?error=none");
}