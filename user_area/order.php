<?php
include('../system/includes/connect.php');
include('../system/functions/common_function.php');

if(isset($_GET['user_id'])){
     $user_id=$_GET['user_id'];
}


// Getting total items and total prices for all items
$get_ip_address= getIPAddress();
$total_price=0;
$cart_total_price="SELECT * FROM `cart_details` where ip_address='$get_ip_address'";
$result=mysqli_query($con,$cart_total_price);
$invoice_number=mt_rand();
$status = 'pending';
$count_product=mysqli_num_rows($result);
while($row_price=mysqli_fetch_array($result)){
    $product_id=$row_price['product_id'];
    $select_product="SELECT * FROM `products` where product_id=$product_id";
    $select_result=mysqli_query($con,$select_product);
    while($row_product_price=mysqli_fetch_array($select_result)){
        $product_price=array($row_product_price['product_price']);
        $product_price_values=array_sum($product_price);
        $total_price += $product_price_values;
    }
}

// Getting quantity from cart table
$get_cart = "SELECT * FROM `cart_details`";
$run_cart = mysqli_query($con,$get_cart);
$get_item_quantity=mysqli_fetch_array($run_cart);
$quantity=$get_item_quantity['quantity'];
if($quantity == 0){
    $quantity = 1;
    $subtotal=$total_price;
}else{
    $quantity=$quantity;
    $subtotal=$total_price*$quantity;
}

// insert order into the orders table
$insert_orders="INSERT INTO `user_orders` (user_id,amount,invoice_number,total_products,order_date,order_status) values($user_id,$subtotal,$invoice_number,$count_product,NOW(),'$status')";
$result_query=mysqli_query($con,$insert_orders);
if($result_query){
    echo "<script>alert('Orders submitted successfully!')</script>";
    echo "<script>window.open('profile.php','_self')</script>";
}


// inserting products into orders pending table
$insert_pending_orders="INSERT INTO `orders_pending` (user_id,invoice_number,product_id,quantity,order_status) values($user_id,$invoice_number,$product_id,$quantity,'$status')";
$pending_result_query=mysqli_query($con,$insert_pending_orders);

// deleting items from cart

$empty_cart="Delete From `cart_details` where ip_address='$get_ip_address'";
$empty_cart_result=mysqli_query($con,$empty_cart);
?>