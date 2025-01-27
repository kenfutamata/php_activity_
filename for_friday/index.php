<?php
require 'employee.php';
require 'department.php'; 

$employee_list = array(
[
    'emp_id'=>1, 
    'lname'=>"Tamad", 
    'fname'=>"Juan", 
    'department'=>"DICT", 
    'position'=>"Senior Developer",
    'phone'=>12345678901,
    
],
[
    'emp_id'=>2, 
    'lname'=>"Johnson", 
    'fname'=>"Mark", 
    'department'=>"Accounting", 
    'position'=>"Accountant", 
    'phone'=>4232445521,
], 
[
    'emp_id'=>3, 
    'lname'=>"Santos", 
    'fname'=>"Kevin", 
    'department'=>"Marketing", 
    'position'=>"Marketing Assistant", 
    'phone'=>34325684242,
]
);

$depatment_list = array(
[
    'dept_id'=> 1,
    'dept_name' => "Department of Accounting", 
    'dept_head' => 'Mark Montes', 
    'status'=>'Active', 
    'no_of_emp' => 60,

],
[
    'dept_id'=> 2,
    'dept_name' => "Department of Engineering",
    'dept_head' => "Mark Gil", 
    'status'=>'Active', 
    'no_of_emp' => 75,
    
], 
[
    'dept_id'=> 3,
    'dept_name' => "Department of Agriculture", 
    'dept_head'=> "Jose Monte", 
    'status'=>'Unactive', 
    'no_of_emp' => 60,

]);
echo "Employees List<br>";
foreach($employee_list as $emp_list){
    $employee = new employee($emp_list['emp_id'], $emp_list['lname'], $emp_list['fname'], $emp_list['department'], $emp_list['position'], $emp_list['phone']); 
    $employee->display();
}
echo "Departments List"."<br>";
echo "<br>";
foreach($depatment_list as $dept_list){
    $department = new department($dept_list['dept_id'], $dept_list['dept_name'], $dept_list['dept_head'], $dept_list['status'], $dept_list['no_of_emp']); 
    $department->display();
}

?>