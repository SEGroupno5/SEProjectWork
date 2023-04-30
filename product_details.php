
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
    <link rel="stylesheet" href="products.css?v=<?= time();?>">
    <style>

        .viewAllProduct{
            margin: 50px 0px;
        }
        .product{
            width: 85%;
            margin:auto;
            text-align:center;
            display: flex;
            justify-content: space-evenly;
            align-items:center;
        }
        .product .text{
            font-size: 25px;
            width: 50%;
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: center;
        }
        p.title{
            display: block;
            width: 100%;
            margin-bottom: 20px;
            font-size: 35px;
            color: #cd3333;
            font-weight: 600;
        }
        p.description{
            width: 100%;
        }
        .title_description{
            margin-left: 20px;
            display: block;
            width: 60%;
        }
        p.price{
            width: 10%;
            font-size: 25px;
        }
        .product .text p{
            margin-top: 10px;
        }
        .text p:nth-child(2){
            font-size: 20px;
        }
        .product img{
            width: 500px;
        }
        
    </style>
</head>
<body>
 <!-- first child -->
   
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
            <ul class="cart-container">
                                <li class="nav-item">
                                    <div class="shopping-cart" onclick="poppup()">
                                        <a href="cart.php">
                                            <i class="fas fa-cart-arrow-down cart"></i>
                                            <p id="count"><?php cart_num();?></p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
            <div class="delivery">
                <div>
                    <p>Free delivery</p>
                </div>
                <div>
                    <img src="system/images/others/WAHM-UberEats-removebg-preview.png" alt="">
                </div>
            </div>
            <!-- login -->
            <div class='d-flex'>  
                    
                
                
                                    <?php
                                        if(!isset($_SESSION['username'])){
                                            echo"<div class='register'>
                                            <a href='user_area/user_registration.php'>Register</a>
                                            </div>";
                                        }else{
                                            echo"<p class = 'user_name'>Welcome"." ".$_SESSION['username']." "."</p>";
                                        }
                                        if(!isset($_SESSION['username'])){
                                            echo"<div class='login'>
                                            <a href='user_area/user_login.php'><p></p>Login</a>
                                            </div>";
                                        }else{
                                            echo"<div class = 'logout'><a href='user_area/user_logout.php' class='logout'><p></p> Logout</a></div>";
                                        }
                                    ?>
                    </div>
       </div>
    </nav>


        <!-- calling the cart function -->

        <?php
            cart();
        ?>
        
        <div class="viewAllProduct">
            <?php    
                            view_details();
            ?>
        </div>
        

    <!-- last child -->
    <!-- footer -->
    <footer class="footer">
        CopyRight &copy; 2023 || SE Group5
    </footer>
    
                <!-- JavaScript links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <!-- custom js -->
   <scriptn scr = 'js/addToCart.js'></script>
    <script src="index.js"></script>
</body>
</html>