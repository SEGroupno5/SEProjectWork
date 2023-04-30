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
    <!-- customer css link -->
    <link rel="stylesheet" href="index.css">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .container{
            background-color: #fee;
            box-shadow: rgba(87, 86, 86, 0.17) 0px -23px 25px 0px inset, rgba(192, 191, 191, 0.15) 0px -36px 30px 0px inset, rgba(111, 111, 111, 0.1) 0px -79px 40px 0px inset, rgba(123, 123, 123, 0.06) 0px 2px 1px, rgba(142, 141, 141, 0.09) 0px 4px 2px, rgba(144, 143, 143, 0.09) 0px 8px 4px, rgba(210, 208, 208, 0.09) 0px 16px 8px, rgba(199, 196, 196, 0.09) 0px 32px 16px;
            border-radius: 10px;
            padding: 30px;
            color: #fee;
            border-radius: 20px;
            font-size: 19px;
        }
        .btn{
            width: 60%;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .text-center{
            margin-bottom: 20px;
            text-align: center;
            color: #cd3333;
        }
        label{
            display: block;
            font-size: 23px;
            color: #cd3333;
        }
        form{
            width: 70%;
        }
        .form-outline{
            margin: 30px 0px;
        }
        input{
            padding: 10px 320px 10px 3px;
            font-size: 20px;
            border: none;
            outline: none;
            border-bottom: 2px solid #000;
            border-radius: 5px;
            background-color: #fee;
        }
        input[type = file]{
            padding: 10px 200px 10px 0px;
            color: black;
        }
        input[type = submit]{
            border-bottom: none;
            padding: 10px 50px;
            background-color: #cd3333;
            border-radius: 20px;
            color: #fff;
            cursor: pointer;
        }
        select{
            padding: 10px 50px 10px 5px;
            border-radius: 5px;
            font-size: 20px;
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
            <input type="text" name="product_title" id="product_title" class = "form-control" placeholder="Enter product title" autocomplete="off" required>
        </div>
        <!-- product description -->
        <div class="form-outline mb-4 w-50 m-auto">
            <input type="text" name="product_description" id="description" class = "form-control" placeholder="Enter product description" autocomplete="off" required>
        </div>
        <!-- product keywords -->
        <div class="form-outline mb-4 w-50 m-auto">
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
        <!-- product Image -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label"> Image</label>
            <input type="file" name="product_image1" id="product_image1" class = "form-control" required>
        </div>
        <!-- product price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <input type="text" name="product_price" id="price" class = "form-control" placeholder="Enter product price" autocomplete="off" required>
        </div>
        <!-- Submit btn -->
        <div class="btn">
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class = "btn btn-info mb-3 px-3 text-white" value="Insert Product">
            </div>
        </div>
    </form>
</div>
    
</body>
</html>