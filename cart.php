
<?php
include('system/includes/connect.php');
include("system/functions/common_function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard / Home</title>
     <!-- fontawesome css link -->
    <link rel="stylesheet" href="fontawesome/css/all.css?v=<?= time();?>">
    <!-- custom css links -->
    <link rel="stylesheet" href="index.css?v=<?= time();?>">
    <link rel="stylesheet" href="cart.css?v=<?= time();?>">
</head>
<body>

    <!-- first child -->
    <nav class="top">
        <div class="container-fluid">
        </div>
    </nav>
    <!-- second child -->
    <nav class='menu_navbar'>
       <div class="container">
            <!-- Logo -->
            <ul class="logo">
                <li>
                    <img src="system/images/logo/restaurant-icon-orange-sticker-vector-1789907-removebg-preview.png" alt="">
                </li>
            </ul>
           
            <!-- cart section -->
            <div class="shopping_cart">
                <p>YOUR CART</p>
            </div>
            <div class="delivery">
                <div>
                    <p>Free delivery</p>
                </div>
                <div>
                    <img src="system/images/others/WAHM-UberEats-removebg-preview.png" alt="">
                </div>
            </div>
       </div>
    </nav>

        <!-- calling the cart function -->

        <?php
            cart();
        ?>

    <!-- top navbar -->
    <div class="container-fluid">
    
                <!-- Cart table -->
                <div class="container">
                    <div class="row">
                        <form action="" method = "POST">
                        <table class="table">
                            
                            <tbody>
                                <!-- php code to display dynamic cart element -->
                                <?php
                                    global $con;
    $total_price = 0;
    $ip = getIPAddress();
    $cart_query="select * from `cart_details` where ip_address = '$ip'";
    $result_cart=mysqli_query($con,$cart_query);
    $results_count=mysqli_num_rows($result_cart);
    if($results_count>0){
        echo "<thead>
                                <tr>
                                    <th  style = 'padding: 20px 20px 20px 0px; font-size:25px;'>Product title</th>
                                    <th style = 'padding: 20px 20px 20px 0px; font-size:25px;'>Product Image</th>
                                    <th style = 'padding: 20px 20px 20px 0px; font-size:25px;'>Quantity</th>
                                    <th style = 'padding: 20px 40px 20px 20px; font-size:25px;'>Price</th>
                                    <th style = 'padding: 20px 20px 20px 0px; font-size:25px;'>Remove</th>
                                    <th colspan='2' style = 'padding: 20px 20px 20px 0px; font-size:25px;'>Operations</th>
                                </tr>
                            </thead>";
    while($row=mysqli_fetch_array($result_cart)){
        $product_id=$row['product_id'];
        $product_query="select * from `products` where product_id = $product_id";
        $result_product=mysqli_query($con,$product_query);
        while($row_product_price=mysqli_fetch_array($result_product)){
            $product_price=array($row_product_price['product_price']);
            $price_table=$row_product_price['product_price'];
            $product_title=$row_product_price['product_title'];
            $product_image1=$row_product_price['product_image1'];
            $product_price_values=array_sum($product_price);
            $total_price +=$product_price_values;
     
                                ?>
                                <tr style="padding-bottom: 10px;" >
                                    <td style=" margin-bottom: 10px;"><?php echo $product_title ?></td>
                                    <td style = "border-radius: 20px; overflow: hidden; margin-bottom: 10px;"><img src="system/product_images/<?php echo $product_image1 ?>"/></td>
                                    <td> <input type="text" style="border: none; border: 1px solid #cd3333; outline: none; border-radius: 10px; padding: 10px 20px;" name = 'qty' class = "form-input p-50"></td>

                                    <?php
                                        $ip = getIPAddress();
                                        if(isset($_POST['update_cart'])){
                                            $quantity=$_POST['qty'];
                                            $update_cart="update `cart_details` set quantity=$quantity where ip_address='$ip'";
                                            $result=mysqli_query($con,$update_cart);
                                            $total_price=$total_price*$quantity;
                                        }
                                    ?>

                                    <td style = "padding: 0px 40px; font-size: 25px;">&cent; <?php echo  $price_table ?> </td>
                                    <td> <input type = 'checkbox' style = "width: 50px;" name='removeItem[]' value="<?php echo $product_id; ?>"/> </td>
                                    <td class="d-flex">
                                        <!-- <button class = "bg-color px-3 border-0 me-3">Update</button> -->
                                        <input type="submit" value = "Update Cart" style="padding: 10px 20px; background-color: #cd3333; color: #fff; font-size: 20px; border: none; border-radius: 10px;" name = "update_cart">
                                        <!-- <button class = "bg-color px-3 border-0 me-3">Remove</button> -->
                                        <input type="submit" style="padding: 10px 20px; background-color: #cd3333; color: #fff; font-size: 20px; border: none; border-radius: 10px;" value = "Remove Cart" class = "bg-color px-3 border-0 me-3" name = "remove_cart_item">
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                               }
    }}
    else{
        echo "<h2 class='text-danger'>Cart is empty</h2>";
    }
    ?>
                        </table>
                        <!-- Total price of the product -->
                        <div class="d-flex">
                            <?php
    $ip = getIPAddress();
    $cart_query="select * from `cart_details` where ip_address = '$ip'";
    $result_cart=mysqli_query($con,$cart_query);
    $results_count=mysqli_num_rows($result_cart);
    if($results_count>0){
        echo "<h4 class = 'px-3'>Total: &cent;<span style = 'color:red;'> $total_price</span></h4>
                             <input type='submit' style='margin-top:30px; padding: 10px 20px; background-color: #cd3333; color: #fff; font-size: 20px; border: none; border-radius: 10px;' value = 'Continue Shopping' name = 'continue-shopping'>
                             <button  style='margin-top:30px; padding: 10px 20px; background-color: #cd3333; font-size: 20px; border: none; border-radius: 10px;'  class = 'bg-color px-3 border-0 ms-3'><a href='user_area/checkout.php' style = 'color: #fff;' class = 'text-white text-decoration-none'>checkout</a></button>";
    }else{
        echo "<input type='submit'  style = 'margin-top:30px; background-color: #cd4444; color: #fff; cursor: pointer; border-radius: 10px; margin-bottom: 20px; border: none; padding: 10px 20px;'  value = 'Continue Shopping' class = 'bg-color px-3 border-0 me-3 back_home' name = 'continue-shopping'>";
    }
    if(isset($_POST['continue-shopping'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
                            ?>
                            
                        </div>
                        </form>

                        <!-- function to remove cart element -->
                        <?php
                        function remove_cart_item(){
                            global $con;
                            if(isset($_POST['remove_cart_item'])){
                                foreach($_POST['removeItem'] as $remove_item);
                                echo $remove_item;
                                $delete_query="Delete from `cart_details` where product_id=$remove_item";
                                $run_query=mysqli_query($con,$delete_query);
                                if($run_query){
                                    echo "<script>window.open('cart.php', '_self')</script>";
                                }
                            }
                        }
                        echo $remove_Cart_element=remove_cart_item();

?>

                    </div>
                </div>
    </div>

    <footer class="footer">
        CopyRight &copy; 2023 || SE Group5
    </footer>
    
   <!-- custom js -->
   <scriptn scr = 'js/addToCart.js'></script>
    <script src="index.js"></script>
    <script src="fontawesome/js/all.js"></script>
</body>
</html>