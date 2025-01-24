<?php

class student{
    public $fname; 
    public $lname;
    public $dob;


    public function __construct($student)
    {
        $this->fname = $student->fname; 
        $this->lname = $student->lname; 
    }

    public function getFname(){
        return $this -> $fname;  
    }

    public function getLname(){
        return $this -> $lname;  
    }


    public function _toString(){
        print_r("My Name is ". $this->getFname()." ". $this->getLname()."\n"); 
    }

}

class order{

    public $order_id;
    public $student_id;
    public $product_id;
    public $order_date;
    public $order_status;
    public $total_amount;
    public $ship_address;
    public $payment_method;
    public $shipping_cost;
    public $discount;

    public function __construct($order){
        $this->order_id = $order_id;
        $this->student_id = $student_id;
        $this->product_id = $product_id;
        $this->order_date = $order_date;
        $this->order_status = $order_status; 
        $this->total_amount = $total_amount;
        $this->ship_address = $ship_address;
        $this->payment_method = $payment_method;
        $this->shipping_cost = $shipping_cost;
        $this->discount = $discount;
    }

    public function display(){
        echo"Order id ".$this->order_id."\n";
        echo"Student id ".$this->student_id."\n";
        echo"Product id ".$this->product_id."\n";
        echo"Order date ".$this->order_date."\n";
        echo"Order status ".$this->order_status."\n";
        echo"Total Amount ".$this->total_amount."\n";
        echo"Shipping Address ".$this->ship_address."\n";
        echo"Payment method ".$this->payment_method."\n";
        echo"Shipping Cost ".$this->shipping_cost."\n";
        echo"Discount ".$this->discount."\n";
    }
}
$student =new student($student); 
$student->fname= 'Juan'; 
$student ->lname ='Tamad'; 
$student->StudentName();

$order = new order($order); 
$order->order_id = 1; 
$order->student_id = 1;
$order->product_id = 1;
$order->order_date = "1/1/1970";
$order->order_status = "Delivered";
$order->total_amount = "250";
$order->ship_address = "250 Gibson Street";
$order->payment_method = "card";
$order->shippping_cost = 250;
$order->order_id = True;

$order->display(); 
?>