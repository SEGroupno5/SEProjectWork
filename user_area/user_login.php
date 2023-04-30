
<?php
include('../system/includes/connect.php');
include('../system/functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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

    <div class="container-fluid">
        <h2 class="text-center">USER LOGIN</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post">
                    <!-- username -->
                    <div class="form-outline mb-4">
                        <label for="username" class='form-label'>Username</label>
                        <input type="text" id='user_name' name='username' class='form-control' placeholder="Enter username" autocomplete="off" required='required'>
                    </div>
                    
                    <!-- user password -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class='form-label'>Password</label>
                        <input type="password" id='user_password' name='user_password' class='form-control' placeholder="Enter password" autocomplete="off" required='required'>
                    </div>
                    <div class="my-2">
                        <input type="submit" value = "Login" class="btn" name='user_login'>
                        <p class="small">Don't have an account? <a href="user_registration.php" class='text-danger'> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
if(isset($_POST['user_login'])){
    $username=$_POST['username'];
    $user_password=$_POST['user_password'];

    $select_query="select * from `user_table` where username='$username'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    $data_row=mysqli_fetch_assoc($result);
    $user_ip=getIPAddress();

    // cart
    $select_cart_query="select * from `cart_details` where ip_address='$user_ip'";
    $result_cart=mysqli_query($con,$select_cart_query);
    $rows_count_cart=mysqli_num_rows($result_cart);
    if($rows_count>0){
        $_SESSION['username']=$username;
        if(password_verify($user_password,$data_row['user_password'])){
            // echo"<script>alert('Login successful')</script>";
            if($rows_count==1 and $rows_count_cart==0){
                $_SESSION['username']=$username;
                echo"<script>alert('Login successful')</script>";
                echo"<script>window.open('profile.php','_self')</script>";
            }else{
                $_SESSION['username']=$username;
                echo"<script>alert('Login successful')</script>";
                echo"<script>window.open('../payment.php','_self')</script>";
            }
        }else{
            echo"<script>alert('Invalid Credentials')</script>";
        }

    }else{
        echo"<script>alert('Invalid Credentials')</script>";
    }
}
?>