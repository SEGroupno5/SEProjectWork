<?php
include('system/includes/connect.php');
include('system/functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background-color: #f4f4f4f4;
            overflow: hidden;
        }
        .wrapper{
            position: relative;
            width: 70%;
            text-align: center;
            margin: auto;
            margin-top: 20px;
            background-color: white;
            padding-bottom: 20px;
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;

        }
        .payment_options{
            width: 100%;
            text-align: center;
        }
        ul{
            width: 100%;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }
        ul li{
            list-style-type: none;
            width: 30%;
            border-radius: 100%;
            overflow: hidden;
            cursor: pointer;
            margin: 0px 2px;
            padding-bottom: 10px;
        }
        ul li img{
            width: 100px;
        }
        .message{
            text-align: center;
            margin-bottom: 10px;
            font-size: 18px;
            color: #CD3333;
            font-weight:700;
        }
         .homeBtn{
            width: 100%;
            display: flex;
            justify-content: flex-start;
        }
        .backHome{
            text-align: left;
            margin-left: 10px;
            bottom: 10px;
            padding: 7px 15px;
            border-radius: 10px;
            background-color: #CD3333;
            color: white;
            text-decoration: none;
        }
        .payment_header{
            color: #2A438e;
        }
    </style>
</head>
<body>

        <?php
            $user_ip = getIPAddress();
            $get_user = "SELECT * FROM `user_table` where user_ip='$user_ip'";
            $result_query=mysqli_query($con,$get_user);
            $run_query=mysqli_fetch_array($result_query);
            $user_id=$run_query['user_id'];
        ?>

    <div class="wrapper">
        <h1 class="payment_header">Payment Option</h1>
            <h3 class="text-center">You are making payment! to your cart items</h3>
            <div class="payment_options">
                <h3>Choose payment method</h3>
                <ul>
                    <li><a href="https://www.paypal.com" target='_blank'><img src="system/images/paymentMethodsImages/paypal.avif" alt="Paypal"></a></li>
                    <li class="mtn" style='color:chartreuse;'><h2><a href='user_area/order.php?user_id=<?php echo $user_id ?>'>Offline Payment</a></h2></li>
                </ul>
                
            </div>
            <div class="homeBtn">
                <a href="./index.php" class='backHome'>Home</a>
            </div>
            <div class="message"></div>
    </div>
    
</body>
</html>