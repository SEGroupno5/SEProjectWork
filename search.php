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
    <link rel="stylesheet" href="system/pages/user_account.css?= time();?>">
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
       <div>
            <h1>ITEMS</h1>
            <P>Your favorite food are being queried here: being for breakfast, lunch, or supper. Search from your own Kitchen</P>
       </div>
    </div>

    <h2 class = "message">It's the food you love, order</h2>

    
    <!-- searching for product -->
    <div class="search">
        <div class="search_container">
            <input type="search" name="search">
            <input type="submit" value="Go">
        </div>
    </div>

    <!-- searched items -->
    <div class="searched_items">
        <div class="searched_items_container">
            <div class="items">
                <div>
                    <ul>
                    <li class = "Item_cart">
                        <div class="text">
                            <h2>Chicken Supreme Pizza</h2>
                            <p>Topped with chicken, onion, capsicum, black olive & Green Chilli</p>
                            <h4>From GH&cent; 150</h4>
                        </div>
                        <div class="image">
                            <img src="system/images/food/bg/pizza.jpg" alt="">
                        </div>
                    </li>
                    <li class = "Item_cart">
                        <div class="text">
                            <h2>Hamburger Burger with beef</h2>
                            <p>Topped with chicken, onion, capsicum, black olive & Green Chilli</p>
                            <h4>From GH&cent; 150</h4>
                        </div>
                        <div class="image">
                            <img src="system/images/food/bg/pizza.jpg" alt="">
                        </div>
                    </li>
                    <li class = "Item_cart">
                        <div class="text">
                            <h2>Belgium waffles with strawberries</h2>
                            <p>Topped with chicken, onion, capsicum, black olive & Green Chilli</p>
                            <h4>From GH&cent; 150</h4>
                        </div>
                        <div class="image">
                            <img src="system/images/food/bg/pizza.jpg" alt="">
                        </div>
                    </li>
                </ul>
                </div>
            </div>
            <div class="banner">
                <img src="system/images/flyers/burger-flyer2.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- searched items flex -->
    <div class="searched_items">
        <div class="searched_items_df_container">
                    <ul>
                        <li class = "Item_cart">
                            <div class="text">
                                <h2>Chicken Supreme Pizza</h2>
                                <p>Topped with chicken, onion, capsicum, black olive & Green Chilli</p>
                                <h4>From GH&cent; 150</h4>
                            </div>
                            <div class="image">
                                <img src="system/images/food/bg/pizza.jpg" alt="">
                            </div>
                        </li>
                        <li class = "Item_cart">
                            <div class="text">
                                <h2>Hamburger Burger with beef</h2>
                                <p>Topped with chicken, onion, capsicum, black olive & Green Chilli</p>
                                <h4>From GH&cent; 150</h4>
                            </div>
                            <div class="image">
                                <img src="system/images/food/bg/pizza.jpg" alt="">
                            </div>
                        </li>
                        <li class = "Item_cart">
                            <div class="text">
                                <h2>Chicken Supreme Pizza</h2>
                                <p>Topped with chicken, onion, capsicum, black olive & Green Chilli</p>
                                <h4>From GH&cent; 150</h4>
                            </div>
                            <div class="image">
                                <img src="system/images/food/bg/pizza.jpg" alt="">
                            </div>
                        </li>
                        <li class = "Item_cart">
                            <div class="text">
                                <h2>Hamburger Burger with beef</h2>
                                <p>Topped with chicken, onion, capsicum, black olive & Green Chilli</p>
                                <h4>From GH&cent; 150</h4>
                            </div>
                            <div class="image">
                                <img src="system/images/food/bg/pizza.jpg" alt="">
                            </div>
                        </li>
                    
                </ul>
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