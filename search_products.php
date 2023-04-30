
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
    <style>
        /* login */
.login {
    padding: 7px 20px;
    margin-left: 10px;
    background-color: #cd3333;
    font-weight: 800;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.5s ease-in-out;
}

.login a {
    color: #fff;
}
    </style>
    
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
                                    <h2 class="tel text-white"><a href = 'index.php'>MealRunner</a></h2>
                                </div>
                                <div class="contact-logo text-white">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </div>
                            </div>
                            <ul class="navbar-nav">
                                <div class="search">
                                    <form class="d-flex search_form" role="search" action="search_products.php" method="get">
                                    <input class="form-control me-2" type="search" placeholder="Search all products here" aria-label="Search" name = "search_value">
                                    <input type="submit" value="Search" class="btn btn-outline-success text-white m-10" name = "search_btn">
                                    </form>
                </div>
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
              </div>
    
        <div class="top-selling">
            <div class="content-container">
                <h1>Searched Results</h1>
                <div class="products">
                    <?php search_products(); ?>
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
   
    <script src="index.js"></script>
</body>
</html>