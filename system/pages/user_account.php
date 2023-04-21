<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard / Home</title>
     <!-- fontawesome css link -->
    <link rel="stylesheet" href="../fontawesome/css/all.css?= time();?>">
    <!-- custom css links -->
    <link rel="stylesheet" href="user_account.css?= time();?>">
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
            </div>
        </div>
    </nav>
    <!-- second child -->
    <nav class='menu_navbar'>
       <div class="container">
            <!-- Logo -->
            <ul class="logo">
                <li>
                    <img src="../images/logo/restaurant-icon-orange-sticker-vector-1789907-removebg-preview.png" alt="">
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
                    <a href="../pages/item.php">Items</a>
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
                    <p>0</p>
                </div>
            </div>
            <div class="delivery">
                <div>
                    <p>Free delivery</p>
                </div>
                <div>
                    <img src="../images/others/WAHM-UberEats-removebg-preview.png" alt="">
                </div>
            </div>
       </div>
    </nav>

    <!-- third child showcase section -->
    <div class="showcase">
       <h1>My Account</h1>
    </div>

    <div class="user_form">
        <div class="user_form_container">
            <div class="login">
            <h1>Login</h1>
            <form action="" method="post">
                <label for="entri_name">Username or email address*</label>
                <input type="text" name="entri_name">
                <label for="password">Password*</label>
                <input type="password" name="password">
                <input type="submit" value="Login" name="user_login" >
                <div class="remember_me">
                    <input type="radio" name="remember_password"><label for="remember_password">Remember me</label>
                </div>
                <a href="">Lost your password</a>
            </form>
        </div>
        <div class="signup">
            <h1>Sign Up</h1>
            <form action="" method="post" >
                <label for="email">Email address</label>
                <input type="email" name="email">
                <p>A link to set a new password will be sent to your email address</p>
                <input type="submit" value="Register">
            </form>
        </div>
        </div>
    </div>

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
        CopyRight &copy; 2023 || SE Group5
    </footer>

    <!-- JavaScript links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- fontawesome javaScript link -->
    <script src = '../fontawesome/js/all.js'></script>
    <!-- custome js -->
    <script src = '/index.js'></script>
</body>
</html>