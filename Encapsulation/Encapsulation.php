<?php

class Student {
    private $firstname;
    private $gender;

    public function getFirstName() {
        return $this->firstname;
    }

    public function setFirstName($firstname) {
        $this->firstname = $firstname;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }
}

$student = new Student();
$student->setFirstName('Igor');
echo $student->getFirstName();
