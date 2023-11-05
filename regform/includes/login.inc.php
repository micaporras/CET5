<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //Grabbing the data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');

    // Instatiate signup controller class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login.contr.classes.php";
    $login = new LoginContr($uid, $pwd);

    // Running error handlers and user signup

    $login->loginUser();

    // Going back to front page
    header("location: ../profile.php?error=none");
}