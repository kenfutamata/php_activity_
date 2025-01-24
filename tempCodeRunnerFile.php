<?php
$order = new order($order); 
$order->order_id = 1; 
$order->student_id = 1;
$order->product_id = 1;
$order->order_date = "1/1/1970";
$order->order_status = "Delivered";
$order->total_amount = "250";
$order->ship_address = "250 Gibson Street";
$order->payment_method = "card";
$order->shipping_cost = 250;
$order->order_id = True;
$order->display();