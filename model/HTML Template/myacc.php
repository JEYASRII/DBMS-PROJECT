<?php
include "DBController.php";
session_start();
  $user = $_SESSION["user"];

  $name = $_SESSION["name"];
$sqla = mysqli_query($conn,"SELECT * from user where user_id='$user'" );
$acc_res = mysqli_fetch_assoc($sqla);

  
?>
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
    <link rel="stylesheet" href="account.css">
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
        <div class="container">
        <h2 style="text-align:center;padding-top:50px;padding-bottom:20px;" class="font-baloo font-size-45"> MY ACCOUNT </h2>
        <center><img src="../assets/ad/gc.png" alt="cart image" class="card-img-top" style="height:150px;width:140px;">
        
        <table id="account" >
            <tr>
                <th class="font-baloo font-size-45">Name</th>
                <td class="font-baloo font-size-45"><?php echo $acc_res['name']; ?></td>
            </tr>
            <tr>
                <th class="font-baloo font-size-45">Email</th>
                <td class="font-baloo font-size-45"><?php echo $acc_res['email']; ?></td>
            </tr>
            <tr>
                <th class="font-baloo font-size-45">Contact</th>
                <td class="font-baloo font-size-45"><?php echo $acc_res['contact']; ?></td>
            </tr>
            <tr>
                <th class="font-baloo font-size-45">Address</th>
                <td class="font-baloo font-size-45"><?php echo $acc_res['address']; ?></td>
            </tr>
           
        </table>
        <p><br></p> 
        <div style="float:left">
        <form>
        <input type="button" value="BACK" onclick="document.location.href='account.php'" class="btn btn-warning font-size-12">
        </form> 
        </div>    
        <input type="button" value="EDIT PROFILE" onclick="document.location.href='editacc.php'" class="btn btn-primary mb-2">
        <div style="float:right">
        <input type="button" value="MY ORDERS" onclick="document.location.href='myord.php'" class="btn btn-warning font-size-12">
        </div>
        </center>
        </div>
        </main>

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
