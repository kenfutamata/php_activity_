<?php

class department{
    private $dept_id; 
    private $dept_name; 
    private $dept_head; 
    private $status; 
    private $no_of_emp; 

    public function __construct($dept_id, $dept_name, $dept_head, $status, $no_of_emp)
    {
        $this->dept_id = $dept_id; 
        $this->dept_name = $dept_name; 
        $this->dept_head = $dept_head; 
        $this->status = $status; 
        $this->no_of_emp = $no_of_emp; 
    }

    public function getDept_id(){
        return $this->dept_id; 
    }

    public function getDept_name(){
        return $this->dept_name; 
    }

    public function getDept_head(){
        return $this->dept_head; 
    }

    public function getStatus(){
        return $this->status; 
    }

    public function getNoOfEmp(){
        return $this->no_of_emp; 
    }

    public function display(){
        echo "Department No.: ".$this->getDept_id()."<br>";
        echo "Department Name: ".$this->getDept_name()."<br>"; 
        echo "Status: ".$this->getStatus()."<br>";
        echo "Number of Employees: ".$this->getNoOfEmp()."<br>";
        echo "<br>"; 
    }
}
?>