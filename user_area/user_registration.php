<?php
    include('../system/includes/connect.php');
    include('../system/functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="user_register.css">
    <style>
        .container-fluid{
            margin-top: 180px;
            padding: 30px;
        }
        .text-center{
            text-align: center;
        }
        .form-label{
            display: block;
            font-size: 30px;
            margin: 15px 0px 2px 0px;
        }
        input{
            width: 500px;
            padding: 10px 50px 10px 3px;
            font-size: 20px;
            background-color: #fff;
            border: none;
            border-bottom: 1px solid #cd3333;
            outline: none;
        }
        input[type=submit]{
            width: 560px;
            font-size: 25px;
            margin-top: 20px;
            font-weight: 500;
            border-radius: 10px;
            background-color: #cc5c33;
            cursor: pointer;
        }
        input[type=submit]:hover{
            color: #fff;
            background-color: #cd3333;
        }
        .form-outline:nth-child(2){
            margin-bottom: 20px;
        }
        .small{
            width: 100%;
            text-align: right;
            font-size: 18px;
        }
        .small a{
            text-decoration: none;
            color: #cd3333;
        }
    </style>
</head>
<body>

    <div class="container-fluid my-3">
        <h2 class="text-center">USER REGISTRATION</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username -->
                    <div class="form-outline mb-4">
                        <label for="username" class='form-label'>Username</label>
                        <input type="text" id='user_name' name='username' class='form-control' placeholder="Enter username" autocomplete="off" required='required'>
                    </div>
                    <!-- user email -->
                    <div class="form-outline mb-4">
                        <label for="user_email" class='form-label'>Email</label>
                        <input type="email" id='user_email' name='user_email' class='form-control' placeholder="Enter email" autocomplete="off" required='required'>
                    </div>
                    <!-- user image -->
                    <div class="form-outline mb-4">
                        <label for="user_image" class='form-label'>Image</label>
                        <input type="file" id='user_image' name='user_image' class='form-control'>
                    </div>
                    <!-- user password -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class='form-label'>Password</label>
                        <input type="password" id='user_password' name='user_password' class='form-control' placeholder="Enter password" autocomplete="off" required='required'>
                    </div>
                    <!-- user confirm password -->
                    <div class="form-outline mb-4">
                        <label for="conf_user_password" class='form-label'>Confirm password</label>
                        <input type="password" id='conf_user_password' name='conf_user_password' class='form-control' placeholder="Repeat password" autocomplete="off" required='required'>
                    </div>
                    <!-- user address -->
                    <div class="form-outline mb-4">
                        <label for="user_address" class='form-label'>Address</label>
                        <input type="text" id='user_address' name='user_address' class='form-control' placeholder="Enter address" autocomplete="off" required='required'>
                    </div>
                    <!-- user contact -->
                    <div class="form-outline mb-4">
                        <label for="user_mobile" class='form-label'>Contact</label>
                        <input type="text" id='user_mobile' name='user_mobile' class='form-control' placeholder="Enter Mobile Number" autocomplete="off" required='required'>
                    </div>
                    <div class="my-2">
                        <input type="submit" value = "Register" class="btn" name='user_registration'>
                        <p class="small fw-bold mt-2 pt-1">Already have an account? <a href="user_login.php" class='text-danger'> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php
if(isset($_POST['user_registration'])){
    $username=$_POST['username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password, PASSWORD_DEFAULT);
    $conf_user_password=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_mobile=$_POST['user_mobile'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $ip_address=getIPAddress();

    // select query
    $select_query="select * from `user_table` where username='$username' or user_email='$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo"<script>alert('Username or email already taken')</script>";
        echo"<script>window.open('user_registration.php','_self')</script>";
    }else if($user_password !=$conf_user_password){
        echo"<script>alert('Password do not match')</script>";
        echo"<script>window.open('user_registration.php','_self')</script>";
    }else{
    // insert query
    move_uploaded_file($user_image_tmp,'user_image/$user_image');
    $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) values('$username','$user_email','$hash_password','$user_image','$ip_address','$user_address','$user_mobile')";
    $run_query=mysqli_query($con, $insert_query);
    if($run_query){
        echo"<script>alert('Data inserted successfully')</script>";
    }else{
        die(mysqli_error($con));
    }}

    // checking whether user items in cart
    $select_cart_items="select * from `cart_details` where ip_address='$ip_address'";
    $result=mysqli_query($con,$select_cart_items);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        $_SESSION['username']=$username;
        echo"<script>alert('You have items in cart')</script>";
        echo"<script>window.open('checkout.php','_self')</script>";
    }else{
        echo"<script>window.open('user_login.php','_self')</script>";
    }
}
?>