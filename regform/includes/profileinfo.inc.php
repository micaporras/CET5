<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $lastName = htmlspecialchars($_POST["lastname"], ENT_QUOTES, "UTF-8");
    $firstName = htmlspecialchars($_POST["firstname"], ENT_QUOTES, "UTF-8");
    $bday = htmlspecialchars($_POST["bday"], ENT_QUOTES, "UTF-8");
    $mobileNum = htmlspecialchars($_POST["mobilenum"], ENT_QUOTES, "UTF-8");
    $gender = htmlspecialchars($_POST["gender"], ENT_QUOTES, "UTF-8");
    $address = htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8");
    $school = htmlspecialchars($_POST["school"], ENT_QUOTES, "UTF-8");
    $studNum = htmlspecialchars($_POST["studnum"], ENT_QUOTES, "UTF-8");
    $course = htmlspecialchars($_POST["course"], ENT_QUOTES, "UTF-8");
    $year = htmlspecialchars($_POST["year"], ENT_QUOTES, "UTF-8");
    $description = htmlspecialchars($_POST["description"], ENT_QUOTES, "UTF-8");

    include "../classes/dbh.classes.php";
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileInfo = new ProfileInfoContr($id, $uid);

    $profileInfo->updateProfileInfo($lastName, $firstName, $bday, $mobileNum, $gender, $address, $school, $studNum, $course, $year, $description);

    header("location: ../profile.php?error=none");

}