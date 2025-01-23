<?php

class student{
    public $fname; 
    public $lname;
    public $dob;
    public $address; 
    public $city; 
    public $zip; 

    public function __construct($student)
    {
        $this->fname = $student->fname; 
        $this->lname = $student->lname; 
        $this->dob = $student->dob; 
        $this->address = $student->address; 
        $this->city= $student->city; 
        $this->zip = $student->zip; 
    }

    public function getFname(){
        return $this -> fname;  
    }

    public function getLname(){
        return $this -> lname;  
    }

    public function getDob(){
        return $this -> dob;  
    }

    public function getAddress(){
        return $this -> address;  
    }

    public function getCity(){
        return $this -> city;
    }

    public function getZip(){
        return $this -> zip; 
    }

    public function StudentName(){
        echo "My Name is ". $this->getFname()." ". $this->getLname(); 
    }

    public function age(){
        $age = date('Y-M-D')-$this->getDob(); 
        echo "My age is ".$age; 
    }

    public function address(){
        echo "I live in".$this->getAddress().",".$this->getCity().",".$this->getZip(); 
    }
}
$student = new student($student); 
$student->fname='Juan'; 
$student ->lname = 'Tamad'; 
$student->dob = "1970-1-1"; 
$student ->address = "Brgy Looc";
$student -> city = "Mandaue City"; 
$student -> zip = 6014; 
$student->StudentName();
$student->age(); 
$student->address(); 
?>