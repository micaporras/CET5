<?php
    include_once "header.php";

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";
    $profileInfo = new ProfileInfoView();
?>



<div class="display">
    <div class="title1">
        <h1>BASIC INFORMATION</h1>
    </div>
    <div>
        <div class="columns">
            <div>
                <h3>FIRST NAME</h3>
                <p>
                    <?php
                        $profileInfo->fetchFirstName($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div>
                <h3>LAST NAME</h3>
                <p>
                    <?php
                        $profileInfo->fetchLastName($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div>
                <h3>BIRTHDAY</h3>
                <p>
                    <?php
                        $profileInfo->fetchBirthday($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div>
                <h3>MOBILE NUMBER</h3>
                <p>
                    <?php
                        $profileInfo->fetchMobileNumber($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div>
                <h3>GENDER</h3>
                <p>
                    <?php
                        $profileInfo->fetchGender($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div>
                <h3>ADDRESS</h3>
                <p>
                    <?php
                        $profileInfo->fetchAddress($_SESSION["userid"]);
                    ?>
                </p>
            </div>
        </div>
        <div class="columns">
            <div>
                <h3>SCHOOL</h3>
                <p>
                    <?php
                        $profileInfo->fetchSchool($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div>
                <h3>STUDENT NUMBER</h3>
                <p>
                    <?php
                        $profileInfo->fetchStudentNumber($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div>
                <h3>COURSE</h3>
                <p>
                    <?php
                        $profileInfo->fetchCourse($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div>
                <h3>CURRENT YEAR</h3>
                <p>
                    <?php
                        $profileInfo->fetchYear($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div>
                <h3>SHORT SELF-DESCRIPTION</h3>
                <p>
                    <?php
                        $profileInfo->fetchDescription($_SESSION["userid"]);
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>
</body>

