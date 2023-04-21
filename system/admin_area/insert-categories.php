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
        margin-top: 100px;
    }
    .text-center{
        margin-top:20px;
        font-size: 30px;
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
    }
    .input-group input[type=submit]{
        padding: 10px 20px;
        background-color: #2A435D;
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