
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
    <title>Food delivery / Lunch</title>
     <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="products.css?= time();?>">
</head>
<body>
    <!-- brand details -->
    <div class="mid-header">
        <div>
            <p><a href="index.php">Oder From MealRunner</a></p>
            <i class="fa-solid fa-basket-shopping"></i>
            <p><a href="index.php">Oder Food Online</a></p>
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
                            getAssCategories();
                            getBolerosAndShrugsCategories();
                            getHairCategories();
                            getHandBagsCategories();
                            getJewelryCategories();
                            getShoesCategories();
                            getWatchesCategories();
                        ?>
                    </ul>
                </div>
                <div class="showcase-images-container">                        
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <img src="system/images/others/lunch.webp">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/food/vegetable_jollof.jpg">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/food/classic-chicken-burger-102154-1-removebg-preview.png">
                        </div>
                        <div class="mySlides fade">
                            <img src="system/images/food/stick_meat-removebg-preview.png">
                        </div>


                    </div>
                </div>
                <div class="left-banner-container">
                    <div class="top-banner">
                        <img src="system/images/others/lunch.webp">
                    </div>
                    <div class="bottom-banner">
                        <img src="system/images/flyers/burger_flyer.jpg">
                    </div>
                </div>
            </div>
        </div>
    
        <!-- category name -->
        <div class="category-name">
            GET YOUR LUNCH HERE.
        </div>
    <!-- top selling products -->
        <div class="top-selling">
            <div class="content-container">
                <h1>POPULAR DISHES</h1>
                <div class="products">
                    <?php
                        getTopsellingProduct();
                    ?>
                </div>
            </div>
        </div>

        <!-- Watches -->
        <div class="top-selling Watches">
            <div class="content-container">
                <h1>Watches</h1>
                <div class="products">
                    <?php
                        get_unique_category();
                    ?>
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
   
    <script src="js/product.js"></script>
</body>
</html>