<?php

class ProfileInfoView extends ProfileInfo {

    public function fetchLastName($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_lastname"];
    }

    public function fetchFirstName($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_firstname"];
    }

    public function fetchBirthday($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_bday"];
    }

    public function fetchMobileNumber($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_mobilenum"];
    }

    public function fetchGender($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_gender"];
    }

    public function fetchAddress($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_address"];
    }

    public function fetchSchool($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_school"];
    }

    public function fetchStudentNumber($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_studnum"];
    }

    public function fetchCourse($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_course"];
    }

    public function fetchYear($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_year"];
    }

    public function fetchDescription($userId){
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_description"];
    }
    
}