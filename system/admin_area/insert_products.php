<?php
include('../includes/connect.php');

if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_price=$_POST['product_price'];
    $products_status=true;

    $product_image1=$_FILES['product_image1']['name'];

    $temp_image1=$_FILES['product_image1']['tmp_name'];

    if(empty($product_title) or empty($product_description) or empty($product_keywords) or empty($product_category) or empty($product_price) or empty($product_image1)){
        echo "<script> alert('Please fill all fields') </script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"../product_images/$product_image1");

        // insertion

        $insert_query="insert into `products` (product_title,product_description,product_keywords,category_id,product_image1,product_price,date,status) values('$product_title','$product_description','$product_keywords','$product_category','$product_image1','$product_price',NOW(),'$products_status')";
        $result_query=mysqli_query($con,$insert_query);
        if($result_query){
            echo "<script> alert('Successfully inserted the products') </script>";
        }
    }

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products / Admin</title>
    <!-- boostrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .btn{
            width: 60%;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

<div class="container p-0 mt-0 mb-10">
    <h1 class="text-center">
        Insert Products
    </h1>
    <!-- form -->
    <form action="" method="post" enctype="multipart/form-data">
        <!-- product title -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">Product title</label>
            <input type="text" name="product_title" id="product_title" class = "form-control" placeholder="Enter product title" autocomplete="off" required>
        </div>
        <!-- product description -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_description" class="form-label">Product description</label>
            <input type="text" name="product_description" id="description" class = "form-control" placeholder="Enter product description" autocomplete="off" required>
        </div>
        <!-- product keywords -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keywords" class="form-label">Product keywords</label>
            <input type="text" name="product_keywords" id="keywords" class = "form-control" placeholder="Enter product keywords" autocomplete="off" required>
        </div>
        <!-- product Categories -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_category" id="" class="form-select">
                <option value="">Select a Category</option>
                <?php
                $select_query="select * from `categories`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                }

                ?>
            </select>
        </div>
        <!-- product Image1 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label">Product Image1</label>
            <input type="file" name="product_image1" id="product_image1" class = "form-control" required>
        </div>
        <!-- product price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">Product price</label>
            <input type="text" name="product_price" id="price" class = "form-control" placeholder="Enter product price" autocomplete="off" required>
        </div>
        <!-- Submit btn -->
        <div class="btn">
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class = "btn btn-info mb-3 px-3 text-white" value="Insert Product">
            </div>
            <!-- back to home -->
            <div class="form-outline mb-4 w-50 m-auto">
                <a href="index.php" class = "btn btn-info mb-3 px-3 text-white">Back Home</a>
            </div>
        </div>
    </form>
</div>
    
</body>
</html>