<?php
class Department {

    private $dep;
    function __construct($dep) {
        $this -> dep = $dep; 
    }

    public function getDep(){
        return $this -> dep; 
    }



    function displayDepartment() {
        foreach($this -> dep as $department){
            echo "<br/>Department ID: " . $department[0];
            echo "<br/>Department Name: " . $department[1];
            echo "<br/>Department Head: " . $department[2];
            echo "<br/>Status: " . $department[3];
            echo "<br/>Number of Employees: " . $department[4];


        }
        
    }
}
?>