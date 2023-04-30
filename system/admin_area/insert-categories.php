<?php
include('../includes/connect.php');

if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];
    $select_query="select * from `categories` where category_title='$category_title'";
    $select_result=mysqli_query($con,$select_query);
    $num=mysqli_num_rows($select_result);
    if($num > 0){
        echo "<script>alert('This category is present in the database')</script>";
    }else{
        $insert_query="insert into `categories` (category_title) values('$category_title')";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Category has been inserted successfully!')</script>";
        }
    }
}

?>
<style>
    .cat-container{
        width:60%;
        margin: auto;
        background-color: #fee;
        margin-top: 100px;
        box-shadow: rgba(87, 86, 86, 0.17) 0px -23px 25px 0px inset, rgba(192, 191, 191, 0.15) 0px -36px 30px 0px inset, rgba(111, 111, 111, 0.1) 0px -79px 40px 0px inset, rgba(123, 123, 123, 0.06) 0px 2px 1px, rgba(142, 141, 141, 0.09) 0px 4px 2px, rgba(144, 143, 143, 0.09) 0px 8px 4px, rgba(210, 208, 208, 0.09) 0px 16px 8px, rgba(199, 196, 196, 0.09) 0px 32px 16px;
        border-radius: 10px;
    }
    .text-center{
        margin-top:20px;
        font-size: 30px;
        color: #cd3333;
        text-align: center;
    }
    .form-outline{
        width: 90%;
        margin:auto;
    }
    .input-group{
        margin: 10px 0px;
    }
    .input-group input[type=text]{
        width: 100%;
        padding: 10px 0px;
        font-size: 20px;
        border: none;
        border-bottom: 2px solid #cd3333;
        outline: none;
    }
    .input-group input[type=submit]{
        padding: 10px 20px;
        background-color: #cd3333;
        font-size: 19px;
        color: #fff;
        border:none;
    }
</style>

<div class="cat-container">
    <H2 class="text-center">Insert Categories</H2>
    <form action="" method="post" class = "form-outline">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class = "fa-solid fa-receipt"></i></span>
            <input type="text" class="form-control" name = "cat_title" placeholder="Insert Category" aria-label="Categories" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
            <input type="submit" class="btn"  name = "insert_cat" value ="Insert Category" class ="bg-info">
        </div>
    </form>
</div>