<?php

$con=new mysqli('localhost', 'root', '', 'myfoodstore');
if(!$con){
    die(mysqli_error($con));
}

?>