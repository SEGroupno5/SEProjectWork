<?php
include('../includes/connect.php');

if(isset($_POST['insert_brand'])){
    $brand_title=$_POST['brand_title'];
    $select_query="select * from `brands` where brand_title='$brand_title'";
    $select_result=mysqli_query($con,$select_query);
    $num=mysqli_num_rows($select_result);
    if($num > 0){
        echo "<script>alert('This brand is present in the database')</script>";
    }else{
        $insert_query="insert into `brands` (brand_title) values('$brand_title')";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Brand has been inserted successfully!')</script>";
        }
    }
}

?>

<H2 class="text-center mt-n3">Insert Brands</H2>
<form action="" method="post" class = "mb-2 my-5">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class = "fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name = "brand_title" placeholder="Insert Brand" aria-label="Brands" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-0 mb-2">
        <input type="submit" class="bg-info p-1 my-3 border-0"  name = "insert_brand" value ="Insert Brand" class ="bg-info">
    </div>
</form>