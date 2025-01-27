<?php

class employee{
    private $emp_id; 
    private $lname; 
    private $fname; 
    private $department; 
    private $position; 
    private $phone; 

    public function __construct($emp_id, $lname, $fname, $department, $position, $phone)
    {
        $this->emp_id = $emp_id; 
        $this->lname = $lname; 
        $this->fname = $fname; 
        $this->department = $department; 
        $this->position = $position; 
        $this->phone = $phone; 
    }

    public function getEmp_id(){
        return $this->emp_id; 
    }

    public function getLname(){
        return $this->lname; 
    }

    public function getFname(){
        return $this->fname; 
    }

    public function getDepartment(){
        return $this->department; 
    }

    public function getPosition(){
        return $this->position; 
    }

    public function getPhone(){
        return $this->phone; 
    }

    public function display(){
        echo "\n"; 
        echo "Employee ID: ".$this->getEmp_id()."<br>";
        echo "Last Name: ".$this->getLname()."<br>";
        echo "First Name: ".$this->getFname()."<br>";
        echo "Department: ".$this->getDepartment()."<br>";
        echo "Position: ".$this->getPosition()."<br>";
        echo "Phone Number: ".$this->getPhone()."<br>";
        echo "<br>";
    }
}
?>