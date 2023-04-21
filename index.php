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
                    <p>0</p>
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

    <!-- third child showcase section -->
    <div class="showcase">
        <div class="text">
                <h4>Best In Town</h4>
                <h1>ENJOY OUR CHICKEN<br><span style="color:#CD3333;"> BURGER</span> FAST FOOD</h1>
            <div class="btn">
                <p class='order'>Oder Now</p>
                <p class="price">Price: GH&cent; 55.50</p>
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
        </div>
        <!-- images -->
        <div class="food_items">
            <div class="mySlides fade">
                <img src="system/images/food/burger-king-ch-king-deluxe-chicken-sandwich-removebg-preview.png">
            </div>

            <div class="mySlides fade">
                <img src="system/images/food/classic-chicken-burger-102154-1-removebg-preview.png">
            </div>

            <div class="mySlides fade">
                <img src="system/images/food/Simply-Recipes-Buffalo-Chicken-Burgers-LEAD-03-f0c5a2a680614abc871b37523d767941-removebg-preview.png">
            </div>

               <br>

                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
    </div>

    <!-- searching for product -->
    <div class="search">
        <div class="search_container">
            <input type="search" name="search">
            <input type="submit" value="Search">
        </div>
    </div>

    <!-- forth child -->
    <!-- Popular food staffs -->
    <div class="popular_dish_container">
        <h3>Food Items</h3>
        <div class="popular_dish">
            <h1>Popular Dishes</h1>
            <ul class="images">
                <li>
                    <img src="system/images/food/bg/orange_juice.jpg" alt="">
                </li>
                <li>
                    <img src="system/images/food/bg/stick_meat.jpeg" alt="">
                </li>
                <li>
                    <img src="system/images/food/bg/vegetable_jollof.jpg" alt="">
                </li>
                <li>
                    <img src="system/images/food/bg/yam_kontomire-stew.webp" alt="">
                </li>
                <li>
                    <img src="system/images/food/bg/dessert.jpg" alt="">
                </li>
            </ul>
        </div>
    </div>

    <!-- rich and healthy  -->
    <h1 class="message_header">RICH & HEALTHY</h1>
    <!-- information -->
    <div class="info_container">
                <div class="image">
                    <img src="system/images/others/chef.jpg" alt="">
                </div>
                <div class="info">
                    <h1>Highest quality antisangrains, proteins and seasonal ingredients</h1>
                    <p>Righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desires, that they cannot foresee.</p>
                    <div class="d-flex">
                        <div class="list">
                            <div>
                                <i class = "fa-solid fa-star"></i>
                                <p>Simple and easy to distinguish</p>
                            </div>
                            <div>
                                <i class = "fa-solid fa-star"></i>
                                <p>Pleasure of the momentBlinded desire</p>
                            </div>
                            <div>
                                <i class = "fa-solid fa-star"></i>
                                <p>Able to do what we like best</p>
                            </div>
                            <h3>Read More</h3>
                        </div>
                        <div class="d-flex-image">
                            <img src="system/images/others/chef_wide.jpg" alt="">
                        </div>
                    </div>
                </div>
    </div>

    <!-- ratings -->
    <div class="wrapper">
        <h2 class = "rate_header">Why we are the best</h2>
        <div class = "wrapper_content">
            <div class="info_cart">
                <div class="image">
                    <img src="system/images/others/chef_anime.jpg" alt="">
                    <h4>1</h4>
                </div>
                <h3>Passionate chefs</h3>
                <p>Beguiled and demoralized by the charms of pleasure of the moment so blinded by desires</p>
                <h2>Read More</h2>
            </div>
            <div class="info_cart">
                <div class="image">
                    <img src="system/images/others/food_anime.jpg" alt="">
                    <h4>2</h4>
                </div>
                <h3>100 % Fresh Foods</h3>
                <p>Beguiled and demoralized by the charms of pleasure of the moment so blinded by desires</p>
                <h2>Read More</h2>
            </div>
            <div class="info_cart">
                <div class="image">
                    <img src="system/images/others/memorable_ambience.jpg" alt="">
                    <h4>3</h4>
                </div>
                <h3>Memorable Ambience</h3>
                <p>Beguiled and demoralized by the charms of pleasure of the moment so blinded by desires</p>
                <h2>Read More</h2>
            </div>
        </div>
    </div>


<!-- menu -->
    <div class="page-header">
        <h3>Special</h3>
        <h1>Checkout our menu</h1>
        <p>Demoralized by the charms of the moment so blinded except some advantage</p>
    </div>
    <div class="tabs">
        <ul class="menuTabs">
            <li>Breakfast</li>
            <li>Lunch</li>
            <li>Dinner</li>
            <li>starters</li>
            <li>Beverages</li>
        </ul>
    </div>
    <!-- Menus -->
    <div class="main_menu_wrapper">
        <div class="banner">
            <img src="system/images/flyers/breakfast-advertisement-template_135603-2.avif" alt="">
        </div>
        <div class="menu_list">
            <ul>
                <li>
                    <h3 class="title">Gazpacho Garlic</h3>
                    <p>Chilled tomato, cucumber, garlic, red pepper soup</p>
                    <h3>---------------------------------------------------- GH&cent;55</h3>
                </li>
                <li>
                    <h3 class="title">Pan Con Berenjina Frita</h3>
                    <p>Marinated seabass with sour sauce, dill & coriander on bread</p>
                    <h3>---------------------------------------------------- GH&cent;40</h3>
                </li>
                <li>
                    <h3 class="title">New Lubina Marinada</h3>
                    <p>Fried Aubergine with almond on bread(2 pieces)</p>
                    <h3>---------------------------------------------------- GH&cent;45</h3>
                </li>
                <li>
                    <h3 class="title">Gazpacho</h3>
                    <p>Atlantic cold fillet, chips, salad, tartare and lemon</p>
                    <h3>---------------------------------------------------- GH&cent;35</h3>
                </li>
                <li>
                    <h3 class="title">Coconut Chia Bowl</h3>
                    <p>Marinated seabass with sour saucel & coriander on bread</p>
                    <h3>---------------------------------------------------- GH&cent;95</h3>
                </li>
                <li>
                    <h3 class="title">Gazpacho Garlic</h3>
                    <p>Chilled tomato, cucumber, garlic, red pepper soup</p>
                    <h3>---------------------------------------------------- GH&cent;120</h3>
                </li>
                <li>
                    <h3 class="title">Gazpacho Garlic</h3>
                    <p>Chilled tomato, cucumber, garlic, red pepper soup</p>
                    <h3>---------------------------------------------------- GH&cent;29</h3>
                </li>
            </ul>
        </div>
    </div>

    <!-- specail menu for all items -->
    <h1 class="special_item_header">
        special menu for all items
    </h1>
    <div class="special_menu">
        <ul>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/burger-king-ch-king-deluxe-chicken-sandwich-removebg-preview.png" alt="">
                    </div>
                    <p>Burger</p>
                </div>
            </li>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/fried_chicken.jpeg" alt="">
                    </div>
                    <p>Fried chicken</p>
                </div>
            </li>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/fried-chicken-doner-kebab-mixed-grill-fish-ball-soup-food-recipe-chicken-removebg-preview.png" alt="">
                    </div>
                    <p>Doner with Grilled Chiken</p>
                </div>
            </li>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/pizza.jpg" alt="">
                    </div>
                    <p>Pizza</p>
                </div>
            </li>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/blt_hot_dogs.webp" alt="">
                    </div>
                    <p>Hot Dogs</p>
                </div>
            </li>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/chicken-kabobs_skewers.jpg" alt="">
                    </div>
                    <p>Chicken Skewers</p>
                </div>
            </li>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/greek_salad.webp" alt="">
                    </div>
                    <p>Greek Salad</p>
                </div>
            </li>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/dahi-batata-puri-1280x720.jpg" alt="">
                    </div>
                    <p>Dahi Puri</p>
                </div>
            </li>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/triple-chocolate-brownies_ice_cream_chocolate.jpg" alt="">
                    </div>
                     <p>Ice Cream With Chocolate</p>
                </div>
            </li>
            <li class="spec_active">
                <div>
                    <div>
                        <img src="system/images/food/bg/cocktail.jpg" alt="">
                    </div>
                    <p>cocktail</p>
                </div>
            </li>
        </ul>
    </div>



    <!-- testimonials -->
    <div class="review_wrapper">
        <h3>Testimonials</h3>
        <h2>Review <span style='color:#CD3333;'>from our guest</span></h2>
        <ul>
            <li class="info_cart">
                <div class="image">
                    <img src="system/images/others/Christian_ansah.jpeg" alt="">
                </div>
                <h3>Christian Ansah</h3>
                <p>Also very good and was the service. I had the musgroom risotto with scallops which was awesome. My husband had a burger over greens</p>
                <h2><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i></h2>
            </li>
            <li class="info_cart">
                <div class="image">
                    <img src="system/images/others/precious_parker.jpg" alt="">
                </div>
                <h3>Precious Parker</h3>
                <p>Also very good and was the service. I had the musgroom risotto with scallops which was awesome. My husband had a burger over greens</p>
                <h2><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i></h2>
            </li>
            <li class="info_cart">
                <div class="image">
                    <img src="system/images/others/nana_kwasi_junior.jpg" alt="">
                </div>
                <h3>Nana Kwasi Junior</h3>
                <p>Also very good and was the service. I had the musgroom risotto with scallops which was awesome. My husband had a burger over greens</p>
                <h2><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i></h2>
            </li>
            <li class="info_cart">
                <div class="image">
                    <img src="system/images/others/Christian_ansah.jpeg" alt="">
                </div>
                <h3>Icon Gh</h3>
                <p>Also very good and was the service. I had the musgroom risotto with scallops which was awesome. My husband had a burger over greens</p>
                <h2><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-certificate"></i></h2>
            </li>
        </ul>
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
        CopyRight &copy; 2023 || SE Group5
    </footer>

    <!-- JavaScript links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- fontawesome javaScript link -->
    <script src = 'fontawesome/js/all.js'></script>
    <!-- custome js -->
    <script src = 'index.js'></script>
</body>
</html>