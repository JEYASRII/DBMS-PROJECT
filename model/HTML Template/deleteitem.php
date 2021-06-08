<?php

session_start();


include "DBController.php";
$cart_id = $_GET['cart_id'];

mysqli_query($conn,"delete from cart where cart_id=$cart_id"); 

 header("Location:carttt.php");
 $count=$_SESSION["count"];
 $_SESSION["count"]=$count-1;
 ?>

