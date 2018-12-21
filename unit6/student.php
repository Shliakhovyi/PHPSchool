<?php

class Student
{
    private $firstname;
    private $lastname;
    private $gender;
    private $status;
    private $gpa;

    public function __construct($firstname, $lastname, $gender, $status)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setGender($gender);
        $this->setStatus($status);
    }

    /**
     * @param mixed $firstname
     */
    private function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    private function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $lastname
     */
    private function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    private function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $gender
     */
    private function setGender($gender)
    {
        if ($gender == 'male') {
            $this->gender = 'male';
        } else {
            $this->gender = 'female';
        }
    }

    /**
     * @return mixed
     */
    private function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gpa
     */
    private function setGpa($gpa)
    {
        $this->gpa = round($gpa, 1);
    }

    /**
     * @return mixed
     */
    private function getGpa()
    {
        return $this->gpa;
    }

    /**
     * @param mixed $status
     */
    private function setStatus($status)
    {
        if ($status == 'freshman') {
            $this->status = 'freshman';
        } elseif ($status == 'sophomore') {
            $this->status = 'sophomore';
        } elseif ($status == 'junior') {
            $this->status = 'junior';
        } else {
            $this->status = 'seniour';
        }
    }

    /**
     * @return mixed
     */
    private function getStatus()
    {
        return $this->status;
    }

    public function showMyself() {
        var_export("Firstname: " . $this->getFirstname() . PHP_EOL . "Lastname: " . $this->getLastname() . PHP_EOL . "Gender: " . $this->getGender() . PHP_EOL . "Status: " . $this->getStatus() . PHP_EOL . "GPA: " . $this->getGpa() . PHP_EOL);
    }

    public function studyTime($study_time) {
        $gpaTemp = 0;
        $gpaTemp += log($study_time);
        if ($gpaTemp <= 4.0) {
            $this->setGpa($gpaTemp);
        } else {
            $this->setGpa('4.0');
        }
    }
}

$obj = new Student('name', 'last', 'male', 'seniour');

$obj->studyTime(10);

$obj->showMyself();




