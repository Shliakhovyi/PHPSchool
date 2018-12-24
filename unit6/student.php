<?php

class Student
{
    private $firstname;
    private $lastname;
    private $gender;
    private $status;
    private $gpa = 0;

    public function __construct($firstname, $lastname, $gender, $status)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setGender($gender);
        $this->setStatus($status);
    }

    public function __destruct()
    {
        print "Destruct " . __CLASS__ . PHP_EOL;
    }

    public function __toString()
    {
        return "Firstname: " . $this->getFirstname() . PHP_EOL . "Lastname: " . $this->getLastname()
            . PHP_EOL . "Gender: " . $this->getGender() . PHP_EOL . "Status: " . $this->getStatus() . PHP_EOL . "GPA: "
            . $this->getGpa() . PHP_EOL;
    }

    public function __invoke($x)
    {
        var_dump("__invoke implemented for using obj as function. Print argument: " . $x);
    }

    public function __debugInfo()
    {
        return [
            'Firstname' => $this->firstname,
            'Lastname' => $this->lastname,
        ];
    }

    public function __call($name, $arguments)
    {
        echo "Call to undefined method in class Student. Method: '$name', argument: "
            . implode(', ', $arguments) . PHP_EOL;
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
        try {
            if ($gender == 'male') {
                $this->gender = 'male';
            } elseif ($gender =='female') {
                $this->gender = 'female';
            } else {
                throw new Exception();
            }
        } catch (Exception $e) {
            print "Select proper gender: male or female" . PHP_EOL . PHP_EOL;
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
    private function addGpa($gpa)
    {
        $this->gpa += round($gpa, 1);
    }

    /**
     * @return mixed
     */
    private function getGpa()
    {
        if ($this->gpa >= 4) {
            return $this->gpa = 4.0;
        } else {
            return $this->gpa;
        }
    }

    /**
     * @param mixed $status
     */
    private function setStatus($status)
    {
        try {
            if ($status == 'freshman') {
                $this->status = 'freshman';
            } elseif ($status == 'sophomore') {
                $this->status = 'sophomore';
            } elseif ($status == 'junior') {
                $this->status = 'junior';
            } elseif ($status == 'senior') {
                $this->status = 'senior';
            } else {
                throw new Exception();
            }
        } catch (Exception $e) {
            print "Select proper status" . PHP_EOL . PHP_EOL;
        }
    }

    /**
     * @return mixed
     */
    private function getStatus()
    {
        return $this->status;
    }


    /**
     * @print student info
     */
    public function showMyself() {
        print_r("Firstname: " . $this->getFirstname() . PHP_EOL . "Lastname: " . $this->getLastname()
            . PHP_EOL . "Gender: " . $this->getGender() . PHP_EOL . "Status: " . $this->getStatus() . PHP_EOL . "GPA: "
            . $this->getGpa() . PHP_EOL . PHP_EOL);
    }


    /**
     * @param $study_time
     */
    public function studyTime($study_time) {
        $gpaTemp = 0;
        $gpaTemp += log($study_time);
        if ($gpaTemp <= 4.0) {
            $this->addGpa($gpaTemp);
        } else {
            $this->addGpa('4.0');
        }
    }
}

$studentOne = new Student('Mike', 'Barnes', 'male', 'freshman');
$studentOne->studyTime(100);

$studentTwo = new Student('Jim', 'Nickerson', 'male', 'sophomore');
$studentTwo->studyTime(21);

$studentThree = new Student('Jack', 'Indabox', 'male', 'junior');
$studentThree->studyTime(12);

$studentFour = new Student('Jane', 'Miller', 'female', 'senior');
$studentFour->studyTime(35);

$studentFive = new Student('Mary', 'Scott', 'female', 'senior');
$studentFive->studyTime(15);

$studentList = array($studentOne, $studentTwo, $studentThree, $studentFour, $studentFive);

foreach ($studentList as $value) {
    $value->showMyself();
}

$studentOne->studyTime(1);
$studentTwo->studyTime(1.7);
$studentThree->studyTime(0.7);
$studentFour->studyTime(5);
$studentFive->studyTime(16.7);

foreach ($studentList as $value) {
    $value->showMyself();
}