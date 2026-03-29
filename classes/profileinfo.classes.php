<?php

class ProfileInfo extends Dbh {

    protected function getProfileInfo($userId){
        $stmt = $this->connect()->prepare('SELECT * FROM profiles WHERE users_id = ?;');

        if(!$stmt->execute(array($userId))){
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


    protected function setNewProfileInfo($profileLN, $profileFN, $profileBDAY, $profileMobieleNum, $profileGender, $profileAddress, $profileSchool, $profileStudNum, $profileCourse, $profileYear, $profileDescription, $userId){
        $stmt = $this->connect()->prepare('UPDATE profiles SET profiles_lastname = ?, profiles_firstname = ?, profiles_bday = ?, profiles_mobilenum = ?, profiles_gender = ?, profiles_address = ?, profiles_school = ?, profiles_studnum = ?, profiles_course = ?, profiles_year = ?, profiles_description = ? WHERE users_id = ?;');

        if(!$stmt->execute(array($profileLN, $profileFN, $profileBDAY, $profileMobieleNum, $profileGender, $profileAddress, $profileSchool, $profileStudNum, $profileCourse, $profileYear, $profileDescription, $userId))){
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function setProfileInfo($profileLN, $profileFN, $profileBDAY, $profileMobieleNum, $profileGender, $profileAddress, $profileSchool, $profileStudNum, $profileCourse, $profileYear, $profileDescription, $userId){
        $stmt = $this->connect()->prepare('INSERT INTO profiles (profiles_lastname, profiles_firstname, profiles_bday, profiles_mobilenum, profiles_gender, profiles_address, profiles_school, profiles_studnum, profiles_course, profiles_year, profiles_description, users_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

        if(!$stmt->execute(array($profileLN, $profileFN, $profileBDAY, $profileMobieleNum, $profileGender, $profileAddress, $profileSchool, $profileStudNum, $profileCourse, $profileYear, $profileDescription, $userId))){
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}