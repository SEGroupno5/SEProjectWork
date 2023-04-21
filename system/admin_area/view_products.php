<?php
include('../includes/connect.php');

if(isset($_POST['insert_cat'])){
    if(!empty($_POST['cat_title'])){
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
}

?>


<H2 class="text-center mb-10">Insert Categories</H2>
<form action="" method="post" class = "mb-50 my-5">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class = "fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name = "cat_title" placeholder="Insert Category" aria-label="Categories" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-0 mb-2">
        <input type="submit" class="bg-info p-1 my-3 border-0"  name = "insert_cat" value ="Insert Category" class ="bg-info">
    </div>
</form>

.catego