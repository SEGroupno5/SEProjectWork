
<?php
include('../systemFiles/includes/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* footer */
 .footer{
    margin-top: 50px;
    padding: 20px;
    font-size: 20px;
    background-color:#CD3333;
    color: rgb(2, 2, 133);
    display: flex;
    align-items: center;
    justify-content: center;
 }
    </style>
</head>
<body>


        <div class="row px-1">
            <div class="col md-12">
                <?php
                    if(!isset($_SESSION['username'])){
                        include('admin_login.php');
                    }else{
                        include('index.php');
                    }
                ?>
            </div>
        </div>

    </div>

    <div class="footer">
        <p> Web Tech Project work &copy;Group24 </p>
    </div>
    
                <!-- JavaScript links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <!-- custom js -->
   <scriptn scr = 'js/addToCart.js'></script>
    <script src="index.js"></script>
</body>
</html>