<?php
    include_once "header.php";

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";
    $profileInfo = new ProfileInfoView();
?>


<section>
    <div class="container">
        <header>Student Basic Profile Form</header>

        <form action="includes/profileinfo.inc.php" method="post">
            <!-- first page -->
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="Name">Last Name</label>
                            <input type="text" name="lastname" placeholder="Enter your name" maxlength="30" required value="<?php $profileInfo->fetchLastName($_SESSION["userid"]); ?>">
                        </div>
                        <div class="input-field">
                            <label for="Name">First Name</label>
                            <input type="text" name="firstname" placeholder="Enter your name" maxlength="30" required value="<?php $profileInfo->fetchFirstName($_SESSION["userid"]); ?>">
                        </div>

                        <div class="input-field">
                            <label for="Birthday">Date of Birth</label>
                            <input type="date" name="bday" placeholder="Enter birth date" required value="<?php $profileInfo->fetchBirthday($_SESSION["userid"]); ?>">
                        </div>
            
                        <div class="input-field">
                            <label for="cpno">Mobile Number</label>
                            <input type="number" name="mobilenum" placeholder="Enter mobile number" required value="<?php $profileInfo->fetchMobileNumber($_SESSION["userid"]); ?>">
                        </div>

                        <div class="check">
                            <label>Gender</label><br/>
                            <div class="checkbox left">
                                <select value="<?php $profileInfo->fetchGender($_SESSION["userid"]); ?>">
                                    <input type="radio" name="gender" value="Female">&ensp;Female<br/>
                                    <input type="radio" name="gender" value="Male">&ensp;Male<br/>
                                    <input type="radio" name="gender" value="Others">&ensp;Others<br/>
                                </select>
                            </div>


                    </div>
                </div>

                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields1">
                        <div class="input-field">
                            <label>Complete Address</label>
                            <input type="text" name="address" placeholder="Enter address" required value="<?php $profileInfo->fetchAddress($_SESSION["userid"]); ?>">
                        </div>
                    </div>
                </div>

                <div class="details application">
                    <span class="title">Educational Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>School/University</label>
                            <input type="text" name="school" placeholder="Enter school/university" required value="<?php $profileInfo->fetchSchool($_SESSION["userid"]); ?>">
                        </div>
                        <div class="input-field">
                            <label>Student Number</label>
                            <input type="text" name="studnum" placeholder="Enter student number" required value="<?php $profileInfo->fetchStudentNumber($_SESSION["userid"]); ?>">
                        </div>
                        <div class="input-field">
                            <label>Course</label>
                            <input type="text" name="course" placeholder="Enter course" required value="<?php $profileInfo->fetchCourse($_SESSION["userid"]); ?>">
                        </div>
                        <div class="input-field">
                            <label>Current Year</label>
                            <select name="year" required value="<?php $profileInfo->fetchYear($_SESSION["userid"]); ?>">
                                <option disabled selected>Select year</option>
                                <option value="1st">1st Year</option>
                                <option value="2nd">2nd Year</option>
                                <option value="3rd">3rd Year</option>
                                <option value="4th">4th Year</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="additional">
                    <span>Tell something about yourself</span><br/>
                    <textarea name="description" id="additional" cols="120" rows="9"><?php $profileInfo->fetchDescription($_SESSION["userid"]); ?></textarea>
                </div>

                <button class="submit" type="submit" name="submit">
                    <span class="btnText">Submit</span>
                    <p>&ensp;→</p>
                </button>

            <!-- end of first page -->

        </form>
    </div>
</section>


<!-- </body> -->

