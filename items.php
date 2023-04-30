
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
    <title>Food delivery / Items</title>
     <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="items.css?v=<?= time();?>">
    
</head>
<body>
    <!-- brand details -->
    <div class="mid-header">
        <div>
            <p><a href = 'index.php'>Order From MealRunner</a></p>
            <i class="fa-solid fa-basket-shopping"></i>
            <p><a href = 'index.php'>Order Food Online</a></p>
        </div>
    </div>

        <!-- calling the cart function -->

        <?php
            cart();
        ?>

    <!-- top navbar -->
    <div class="container-fluid">
                    <div class="content-fluid header">
                            <div class="brand-details">
                                <div class="brand-name">
                                    <h2 class="tel text-white"><a href="index.php">MealRunner</a></h2>
                                </div>
                                <div class="contact-logo text-white">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </div>
                            </div>
                            <ul class="navbar-nav">
                                <li class="tabs nav-item">
                                    <form class="d-flex search_form" role="search" action="search_products.php" method="get">
                                    <input class="form-control me-2" type="search" placeholder="Search all products here" aria-label="Search" name = "search_value">
                                    <input type="submit" value="Search" class="btn btn-outline-success text-white m-10" name = "search_btn">
                                    </form>
                                </li>
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
                                </li>
                            </ul>
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
                </div>
        </div>
    <div class="main-wrapper">
        <!-- showcase text and banners -->
        <div class="showcase-container">
            <div class="content-fluid">
                <div class="navbar-container">
                    <ul class="categories">
                        <?php 
                            getBreakfastCategories();
                            getLunchCategory();
                            getSuper();
                        ?>
                    </ul>
                </div>
                <div class="showcase-images-container">                        
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <img src="system/images/flyers/breakfast-advertisement-template_135603-2.avif">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/food/burger-king-ch-king-deluxe-chicken-sandwich-removebg-preview.png">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/food/dessert-removebg-preview.png">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/others/breakfast.jpg">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/others/lunch.webp">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/food/bg/fufu.jpg">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/others/food1.avif">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/others/food2.avif">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/others/food3.avif">
                        </div>

                    </div>
                </div>
                <div class="left-banner-container">
                    <div class="top-banner">
                        <img src="system/images/others/ezgif.com-gif-maker.avif">
                    </div>
                    <div class="bottom-banner">
                        <img src="system/images/others/motorride.avif">
                    </div>
                </div>
            </div>
        </div>
<div class="wrapAll">
    <!-- top selling products -->
    <!-- calling the getTopSellingProducts -->
        <div class="popular_dish_container">
        <div class="popular_dish">
            <h1>Popular Dishes</h1>
            <ul class="images">
                <?php 
                    getTopsellingProduct();
                ?>
            </ul>
        </div>
    </div>
        

        <!-- categories -->
        <div class="categories-product">
            <div class="menu_container">
                <div class="txt">
                    <h1>Get What You Want Here</h1>
                    <h2 style="color: #cd3333;">Do You want a......</h2>
                </div>
                <a href="breakfast.php" class="card">
                    <img src="system/images/others/breakfast.jpg" alt="breakFast banner">
                    <h3>BreakFast</h3>
                </a>
                <a href="breakfast.php" class="card">
                    <img src="system/images/others/lunch.webp" alt="Lunch banner">
                    <h3>Lunch</h3>
                </a>
                <a href="breakfast.php" class="card">
                    <img src="system/images/others/breakfast.jpg" alt="breakFast banner">
                    <h3>Super</h3>
                </a>
            </div>
        </div>

        <!-- Accessories -->
        <div class="top-selling accessories">
            <div class="content-container">
                <h1><?php 
                            getBreakfastCategories();
                    ?></h1>
                <div class="products">
                   <?php
                       getUniqueBreakfastFood();
                    ?>
                </div>
            </div>
        </div>
        <!-- Boleros and Shrugs -->
        <div class="top-selling Bolero-Shrugs">
            <div class="content-container">
                <h1>
                    <?php 
                            getLunchCategory();;
                    ?>
                </h1>
                <div class="products">
                    <?php    
                        getUniqueLunchFood();
                    ?>
                </div>
            </div>
        </div>
        <!-- Hair Accessories -->
        <div class="top-selling Hair-Accessories">
            <div class="content-container">
                <h1>
                    <?php 
                            getSuper();
                    ?>
                </h1>
                <div class="products">
                    <?php    
                        getUniqueSuperFood();
                    ?>
                </div>
            </div>
        </div>
        
    </div>

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
    <script src="item.js"></script>
</body>
</html>