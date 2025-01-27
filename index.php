<?php
class student{
    public $fname; 
    public $lname;
    public $dob;

    public function __construct($fname, $lname)
    {
        $this->fname = $fname; 
        $this->lname = $lname; 
    }

    public function getFname(){
        return $this -> fname;  
    }

    public function getLname(){
        return $this -> lname;  
    }


    public function display()
    {
        echo "My Name is ". $this->fname." ". $this->lname."\n";   
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

    public function __construct($order_id, $student_id, $product_id, $order_date, $order_status, $total_amount, $ship_address, $payment_method, $shipping_cost, $discount){
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
        echo"Order id ".$this->order_id."<br>";
        echo"Student id ".$this->student_id."<br>";
        echo"Product id ".$this->product_id."<br>";
        echo"Order date ".$this->order_date."<br>";
        echo"Order status ".$this->order_status."<br>";
        echo"Total Amount ".$this->total_amount."<br>";
        echo"Shipping Address ".$this->ship_address."<br>";
        echo"Payment method ".$this->payment_method."<br>";
        echo"Shipping Cost ".$this->shipping_cost."<br>";
        echo"Discount ".$this->discount."<br>";
    }
}

 $fname = "Juan"; 
 $lname = "Tamad"; 
$student =new student($fname, $lname); 
$student->display();

$order_id = 1; 
$student_id = 1; 
$product_id = 1; 
$order_date = "1/1/1970"; 
$order_status = "Delivered"; 
$total_amount = "250"; 
$ship_address = "250 Gibson Street"; 
$payment_method = "card";
$shipping_cost = 250; 
$discount = True; 

$order = new order($order_id, $student_id, $product_id, $order_date, $order_status, $total_amount, $ship_address, $payment_method, $shipping_cost, $discount); 
$order->display(); 
?>