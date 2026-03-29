<?php

class ProfileInfoContr extends ProfileInfo {

    private $userId;
    private $userUid;

    public function __construct($userId, $userUid) {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo() {
        $profileLN = "Lawrence";
        $profileFN = "Jennifer";
        $profileBDAY = "09-13-2002";
        $profileMobieleNum = "09123456789";
        $profileGender = "Female";
        $profileAddress = "Pasig City";
        $profileSchool = "Polytechnic University of the Philippines";
        $profileStudNum = "2021-0000-MN-0";
        $profileCourse = "Bachelor of Science in Computer Engineering";
        $profileYear = "3rd Year";
        $profileDescription = "When did it end? All the enjoyment. I'm sad again, don't tell my boyfriend. It's not what he's made for. What was I made for?"; 
        $this->setProfileInfo($profileLN, $profileFN, $profileBDAY, $profileMobieleNum, $profileGender, $profileAddress, $profileSchool, $profileStudNum, $profileCourse, $profileYear, $profileDescription, $this->userId);
    }

    public function updateProfileInfo($lastName, $firstName, $bday, $mobileNum, $gender, $address, $school, $studNum, $course, $year, $description) {
        // Error handlers
        if($this->emptyInputCheck($lastName, $firstName, $bday, $mobileNum, $gender, $address, $school, $studNum, $course, $year, $description) == true){
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }

        //Update profile info
        $this->setNewProfileInfo($lastName, $firstName, $bday, $mobileNum, $gender, $address, $school, $studNum, $course, $year, $description, $this->userId);
    }

    private function emptyInputCheck($lastName, $firstName, $bday, $mobileNum, $gender, $address, $school, $studNum, $course, $year, $description) {
        $result;
        if(empty($lastName) || empty($firstName) || empty($bday) || empty($mobileNum) || empty($gender) || empty($address) || empty($school) || empty($studNum) || empty($course) || empty($year) || empty($description)) {
            $result = true;
        }
        else{
            $result = false;
        }   
        return $result;
    }

}