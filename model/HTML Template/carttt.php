<?php 
session_start();

?>
<!DOCTYPE html>
<html>
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
                      <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo $_SESSION["count"];?></span>
                      </a>
                  </form>
                </div>
              </nav>
               <!-- !Primary Navigation -->

        </header>
    <!-- !start #header -->

<section>
<div class="container mt-sm-5 my-1" >
<?php

include "DBController.php";
$_SESSION["count"]=0;
$user_id=$_SESSION["user"];
$result = mysqli_query($conn,"SELECT c.cart_id,c.quantity,p.pro_id,p.pro_name,p.pro_price,p.pro_image,p.stock from cart as c INNER JOIN product as p on p.pro_id=c.pro_id where c.user_id=$user_id"); 
$_SESSION["count"]=mysqli_num_rows($result);
if ($_SESSION["count"]==0)
{
    header("Location: ecart.php");
}
?>

<center>

<table border=2 style="border-style: outset; border-color: rgb(16, 154, 218);">
  <tr>
    <td>Product Name</td>
    <td>Cost</td>
    <td>Image</td>
    <td>Quantity</td>
    
  </tr>
<?php
$cost=0;
$tax=0;
while($row = mysqli_fetch_array($result))
{
?>
  <tr>
  <td><?php echo $row["pro_name"]; ?></td>
  <td><?php echo $row["pro_price"]; ?></td>
  <td><img src="<?php echo $row['pro_image']; ?>" width="100" height="100">
  
</td>
  <td> 
  <form action="" method='post'>
  <input type='hidden' name='cart_id' value="<?php echo $row["cart_id"];?>">
  <input type='hidden' name='stock' value="<?php echo $row["stock"];?>">
  <input type='text' name='text' > 
  <input type='submit' class="btn btn-warning font-size-12" name='update' value='UPDATE'>
</form>
<?php
if(isset($_POST["update"])){
  $flag=0;
  $quantity = $_POST["text"];
  $cart_id = $_POST["cart_id"];
  $stock=$_POST["stock"];
  if($quantity>$stock){
    $flag=1;
  }
  if($flag==0){
  mysqli_query($conn,"UPDATE cart set quantity='".$quantity."' where cart_id='".$cart_id."'");
  }
  header("Location:carttt.php");
}
?>
  <a href="deleteitem.php?cart_id=<?php echo $row['cart_id']?>"><input type="button" class="btn btn-warning font-size-12" value='REMOVE'>
     </a>
    </td>
  </tr>
  <?php 
  $price=$row['quantity']*$row['pro_price'];
  $cost=$cost + ($row['quantity']*$row['pro_price']); 
  $tax=$tax+0.1*$price;?>
<?php
}
?>
</table>
<?php
echo "TAX: ".$tax;?>
<br>
<?php
$total=$cost+$tax;
echo "<b>TOTAL COST:</b> "?><b> <?php echo $total;?></b>
<?php
$_SESSION["pro_price"]=$total;
?>
<div style="float:right;">
<form action="myord.php" method='post'>
<input type="submit" name="checkout" value="CHECKOUT" class="btn btn-warning font-size-12" onclick="document.location.href='myord.php'">
</form>
<br>
</div>
<div style="float:left;">
    <form>
    <input type="button" value="BACK"  class="btn btn-warning font-size-12" onclick="document.location.href='account.php'">
    </form>
</div>
</center>
</div>
</section>

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
