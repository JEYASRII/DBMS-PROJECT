<?php

session_start();
include "DBController.php";
$order=$_GET["order_id"];
$pro=$_GET["pro_id"];
$quantity=$_GET["quantity"];
                                                   



                                                    $upd="";
                                                    $del="";
                                                    $upd=mysqli_query($conn,"UPDATE product set stock=stock+'$quantity' where pro_id='$pro'");
                                                    $del=mysqli_query($conn,"DELETE from orderdb where order_id='$order'");
                                                    if($upd && $del){
                                                      ?>
                                                      <script>
                                                        alert("Values updated");
                                                        </script>
                                                      <?php
                                                    } 
                            
                                                    header("Location:myord.php");
                                                
                                                    
 ?>