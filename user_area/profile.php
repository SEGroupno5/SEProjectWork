<?php
include('../system/includes/connect.php');
include('../system/functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User profile</title>
     <!-- fontawesome css link -->
    <link rel="stylesheet" href="../fontawesome/css/all.css?v=<?= time();?>">
    <!-- custom css links -->
    <link rel="stylesheet" href="../index.css?v=<?= time();?>">
    <style>
        .main_wrapper{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .user_account_header{
            text-align: center;
            font-size: 40px;
            margin: 20px;
        }
        .profile_wrapper{
            width: 20%;
            height: 500px;
        }
        .content_container{
            width: 80%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .profile_wrapper h1{
            color: #fff;
            text-align: center;
            background-color: #cd3333;
        }
        .profile_wrapper .container{
            display: flex;
            gap: 20px;
            flex-direction: column;
            font-family: adobe kaiti std;
            align-items: center;
            justify-content: center;
            background-color: #000;
            width: 100%;
            height: 100%;
        }
        .container img{
            width: 150px;
            height: 150px;
        }
        .profile_wrapper .container a{
            color: #fff;
            font-weight: 400;
        }
        .logo img{
            width: 100px;
            height: 100px;
        }
    </style>

</head>
<body>

    <!-- first child -->
    <nav class="top">
        <div class="container-fluid">
            <div class="container">
                <div class="contact_line">
                    <p><i class = "fas fa-clock"></i> 7:30AM-9:30PM</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i></i> +233 558 465 569</p>
                </div>
                <!-- searching for product  -->
                <div class="search">
                                    <form class="d-flex search_form" role="search" action="../search_products.php" method="get">
                                    <input class="form-control me-2" type="search" placeholder="Search all products here" aria-label="Search" name = "search_value">
                                    <input type="submit" value="Search" class="btn btn-outline-success text-white m-10" name = "search_btn">
                                    </form>
                </div>
                <div class='d-flex'>  
                    
                
                
                                    <?php
                                        if(!isset($_SESSION['username'])){
                                            echo"<div class='register'>
                                            <a href='$'>My Account</a>
                                            </div>";
                                        }else{
                                            echo"<p class = 'user_name'>Welcome"." ".$_SESSION['username']." "."</p>";
                                        }
                                        if(!isset($_SESSION['username'])){
                                            echo"<div class='login'>
                                            <a href='user_login.php'><p></p>Login</a>
                                            </div>";
                                        }else{
                                            echo"<div class = 'logout'><a href='user_logout.php' class='logout'><p></p> Logout</a></div>";
                                        }
                                    ?>
                    </div>
            </div>
        </div>
    </nav>
    <!-- calling the cart function -->

        <?php
            cart();
        ?>
    <!-- second child -->
    <!-- Company logo and navigational buttons -->
    <nav class='menu_navbar'>
       <div class="container">
            <!-- Logo -->
            <ul class="logo">
                <li>
                    <img src="../system/images/logo/restaurant-icon-orange-sticker-vector-1789907-removebg-preview.png" alt="">
                    <h2><span style = "color:#CD3333">Meal</span>Runner</h2>
                </li>
            </ul>
            
            <!-- cart section -->
            <div class="shopping_cart">
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
            </div>
            <!-- login -->
       </div>
    </nav>

    <!-- user account area -->

    <h1 class="user_account_header"><span style="color:#cd3333;">Meal</span>Runner User Account</h1>

    <!-- user account control section -->
    <div class="main_wrapper">
        <div class="profile_wrapper">
            <h1>Your Profile</h1>
            <div class="container">
                <?php
                    $username=$_SESSION['username'];
                $select_image="SELECT * FROM `user_table` where username='$username'";
                $query_select=mysqli_query($con,$select_image);
                $row_image=mysqli_fetch_array($query_select);
                $image=$row_image['user_image'];
                echo "<li>
                    <img src='../system/user_image/$image' alt=''>
                </li>";
            ?>
            <ul>
                <li>
                    <a href="profile.php">Pending Orders</a>
                </li>
                <li>
                    <a href="profile.php?edit_account">Edit Account</a>
                </li>
                <li>
                    <a href="profile.php?my_orders">My Oders</a>
                </li>
                <li>
                    <a href="profile.php?delete_account">Delete Account</a>
                </li>
                <li>
                    <a href="user_logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content_container">
         <div class="wrap_content">
           <?php
                get_order_details();
                if(isset($_GET['edit_account'])){
                    include('edit_account.php');
                }
           ?>
         </div>
    </div>
    </div>
       
    
    <!-- last child -->

    <h2 class="branch_location" >Our Branch</h2>
    <!-- location  -->
    <div class="location">
        <div class="branch">
            <h1 class="name">Becky Kay</h1>
            <h4 class="address">Becky Kay Restaurant and Bar, Jukwa road,
            Cape Coast</h4>
            <ul>
                <li><i class = "fas fa-clock"></i> 7:30AM-9:30PM</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i></i> +233 558 465 569</li>
            </ul>
            <div>
                <a href="https://goo.gl/maps/e9jTg4Uwr3YFp4oE8" target="_blank">Click to view on map</a>
            </div>
        </div>
        <div class="branch">
            <h1 class="name">Sweet Tender</h1>
            <h4 class="address">4th Ridge Cape Coast 4th Ridge, Cape Coast</h4>
            <ul>
                <li><i class = "fas fa-clock"></i> 7:30AM-9:30PM</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i></i> +233 558 465 569</li>
            </ul>
            <div>
                <a href="https://goo.gl/maps/UmkvNZ4L5McwmmNX9" target="_blank">Click to view on map</a>
            </div>
        </div>
        <div class="branch">
            <h1 class="name">Pork Chopz</h1>
            <h4 class="address">Abura Newtown Road, Cape Coast</h4>
            <ul>
                <li><i class = "fas fa-clock"></i> 7:30AM-9:30PM</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i></i> +233 558 465 569</li>
            </ul>
            <div>
                <a href="https://goo.gl/maps/XmEH9jaqQmfLyWAHA" target="_blank">Click to view on map</a>
            </div>
        </div>
    </div>

    <!-- last child -->
    <!-- footer -->
    <footer class="footer">
        <div class="copyRight">
        CopyRight &copy; 2023 || SE Group5
        </div>
        <div class="social_media_icon">
                <ul>
                    <li>
                        <a href="twitter.com"><i class='fab fa-twitter'></i></a>
                    </li>
                    <li>
                        <a href="facebook.com"><i class='fab fa-facebook'></i></a>
                    </li>
                    <li>
                        <a href="instagram.com"><i class='fab fa-instagram'></i></a>
                    </li>
                    <li>
                        <a href="linkedin.com"><i class='fab fa-linkedin'></i></a>
                    </li>
                </ul>
            </div>
    </footer>

    <!-- JavaScript links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- fontawesome javaScript link -->
    <script src = '../fontawesome/js/all.js'></script>
    <!-- custome js -->
    <script src = '../index.js'></script>
    <script src="../js/addToCart.js"></script>
</body>
</html>