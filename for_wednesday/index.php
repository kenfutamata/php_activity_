<?php
require 'employee.php';
require 'department.php'; 

$employee_list = array(
[
    1, 
    "Tamad", 
    "Juan", 
    "DICT", 
    "Senior Developer",
    12345678901,
    
],

[
    2, 
    "Yatong", 
    "Kezekiah", 
    "DOM", 
    "Public Relations",
    12345678901,
    
],

[
    3, 
    "Santos", 
    "Mark", 
    "DOH", 
    "Doctor",
    12345678901,
    
],
);

$department_list = array(
    [
        1, 
        "DICT", 
        "Mark Santos III", 
        "Active", 
        65,
        
    ],
    
    [
        2, 
        "DOH", 
        "Juan Dela Cruz", 
        "Unactive", 
        0,
        
    ],
    
    [
        3, 
        "DOM", 
        "Juan Santos", 
        "Active", 
        23,
        
    ],
    );
echo "Employees List<br><pre>";
 
$emp = new Employee($employee_list); 
$emp ->displayEmployee(); 
echo "</pre>";

echo "Departmen List<br><pre>";
 
$dep = new Employee($department_list); 
$dep ->displayEmployee(); 
echo "</pre>";

?>