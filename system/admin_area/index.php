<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="/fontawesome/css/all.css?v=<?= time();?>">
    <!-- custome css -->
    <link rel="stylesheet" href="index.css?v=<?= time();?>">
</head>
<body>

            <div class="header">
                <h1>MANAGE CONTENT HERE</h1>
            </div>

    <div class="wrapper">
        <div class="left_sidebar">
            <div class="profile">
                <div class = "profile_image">
                    <img src="../images/others/15880151533206.jpg" alt="">
                </div>
                <div class="admin_name">
                    Kofi
                </div>
            </div>

            <div class="control_panel">
                <h2>Admin Control Panel</h2>
                <div class="btns">
                    <button class="admin_btn"><a href="index.php?insert_product" class="nav-link">Insert Products</a></button>
                    <button class="admin_btn"><a href="#" class="nav-link">View Products</a></button>
                    <button class="admin_btn"><a href="index.php?insert_category" class="nav-link">Insert Categories</a></button>
                    <button class="admin_btn"><a href="" class="nav-link">View Categories</a></button>
                    <button class="admin_btn"><a href="" class="nav-link">All Orders</a></button>
                    <button class="admin_btn"><a href="" class="nav-link">All Payments</a></button>
                    <button class="admin_btn"><a href="" class="nav-link">List Users</a></button>
                    <button class="admin_btn"><a href="" class="nav-link">Logout</a></button>
                </div>
            </div>
        </div>
        <div class="right_sidebar">
            <div class="content_container">
                <p>
                <?php
                if(isset($_GET['insert_product'])){
                    include('insert_products.php');
                }
                if(isset($_GET['insert_category'])){
                    include('insert-categories.php');
                }
                if(isset($_GET['insert_brand'])){
                    include('insert_brand.php');
                }
            ?></p>
            </div>
        </div>
    </div>
    
</body>
</html>