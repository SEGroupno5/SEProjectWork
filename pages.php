<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="fontawesome/css/all.css?v=<?= time();?>">
    <!-- custome css -->
    <link rel="stylesheet" href="system/admin_area/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/pages.css?v=<?=time();?>">
</head>
<body>
    <div class="wrapper">
        <div class="left_sidebar">
            <ul class="btns">
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
                    <a href="index.php" class="active">Pages</a>
                </li>
                <li>
                    <a href="index.php">Contact</a>
                </li>
            </ul>
        </div>
        <div class="right-sidebar">
            <div class="pageHeader">
                <h1>WHAT DO YOU WANT?</h1>
                <P> Craving your favorite meal but don't want to leave the comfort of your home? Look no further than <span style = "color: #cd3333;">MealRunner!</span> With our easy-to-use platform, you can browse menus from the best local restaurants and have your meal delivered straight to your doorstep. Whether you're in the mood for Chinese, Italian, or anything in between, we've got you covered. Plus, with our fast and reliable delivery service, you'll never have to wait long for your food to arrive. Try <span style = "color: #cd3333;">MealRunner!</span>today and make your next meal a hassle-free experience!" </P>
            </div>
            <div class="menu_container">
                <h2 style="color: #cd3333;">Do You want a......</h2>
                <div class="card">
                    <img src="system/images/others/breakfast.jpg" alt="breakFast banner">
                    <h3>BreakFast</h3>
                </div>
                <div class="card">
                    <img src="system/images/others/lunch.webp" alt="Lunch banner">
                    <h3>Lunch</h3>
                </div>
                <div class="card">
                    <img src="system/images/others/breakfast.jpg" alt="breakFast banner">
                    <h3>Super</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>