
<?php
include('system/includes/connect.php');
include("system/functions/common_function.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
     <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="index.css?v=<?= time();?>">
    <style>
        .product{
            width: 60%;
            margin:auto;
            text-align:center;
            display: flex;
            justify-content: space-evenly;
            align-items:center;
        }
        .product .text{
            font-size: 25px;
        }
        .product .text p{
            margin-top: 10px;
        }
        .text p:nth-child(2){
            font-size: 20px;
        }
        .product img{
            width: 200px;
        }
    </style>
</head>
<body>
 <!-- first child -->
    <nav class="top">
        <div class="container-fluid">
            <div class="container">
                <ul>
                    <li><i class = "fas fa-clock"></i> 7:30AM-9:30PM</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i></i> +233 558 465 569</li>
                </ul>
                <ul>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </div>
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
            <!-- menu tabs / navigational buttons -->
            <ul class="navbars">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="index.php">About</a>
                </li>
                <li>
                    <a href="system/pages/item.php">Items</a>
                </li>
                <li>
                    <a href="index.php">Pages</a>
                </li>
                <li>
                    <a href="index.php">Contact</a>
                </li>
            </ul>
            <!-- cart section -->
            <div class="shopping_cart">
                <div class="cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="cart_number">
                    <p><?php cart_num();?></p>
                </div>
            </div>
            <div class="delivery">
                <div>
                    <p>Free delivery</p>
                </div>
                <div>
                    <img src="system/images/others/WAHM-UberEats-removebg-preview.png" alt="">
                </div>
            </div>
            <!-- login -->
            <div class="login">
                <p>Login</p>
            </div>
       </div>
    </nav>


        <!-- calling the cart function -->

        <?php
            cart();
        ?>
        
    <?php    
                        view_details();
                    ?>

    <div class="footer">
        <p> Web Tech Project work &copy;Group24 </p>
    </div>
    
                <!-- JavaScript links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <!-- custom js -->
   <scriptn scr = 'js/addToCart.js'></script>
    <script src="index.js"></script>
</body>
</html>