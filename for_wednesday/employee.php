<?php
class Employee {
    private $emp;
    function __construct($emp) {
        $this -> emp = $emp;
    }

    public function getEMP(){
        return $this -> emp; 
    }
    function displayEmployee() {
        foreach ($this -> emp as $employee){
            echo "ID: ".$employee[0]."<br>";
            echo "Name: ".$employee[1]."<br>";
            echo "Department: ".$employee[2]."<br>";
            echo "Position: ".$employee[3]."<br>";
            echo "Phone: ".$employee[4]."<br>";
        }
    }
}
?>