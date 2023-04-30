
<?php
    if(isset($_GET['edit_account'])){
        $user_session_name=$_SESSION['username'];
        $select_user_name="SELECT * FROM `user_table` where username='$user_session_name'";
        $run_user_name=mysqli_query($con,$select_user_name);
        $row_fetch=mysqli_fetch_assoc($run_user_name);
        $user_id=$row_fetch['user_id'];
        $user_name=$row_fetch['username'];
        $user_email=$row_fetch['user_email'];
        $user_address=$row_fetch['user_address'];
        $user_mobile=$row_fetch['user_mobile'];
        

    }

    if(isset($_POST['user_update'])){
        $update_id=$user_id;
        $user_name=$row_fetch['username'];
        $user_email=$row_fetch['user_email'];
        $user_address=$row_fetch['user_address'];
        $user_mobile=$row_fetch['user_mobile'];
        $user_image=$_FILES['user_image']['name'];
        $user_image_tmp=$_FILES['user_image']['tmp_name'];
        move_uploaded_file($user_image_tmp,"../system/user_image/$user_image");

        // update query
        $update_details="update `user_table` set username='$user_name',user_email='$user_email',user_image='$user_image',user_address='$user_address',user_mobile='$user_mobile' where user_id=$update_id";
        $result_query=mysqli_query($con,$update_details);
        if($result_query){
            echo"<script>alert('Data Submitted Successfully!')</script>";
            echo"<script>window.open('user_logout.php','_self')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit account</title>
    <style>
        form{
            width: 98%;
        }
        .form_div{
            margin: 20px 10px;
        }
        .form_div input{
            padding: 10px 250px 10px 3px;
            border: none;
            border: 1px solid #cd3333;
            border-radius: 10px;
        }
        .form_div input[type=file]{
            padding: 10px 160px 10px 3px;
        }
        .form_div.imageContainer{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form_div.imageContainer input{
            padding: 70px 160px 10px 3px;
        }
        .form_div img{
            margin-left: -88px;
            width: 100px;
            height: 100px;
            object-fit: contain;
        }
        .submit{
            width: 100%;
            text-align: center;
        }
        input[type=submit]{
            padding: 10px 20px;
            background-color: #cd3333;
            color: #fff;
            border: none;
            border-radius: 10px;

        }
    </style>
</head>
<body>
    <h1>Edit Account Here</h1>
    <form action="" method="post" enctype="multipart/form-data" >
        <div class="form_div">
            <input type="text" class="form_control" value="<?php echo $user_name ?>" name='username' >
        </div>
        <div class="form_div">
            <input type="email" class="form_control" value="<?php echo $user_email ?>" name='user_email'>
        </div>
        <div class="form_div imageContainer">
            <input type="file" class="form_control" name='user_image' >
            <img src="../system/user_image/<?php echo $image ?>" alt="">
        </div>
        <div class="form_div">
            <input type="text" class="form_control" value="<?php echo $user_address ?>"  name='user_address'>
        </div>
        <div class="form_div">
            <input type="text" class="form_control" value="<?php echo $user_mobile ?>" name='user_mobile' >
        </div>
        <div class="submit">
            <input type="submit" value='Update'class="btn" name='user_update'>
        </div>

    </form>
</body>
</html>