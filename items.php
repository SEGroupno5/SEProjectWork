
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
<<<<<<< HEAD
                                    <h2 class="tel text-white"><a href="index.php">MealRunner</a></h2>
=======
                                    <h2 class="tel text-white"><a href = 'index.php'>MealRunner</a></h2>
>>>>>>> aade32d44649cbe1a8a4e65fbc094b4eee98d4d1
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
<<<<<<< HEAD
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
=======
                                
                                    <?php
                                        if(!isset($_SESSION['username'])){
                                            echo"<li class='tabs nav-item user-account'>
                                    <span> <a href='user_area/user_registration.php'>Register</a></span>
                                    <div class='d-flex'>";
                                        }else{
                                            echo"<p>Welcome"." ".$_SESSION['username']." "."</p>";
                                        }
                                        if(!isset($_SESSION['username'])){
                                            echo"<a href='user_area/user_login.php' class='login'><p></p>Login</a>";
                                        }else{
                                            echo"<a href='user_area/user_logout.php' class='logout'><p></p> Logout</a>";
                                        }
                                    ?>
>>>>>>> aade32d44649cbe1a8a4e65fbc094b4eee98d4d1
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
<<<<<<< HEAD
                        <?php 
                            getBreakfastCategories();
                            getLunchCategory();
                            getSuper();
=======
                        <?php
                            getAssCategories();
                            getBolerosAndShrugsCategories();
                            getHairCategories();
                            getHandBagsCategories();
                            getJewelryCategories();
                            getShoesCategories();
                            getWatchesCategories();
>>>>>>> aade32d44649cbe1a8a4e65fbc094b4eee98d4d1
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
<<<<<<< HEAD
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
=======
    
    <!-- top selling products -->
    <!-- calling the getTopSellingProducts -->
        <div class='top-selling'>
            <div class='content-container'>
                <h1>BEST LOCAL AND CONTINENTAL DISHES</h1>
                <div class='products' name = 'category'>
                    <?php
                        getTopsellingProduct();
                        // $ip = getIPAddress();  
                        // echo 'User Real IP Address - '.$ip;  

                    ?>
                </div>
            </div>
        </div>
>>>>>>> aade32d44649cbe1a8a4e65fbc094b4eee98d4d1
        

        <!-- categories -->
        <div class="categories-product">
<<<<<<< HEAD
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
=======
            <div class="content-container">
                <div class="c-product">
                    <div>
                        <a href="accessories.php"><img src="systemFiles/images/products/accessories/ipad10gen-glass-removebg-preview.png" alt=""></a>
                    </div>
                    <p>Accessories</p>
                </div>
                <div class="c-product">
                    <div>
                        <a href="boleros.php"><img src="systemFiles/images/products/boleros/P00526944-removebg-preview.png" alt=""></a>
                    </div>
                    <p>Boleros and shrugs</p>
                </div>
                <div class="c-product">
                    <div>
                        <a href="hair.php">
                            <img src="systemFiles/images/products/hair/14008301_18466013_1000-removebg-preview.png" alt="">
                        </a>
                    </div>
                    <p>Hair accessories</p>
                </div>
>>>>>>> aade32d44649cbe1a8a4e65fbc094b4eee98d4d1
            </div>
        </div>

        <!-- Accessories -->
        <div class="top-selling accessories">
            <div class="content-container">
<<<<<<< HEAD
                <h1><?php 
                            getBreakfastCategories();
                    ?></h1>
                <div class="products">
                   <?php
                       getUniqueBreakfastFood();
=======
                <h1><?php getAssCategories(); ?></h1>
                <div class="products">
                   <?php
                       getUniqueAssCategory();
>>>>>>> aade32d44649cbe1a8a4e65fbc094b4eee98d4d1
                    ?>
                </div>
            </div>
        </div>
        <!-- Boleros and Shrugs -->
        <div class="top-selling Bolero-Shrugs">
            <div class="content-container">
<<<<<<< HEAD
                <h1>
                    <?php 
                            getLunchCategory();;
                    ?>
                </h1>
                <div class="products">
                    <?php    
                        getUniqueLunchFood();
=======
                <h1><?php getBolerosAndShrugsCategories(); ?></h1>
                <div class="products">
                    <?php    
                        getUniquebolerosCategory();
>>>>>>> aade32d44649cbe1a8a4e65fbc094b4eee98d4d1
                    ?>
                </div>
            </div>
        </div>
        <!-- Hair Accessories -->
        <div class="top-selling Hair-Accessories">
            <div class="content-container">
<<<<<<< HEAD
                <h1>
                    <?php 
                            getSuper();
                    ?>
                </h1>
                <div class="products">
                    <?php    
                        getUniqueSuperFood();
=======
                <h1><?php  getHairCategories(); ?></h1>
                <div class="products">
                    <?php    
                        getUniqueHairCategory();
                    ?>
                </div>
            </div>
        </div>
        <!-- Hand Bags -->
        <div class="top-selling Hand-Bags">
            <div class="content-container">
                <h1><?php  getHandBagsCategories(); ?></h1>
                <div class="products">
                    <?php    
                        getUniqueHandbagsCategory();
                    ?>
                </div>
            </div>
        </div>
        <!-- Jewelry -->
        <div class="top-selling Jewelry">
            <div class="content-container">
                <h1><?php getJewelryCategories(); ?></h1>
                <div class="products">
                    <?php    
                        getUniqueJewlryCategory();
                    ?>
                </div>
            </div>
        </div>
        <!-- Shoes -->
        <div class="top-selling Shoes">
            <div class="content-container">
                <h1><?php getShoesCategories(); ?></h1>
                <div class="products">
                   <?php    
                        getUniqueShoesCategory();
                    ?>
                </div>
            </div>
        </div>
        <!-- Watches -->
        <div class="top-selling Watches">
            <div class="content-container">
                <h1><?php getWatchesCategories(); ?></h1>
                <div class="products">
                    <?php    
                        getUniqueWatchesCategory();
>>>>>>> aade32d44649cbe1a8a4e65fbc094b4eee98d4d1
                    ?>
                </div>
            </div>
        </div>
<<<<<<< HEAD
        
    </div>
=======
>>>>>>> aade32d44649cbe1a8a4e65fbc094b4eee98d4d1

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