<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<style>
    <?php include "style1.css" ?>
</style>
<body>    
   <div class="nav">
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="profile.php">YourPage</a>
            </div>
            <div class="menu-bar">
            <ul>
                <?php
                    if(isset($_SESSION["userid"]))
                    {
                ?>
                    <li><a><?php echo $_SESSION["useruid"]; ?></a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="profilesettings.php">Edit Profile</a></li>
                            <li><a href="includes/logout.inc.php">Logout</a></li>
                        </ul>
                    </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
            </div>
        </div>
    </nav>
    </div>

</html>