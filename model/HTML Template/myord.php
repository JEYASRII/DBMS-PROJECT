<?php
session_start();
include "DBController.php";
if(isset($_POST["checkout"])){
  $user = $_SESSION["user"];
  $result = mysqli_query($conn,"SELECT c.cart_id,c.quantity,p.pro_id,p.pro_name,p.pro_price,p.pro_image from cart as c INNER JOIN product as p on p.pro_id=c.pro_id where c.user_id=$user"); 
    while($row = mysqli_fetch_array($result)){
      $flag=0;
    
      $med=($row['quantity']*$row['pro_price']);
      $price=$med+(0.1*$med)+50;
      $id=$row["pro_id"];
      $image=$row["pro_image"];
      $quantity=$row["quantity"];
      $ins=mysqli_query($conn,"INSERT INTO orderdb (pro_id,pro_image,order_date,user_id,totalprice,status,quantity) values('$id','$image',now(),'$user','$price','placed','$quantity')");
      if($ins){
        $flag=1;
      }
      }

      if($flag){
      ?>
     <script>
		alert('Values have been inserted');
	  </script>
    <?php
    }
}

$sqla = mysqli_query($conn,"SELECT * from orderdb" );
$order_res = mysqli_fetch_assoc($sqla);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARE AND GLOW</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- start #header -->
        <header id="header">
            

            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" href="#">CARE AND GLOW</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="#top-sale">On Sale</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="quiz.php">Take quiz</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#all-products">All Products</a>
                    </li>
                    
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                      </li>
                      
                   
                  </ul>
                  <p class="navbar-brand">Welcome, <?php echo $_SESSION["name"];?>!</p>
                  <form action="#" class="font-size-14 font-rale">
                      <a href="carttt.php" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo $_SESSION["count"];?></span>
                      </a>
                  </form>
                </div>
              </nav>
               <!-- !Primary Navigation -->

        </header>
    <!-- !start #header -->

    <!-- start #main-site -->
        <main id="main-site">
            <!-- Shopping cart section  
            <section id="cart" class="py-3">
                    <div class="container-fluid w-75">-->
                        <h3 style="text-align:center; padding-top:30px" class="font-baloo font-size-45" >MY ORDERS</h3>
                        <?php
$_SESSION["order_count"]=mysqli_num_rows($sqla);
if ($_SESSION["order_count"]==0)
{
    header("Location: emptyord.php");
}
?>
                        <?php do{
                        ?>
                        <div class="row">
                                <div class="col-sm-9">
                                    <!-- cart item -->
                                        <div class="row border-top py-3 mt-3">
                                            <div class="col-sm-2">
                                            <img src="<?php echo $order_res['pro_image']; ?>" style="height: 180px;" alt="cart1" class="img-fluid">
                                            </div>
                                            <div class="col-sm-8">
                                                <h5 class="font-baloo font-size-20">Order Date</h5>
                                                <medium><?php echo $order_res["order_date"];?></medium>
                                                <br>
                                                <h5 class="font-baloo font-size-20">Quantity</h5>
                                                <medium><?php echo $order_res["quantity"];?></medium>
                                                <h5 class="font-baloo font-size-20">Delivery</h5>
                                                <medium class="font-size-15 font-baloo">INR.50</medium>
                                                        </div>
                                                       
                                                    </div>
                                                

                                            </div>
                    
                                        <div class="col-sm-2 text-right">
                                            <h5 class="font-baloo font-size-20">Order Status</h5>
                                                <medium><?php echo $order_res["status"];?></medium>
                                                <br>
                                                
                                                
                                                <div class="font-size-20 text-danger font-baloo">
                                                    INR <span class="product_price"><?php echo $order_res["totalprice"];?></span>
                                                    <a href="delitem.php?order_id=<?php echo $order_res['order_id'];?>&pro_id=<?php echo $order_res['pro_id'];?>&quantity=<?php echo $order_res['quantity'];?>"><input type="button" class="btn btn-warning font-size-12" value='CANCEL ORDER'></a>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <?php } while($order_res = mysqli_fetch_assoc($sqla)); ?>
                        
                                  
                   <!-- </div>
                </section> -->
                <center>
                <form>
        
                <input type="button" name="back" value="Continue Shopping" class="btn btn-warning font-size-12" onclick="document.location.href='account.php'">
                     </form>   
</center>

        </main>
        
    <!-- !start #main-site -->

   <!-- start footer -->
   <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
            <div class="col-lg-4 col-12"></div>
              <div class="col-lg-4 col-12">
              <form class="form-row">
                  <div class="col">
                  <img src="../assets/ad/gc.png" alt="cart image" class="card-img-top">
                  </div>
                  <div class="col">
                  <h4 class="font-rubik font-size-20">ACCOUNT</h4>
                    <p><a href="myacc.php" class="font-rale font-size-14 text-white-50 pb-1">MY ACCOUNT</a></p>
                    <p><a href="myord.php" class="font-rale font-size-14 text-white-50 pb-1">MY ORDERS</a></p>
                    <input type="button" value="EDIT PROFILE" onclick="document.location.href='editacc.php'" class="btn btn-primary mb-2">
                    
                  </div>
                </form>
              </div>
              </div>
            <div class="row">
            <a href="privpol.html" class="font-rale font-size-14 text-white-50 pb-1">PRIVACY POLICY</a>
            <div class="col-lg-4 col-12"></div>
            <a href="termncon.html" class="font-rale font-size-14 text-white-50 pb-1">TERMS AND CONDITIONS</a>
            <div class="col-lg-4 col-12"></div>
            <a href="aboutus.html" class="font-rale font-size-14 text-white-50 pb-1">ABOUT US</a>
            </div>
                  
          </div>
          
        </footer>
        <div class="copyright text-center bg-dark text-white py-2">
          <p class="font-rale font-size-14">&copy; Copyrights 2021.</p>
        </div>
        <?php mysqli_close($conn);?>
    <!-- !start #footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="index.js"></script>
</body>
</html>
