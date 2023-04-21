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
            background-color: white;
            padding-bottom: 20px;
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;

        }
        .payment_options{
            width: 100%;
            text-align: center;
        }
        ul{
            width: 70%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
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
            width: 50px;
        }
        .message{
            text-align: center;
            margin-bottom: 10px;
            font-size: 18px;
            color: #CD3333;
            font-weight:700;
        }
        a{
            position: absolute;
            left: 10px;
            bottom: 10px;
            padding: 7px 15px;
            background-color: #CD3333;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1 class="text-center my-5">Payment Page</h1>
    <h3 class="text-center">You are making an offline payment!</h3>
    <div class="payment_options">
        <h3>Choose payment method</h3>
        <ul>
            <li class="paypal"> <img src="system/images/paymentMethodsImages/paypal.avif" alt=""> </li>
            <li class="mtn"><img src="system/images/paymentMethodsImages/mtnmomo.jpeg" alt=""></li>
            <li class="vf"><img src="system/images/paymentMethodsImages/vfcash.png" alt=""></li>
        </ul>
        
    </div>
    <a href="index.php">Home</a>
    <div class="message"></div>
    </div>
    <script>
        const paypal = document.querySelector('.paypal');
        const mtn = document.querySelector('.mtn');
        const vf = document.querySelector('.vf');
        const message = document.querySelector('.message');

        paypal.addEventListener('click', function(e){
            
                message.innerHTML = "You've made a successful purchased. <br> Thanks for shopping with";
        });
        mtn.addEventListener('click', function(e){
            
                message.innerHTML = "You've made a successful purchased. <br> Thanks for shopping with";
        });
        vf.addEventListener('click', function(e){
            
                message.innerHTML = "You've made a successful purchased. <br> Thanks for shopping with";
        });

        

    </script>
</body>
</html>