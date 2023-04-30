<?php
// // including connect to the database file
// include_once("../includes/connect.php");
$con=new mysqli('localhost', 'root', '', 'myfoodstore');
if(!$con){
    die(mysqli_error($con));
}

// getting products from the database
function getProducts(){
    global $con;

    if(!isset($_GET['category'])){
    $select_query="select * from `products` order by rand()";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        // $row=mysqli_fetch_assoc($result_query);
                        // echo $row['product_title'];
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='col-md-4 mb-2'>
                                        <div class='card'>
                                            <img src='System/product_images/$product_image1' alt='$product_title' class='card-img-top'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>$product_title</h5>
                                                <p class='card-text'>$product_description</p>
                                                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>
                                    </div>";
                        }
                    }
 }
function getTopsellingProduct(){
    global $con;
    $select_query="select * from `products` order by rand() limit 0,5";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        // $row=mysqli_fetch_assoc($result_query);
                        // echo $row['product_title'];
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                                echo "<li>
                                        <img src='system/product_images/$product_image1' alt='$product_title'>
                                        <div class='food_btns'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                        </div>
                                    </li>";
                        }
 }

//  getting the categories products
function get_unique_category(){
    global $con;

    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
    $select_query="select * from `products` where category_id=$category_id order by rand()";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        $num_of_rows=mysqli_num_rows($result_query);
                        if($num_of_rows==0){
                            echo "<h2 class='text-center text-danger'>Sorry, this type of food is not available now</h2>";
                        }
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                            <img src='systemFiles/product_images/$product_image1' alt='$product_title'>
                                            <p>$product_title</p>
                                            <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 }
function getUniqueAssCategory(){
    global $con;
    $select_query="select * from `products` where category_id=11 order by rand() limit 0,6";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        $num_of_rows=mysqli_num_rows($result_query);
                        if($num_of_rows==0){
                            echo "<h2 class='text-center text-danger'>Sorry, this type of food is not available now</h2>";
                        }
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                            <img src='systemFiles/product_images/$product_image1' alt='$product_title'>
                                            <p>$product_title</p>
                                            <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 
      
function getUniquebolerosCategory(){
    global $con;
    $select_query="select * from `products` where category_id=12 order by rand() limit 0,6";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        $num_of_rows=mysqli_num_rows($result_query);
                        if($num_of_rows==0){
                            echo "<h2 class='text-center text-danger'>Sorry, this type of food is not available now</h2>";
                        }
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                            <img src='systemFiles/product_images/$product_image1' alt='$product_title'>
                                            <p>$product_title</p>
                                            <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 
function getUniqueHairCategory(){
    global $con;
    $select_query="select * from `products` where category_id=13 order by rand() limit 0,6";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        $num_of_rows=mysqli_num_rows($result_query);
                        if($num_of_rows==0){
                            echo "<h2 class='text-center text-danger'>Sorry, this type of food is not available now</h2>";
                        }
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                            <img src='systemFiles/product_images/$product_image1' alt='$product_title'>
                                            <p>$product_title</p>
                                            <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 
 
function getUniqueHandbagsCategory(){
    global $con;
    $select_query="select * from `products` where category_id=14 order by rand() limit 0,6";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        $num_of_rows=mysqli_num_rows($result_query);
                        if($num_of_rows==0){
                            echo "<h2 class='text-center text-danger'>Sorry, this type of food is not available now</h2>";
                        }
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                            <img src='systemFiles/product_images/$product_image1' alt='$product_title'>
                                            <p>$product_title</p>
                                            <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 
      
 
function getUniqueJewlryCategory(){
    global $con;
    $select_query="select * from `products` where category_id=15 order by rand() limit 0,6";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        $num_of_rows=mysqli_num_rows($result_query);
                        if($num_of_rows==0){
                            echo "<h2 class='text-center text-danger'>Sorry, this type of food is not available now</h2>";
                        }
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                            <img src='systemFiles/product_images/$product_image1' alt='$product_title'>
                                            <p>$product_title</p>
                                            <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 
 
function getUniqueShoesCategory(){
    global $con;
    $select_query="select * from `products` where category_id=16 order by rand() limit 0,6";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        $num_of_rows=mysqli_num_rows($result_query);
                        if($num_of_rows==0){
                            echo "<h2 class='text-center text-danger'>Sorry, this type of food is not available now</h2>";
                        }
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                            <img src='systemFiles/product_images/$product_image1' alt='$product_title'>
                                            <p>$product_title</p>
                                            <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 
      
 
function getUniqueWatchesCategory(){
    global $con;
    $select_query="select * from `products` where category_id=17 order by rand() limit 0,6";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$select_query);
                        $num_of_rows=mysqli_num_rows($result_query);
                        if($num_of_rows==0){
                            echo "<h2 class='text-center text-danger'>Sorry, this type of food is not available now</h2>";
                        }
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                            <img src='systemFiles/product_images/$product_image1' alt='$product_title'>
                                            <p>$product_title</p>
                                            <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 

// A function to display categories
function getAssCategories(){
    global $con;
    $select_category="select * from `categories` where category_id = 11";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li class='nav-item'>
                                <a href='accessories.php?category=$category_id' class = 'category'>$category_title</a>
                                </li>";
                    
                        }
}
// A function to display Boleros and shrugs categories
function getBolerosAndShrugsCategories(){
    global $con;
    $select_category="select * from `categories` where category_id = 12";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li class='nav-item'>
                                <a href='boleros.php?category=$category_id' class = 'category'>$category_title</a>
                                </li>";
                    
                        }
}
// A function to display Hair  categories
function getHairCategories(){
    global $con;
    $select_category="select * from `categories` where category_id = 13";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li class='nav-item'>
                                <a href='hair.php?category=$category_id' class = 'category'>$category_title</a>
                                </li>";
                    
                        }
}
// A function to display Hand Bags categories
function getHandBagsCategories(){
    global $con;
    $select_category="select * from `categories` where category_id = 14";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li class='nav-item'>
                                <a href='handbag.php?category=$category_id' class = 'category'>$category_title</a>
                                </li>";
                    
                        }
}
// A function to display Jewelry categories
function getJewelryCategories(){
    global $con;
    $select_category="select * from `categories` where category_id = 15";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li class='nav-item'>
                                <a href='jewelry.php?category=$category_id' class = 'category'>$category_title</a>
                                </li>";
                    
                        }
}
// A function to display Shoes categories
function getShoesCategories(){
    global $con;
    $select_category="select * from `categories` where category_id = 16";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li class='nav-item'>
                                <a href='shoes.php?category=$category_id' class = 'category'>$category_title</a>
                                </li>";
                    
                        }
}
// A function to display watches categories
function getWatchesCategories(){
    global $con;
    $select_category="select * from `categories` where category_id = 17";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li class='nav-item'>
                                <a href='watches.php?category=$category_id' class = 'category'>$category_title</a>
                                </li>";
                    
                        }
}

// Searching products

function search_products(){
    global $con;

    if(isset($_GET['search_btn'])){
        $search_value=$_GET['search_value'];
    $search_query="select * from `products` where product_keywords like'%$search_value%'";
                        //  limit 0,9
                        $result_query=mysqli_query($con,$search_query);
                        $num_of_rows=mysqli_num_rows($result_query);
                        if($num_of_rows==0){
                            echo "<h2 class='text-center text-danger'>SORRY, no result match. No food found in this category. </h2>";
                        }
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                    <img src='system/product_images/$product_image1' alt = '$product_title'>
                                    <p>$product_title</p>
                                    <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                    <div class = 'flex-btn'>
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                    </div>
                                </div>";
                        }


                    }
}
// view product details
function view_details(){
    global $con;

    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
            $product_id=$_GET['product_id'];
    $select_query="select * from `products` where product_id=$product_id";
                        $result_query=mysqli_query($con,$select_query);
                        // $row=mysqli_fetch_assoc($result_query);
                        // echo $row['product_title'];
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_title=$row['product_title'];
                            $product_description=$row['product_description'];
                            $category_id=$row['category_id'];
                            $product_image1=$row['product_image1'];
                            $product_price=$row['product_price'];
                            echo "<div class='product'>
                                    <img src='system/product_images/$product_image1' alt = '$product_title'>
                                    <div class='text'>
                                    <p>$product_title</p>
                                    <p>$product_description</p>
                                    <p>&cent; <span style = 'color:red;'> $product_price</span></p>
                                    </div>
                                    <div class = 'flex-btn'>
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                    <a href='index.php?product_id=$product_id' class='btn btn-secondary'>Back Home</a>
                                    </div>
                                </div>";
                        }
                    }}
} 


// display ip address function

 function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  

// cart function

function cart(){
    global $con;
    if(isset($_GET['add_to_cart'])){
        $ip = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];
        $select_query = "select * from `cart_details` where ip_address = '$ip' and product_id  = $get_product_id";
        $result_query=mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if($num_of_rows>0){
            echo"<script>alert('Item already selected')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }else{
            $insert_query= "insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$ip',0)";
            $result_query=mysqli_query($con, $insert_query);
            echo"<script>alert('Item is added to cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
}

// cart number function
function cart_num(){
    global $con; 
    if(isset($_GET['add_to_cart'])){
        $ip = getIPAddress();
        $select_query = "select * from `cart_details` where ip_address = '$ip'";
        $result_query=mysqli_query($con, $select_query);
        $cart_num_item = mysqli_num_rows($result_query);
        }else{
        global $con;
        $ip = getIPAddress();
        $select_query = "select * from `cart_details` where ip_address = '$ip'";
        $result_query=mysqli_query($con, $select_query);
        $cart_num_item = mysqli_num_rows($result_query);
        }
        echo $cart_num_item;
}

// total price function
function getTotalCartPrice(){
    global $con;
    $total_price = 0;
    $ip = getIPAddress();
    $cart_query="select * from `cart_details` where ip_address = $ip";
    $result_cart=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result_cart)){
        $product_id=$row['product_id'];
        $product_query="select * from `products` where product_id = $product_id";
        $result_product=mysqli_query($con,$product_query);
        while($row_product_price=mysqli_fetch_array($result_product)){
            $product_price=array($row_product_price['product_price']);
            $product_price_values=array_sum($product_price);
            $total_price +=$product_price_values;
        }
    }
    echo $total_price;
}
?>