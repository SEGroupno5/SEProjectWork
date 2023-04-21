
<?php
include('../systemFiles/includes/connect.php');
include('../systemFiles/functions/common_function.php');
session_start();
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
</head>
<body>

    <div class="container-fluid mt-10">
        <h2 class="text-center pt-2">USER LOGIN</h2>
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
                        <p class="small fw-bold mt-2 pt-1">Don't have an account? <a href="user_registration.php" class='text-danger'> Register</a></p>
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