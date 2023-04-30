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

//  function to display food staffs that belong to only breakfast category.
function getUniqueBreakfastFood(){
    global $con;
    $select_query="select * from `products` where category_id=1 order by rand() limit 0,6";
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
                                            <div class='pro_image'>
                                                <img src='system/product_images/$product_image1' alt='$product_title'>
                                            </div>
                                            <p class='product_title'>$product_title</p>
                                            <p class='price'>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 

//  Function to displacy Lunch food staffs
function getUniqueLunchFood(){
    global $con;
    $select_query="select * from `products` where category_id=2 order by rand() limit 0,6";
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
                                            <div class='pro_image'>
                                                <img src='system/product_images/$product_image1' alt='$product_title'>
                                            </div>
                                            <p class='product_title'>$product_title</p>
                                            <p class='price'>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 
// Function to display Super Food staffs
function getUniqueSuperFood(){
    global $con;
    $select_query="select * from `products` where category_id=3 order by rand() limit 0,6";
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
                                            <div class='pro_image'>
                                                <img src='system/product_images/$product_image1' alt='$product_title'>
                                            </div>
                                            <p class='product_title'>$product_title</p>
                                            <p class='price'>&cent; <span style = 'color:red;'> $product_price</span></p>
                                            <div class = 'flex-btn'>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                            </div>
                                        </div>";
                        }
                    }
 

// A function to display breakfast categories
function getBreakfastCategories(){
    global $con;
    $select_category="select * from `categories` where category_id = 1 ";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li><a href='breakfast.php'>BreakFast</a></li>
                                    ";
                    
                        }
}
// A function to display Lunch categories
function getLunchCategory(){
    global $con;
    $select_category="select * from `categories` where category_id = 2 ";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li><a href='lunch.php'>Lunch</a></li>";
                    
                        }
}
// A function to display Super category
function getSuper(){
    global $con;
    $select_category="select * from `categories` where category_id = 3";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];
                            echo "<li><a href='super.php'>Super</a></li>";
                    
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
                                        <div class='title_description'>
                                            <p class='title'>$product_title</p>
                                        <p class='description'>$product_description</p>
                                        </div>
                                        <p class='price'>&cent; <span style = 'color:red; font-size: 25px;'> $product_price</span></p>
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

// get user order details

function get_order_details(){
    global $con;
    $username=$_SESSION['username'];
    $get_details="SELECT * FROM `user_table` where username='$username'";
    $query_details=mysqli_query($con,$get_details);
    while($details_row=mysqli_fetch_array($query_details)){
        $user_id=$details_row['user_id'];
        if(!isset($_GET['edit_account'])){
            IF(!isset($_GET['my_orders'])){
                IF(!isset($_GET['delete_account'])){
                    $get_ordes="SELECT * FROM `user_orders` where user_id=$user_id and order_status='pending'";
                    $run_orders=mysqli_query($con,$get_ordes);
                    $rows_count=mysqli_num_rows($run_orders);
                    if($rows_count>0){
                        echo "<div style ='text-align:center;'><h1>You have <span style = 'color:red; '>$rows_count</span> pending orders</h1><a href='profile.php?my_orders' style='margin-bottom:10px;'>My Orders</a></div>";
                    }else{
                        echo "<div style ='text-align:center;'><h1>You have zero pending orders</h1><a href='../index.php' style='margin-bottom:10px;'>Explore More</a></div>";
                    }
                }
            }
        }
    }
}
?>
