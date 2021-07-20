<?php
include "DBController.php";
session_start();
$user = $_SESSION["user"];
$sqla = mysqli_query($conn,"SELECT * from product" );
$val=mysqli_query($conn,"SELECT * FROM cart where user_id='$user'");
$result = mysqli_fetch_assoc($sqla);
$_SESSION["count"]=mysqli_num_rows($val);
$name = $_SESSION["name"];
 
?>
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
<!-- Sweetalert CDN -->
<script src="sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">

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

          <!-- Owl-carousel -->
            <section id="banner-area">
            <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="../assets/ad/ban1.png" alt="Banner1">
                  </div>
                  <div class="item">
                    <img src="../assets/ad/ban2.png" alt="Banner2">
                  </div>
                  <div class="item">
                    <img src="../assets/ad/ban 3.png" alt="Banner3">
                  </div>
                  <div class="item">
                    <img src="../assets/ad/ban4.png" alt="Banner4">
                  </div>
</div>
            </section>
          <!-- !Owl-carousel -->

         <!-- Top sale -->
          <section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                  <div class="item py-2">
              
                    <div class="product font-rale">
                      <a href="#"><img src="<?php  
                      $sql=mysqli_query($conn,"SELECT * from prod where pro_id=13");
                      $top=mysqli_fetch_assoc($sql);
                      echo $top["pro_image"];?>" alt="product1" class="img-fluid"></a>
                      <form action="account.php" method='post'>
                    <input type="hidden" name="prodid" value="<?php echo $top["pro_id"];?>">
                    
                    <input type="submit" class="btn btn-warning font-size-12" name="atc" value="Add to Cart">
                </form>
                      </div>
                    </div>
                  
                  <div class="item py-2">

                    <div class="product font-rale">
                      <a href="#"><img src="<?php 
                      $sql=mysqli_query($conn,"SELECT * from prod where pro_id=14");
                      $top=mysqli_fetch_assoc($sql);
                      echo $top["pro_image"];?>" alt="product1" class="img-fluid"></a>
                      
                      <form action="account.php" method='post'>
                    <input type="hidden" name="prodid" value="<?php echo $top["pro_id"];?>">
                    
                    <input type="submit" class="btn btn-warning font-size-12" name="atc" value="Add to Cart">
                </form>
                      </div>
                    </div>
                  
                  <div class="item py-2">
                
                    <div class="product font-rale">
                      <a href="#"><img src="<?php  
                      $sql=mysqli_query($conn,"SELECT * from prod where pro_id=15");
                      $top=mysqli_fetch_assoc($sql);
                      echo $top["pro_image"];?>" alt="product1" class="img-fluid"></a>
                      
                      <form action="account.php" method='post'>
                    <input type="hidden" name="prodid" value="<?php echo $top["pro_id"];?>">
                    
                    <input type="submit" class="btn btn-warning font-size-12" name="atc" value="Add to Cart">
                </form>
                      </div>
                    </div>
                  
                  <div class="item py-2">
                 
                    <div class="product font-rale">
                      <a href="#"><img src="<?php 
                      $sql=mysqli_query($conn,"SELECT * from prod where pro_id=18");
                      $top=mysqli_fetch_assoc($sql);
                      echo $top["pro_image"];?>" alt="product1" class="img-fluid"></a>
                      
                      <form action="account.php" method='post'>
                    <input type="hidden" name="prodid" value="<?php echo $top["pro_id"];?>">
                    
                    <input type="submit" class="btn btn-warning font-size-12" name="atc" value="Add to Cart">
                </form>
                      </div>
                    </div>
                  
                  <div class="item py-2">
                 
                    <div class="product font-rale">
                      <a href="#"><img src="<?php 
                      $sql=mysqli_query($conn,"SELECT * from prod where pro_id=29");
                      $top=mysqli_fetch_assoc($sql);
                      echo $top["pro_image"];?>" alt="product1" class="img-fluid"></a>
                      
                      <form action="account.php" method='post'>
                    <input type="hidden" name="prodid" value="<?php echo $top["pro_id"];?>">
                    
                    <input type="submit" class="btn btn-warning font-size-12" name="atc" value="Add to Cart">
                </form>
                      </div>
                    </div>
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
        <!-- !Top Sale -->
        
        <!-- products -->
        <section id="all-products">
            <div class="container">
              <h4 class="font-rubik font-size-20">PRODUCTS</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">ALL</button>
                <button class="btn" data-filter=".CLEANSERS">CLEANSERS</button>
                <button class="btn" data-filter=".TONERS">TONERS</button>
                <button class="btn" data-filter=".MOISTURIZERS">MOISTURIZERS</button>
                <button class="btn" data-filter=".SCRUBS">SCRUBS</button>
                <button class="btn" data-filter=".MASKS">MASKS</button>
                <button class="btn" data-filter=".SUNSCREENS">SUNSCREENS</button>

                <div class="grid">

                <?php do{
                ?>
                <div class="grid-item <?php echo $result["pro_type"];?> border">
                <div class="item py-1" style="width: 150px;">
                <div class="product font-rale">
                    <a href='#'><img src="<?php echo $result["pro_image"];?>" alt="product1" class="img-fluid"></a>
                    <form action="account.php" method='post'>
                    <input type="hidden" name="prodid" value="<?php echo $result["pro_id"];?>">
                    
                    <input type="submit" class="btn btn-warning font-size-12" name="atc" value="Add to Cart">
                </form>
                 </div>
                 </div>
                 </div>  
                
            <?php } while($result = mysqli_fetch_assoc($sqla)); ?>
            </div>
            </div>
            </div>
          </section>
          <?php
        if(isset($_POST["atc"])){
          $flag=0;
          $prodid = $_POST["prodid"];
          $user = $_SESSION["user"];
          $pro=mysqli_query($conn,"SELECT * FROM product where pro_id='$prodid'");
          $cut=mysqli_fetch_assoc($pro);
          if($cut["stock"]<=0){
            $flag=1;
            ?>
            <script>
              alert("SORRY THIS PRODUCT IS OUT OF STOCK!");
              </script>
              <?php
          }
          $price=$cut["pro_price"];
          $sqlc=mysqli_query($conn,"SELECT * FROM cart where user_id='$user'");
          $cart=mysqli_fetch_assoc($sqlc);
          if(mysqli_num_rows($sqlc)>0){
            while($cart=mysqli_fetch_assoc($sqlc)){
              if($prodid==$cart["pro_id"]){
                $flag=1;
                ?>
                <script>
                  alert("ITEM ALREADY IN CART");
                </script>
                <?php
                break;
              }
            }
            if($flag==0){
          $ins=mysqli_query($conn,"INSERT INTO cart(user_id,pro_id,price,quantity) values
           ('$user','$prodid','$price','1')");
         }
        }
        else{
            if($flag==0){
            $ins=mysqli_query($conn,"INSERT INTO cart(user_id,pro_id,price,quantity) values
             ('$user','$prodid','$price','1')");
            
          }}
          $_SESSION["count"]=$_SESSION["count"]+1;
}
  ?>  
        <!-- ! products -->
      

       
          
          

          <!-- Blogs -->
          <section id="blogs">
              <div class="container py-4">
                <h4 class="font-rubik font-size-20">Latest Blogs</h4>
                <hr>

                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h3 class="card-title font-size-16">FACE MISTS TO KEEP YOU FRESH DURING SUMMER</h3>
                      <img src="../assets/ad/blog1.png" alt="cart image" class="card-img-top">
                    
                      <h5>What Is A  Face Mist?</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">Face mists are an all in one solution to rehydrate and refresh your skin in just a few seconds. 
                         Busy schedules lead to neglect of hydration and skin care routines, consequently causing dry, flaky skin in winters and oily skin in the summer. 
                         A quick spritz with a face mist leaves your skin looking dewy and naturally glowing without elaborate makeup and skin care routines. 
                         Whether you are at work or a party, face mists upgrade your look without smudging your makeup. 
                         There are face mists for every type of skin— sensitive, oily, and dull.</p>

                      <h5>Why Are They Important?</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">Face mists are multipurpose. 
                        Before purchasing and seeing the effects of the mist on your skin firsthand, it might seem hard to believe that a product like this is essential; however, most users swear by the fact that they end up using their mists multiple times in a day. 
                        Face mists are a must for busy people always on the go. 
                        In India’s hot and humid climate, you might not always have time to refresh yourself with a shower or apply dense, sticky moisturisers. 
                        Instead, you can use a mist to absorb extra oil and hydrate your skin in one application. For those with sensitive skin, flaking and itching is a common problem in winters. Face mists contain soothing ingredients like chamomile, lavender, and vitamin C will nourish your skin. </p>

                      <h5>When To Use A Face Mist?</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">The versatility of face mists implies that you can use face mists multiple times, both for skin care and makeup routines. 
                        Most people like to apply a rejuvenating face mist to cure dull skin after waking up. 
                        You can use one to minimise oily pores and sweating post-workout. 
                        Some face mists are also effective as makeup primers when you do not have access to a cleanser or toner, and if your makeup look has turned out to be a bit brighter than what you were aiming for, a spritz of mist can help tone it down. </p>
                      </p>
                      
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h3 class="card-title font-size-16">ALL ABOUT MASKNE—AND HOW TO ACTUALLY TREAT IT</h3>
                      <img src="../assets/ad/blog2.png" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Masks have become an important part of our lives in recent times, and it turns out that the sweat that collects under them can cause havoc on your skin, resulting in a condition known as “maskne.” But what is Maskne, exactly? Maskne, as the name implies, is a newfound acne, bump, or general inflammation of the face area where your protective mask is covered!

While your skin barrier protects you in many ways, friction, rubbing, and sweat trapped under a mask will irritate the skin, resulting in breakouts around the jaw, mouth, and nose. Isn’t it frustrating? We know!  While wearing a mask is imperative, there are steps you can take to prevent and treat mask-related acne. Get scrolling to find out! </p>
                      <h5>First, Choose A 100 Percent Cotton And Breathable Mask</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">The first step is to choose a mask that helps your skin (and you) to breathe while still protecting others and yourself from virus transmission. Here are a few cotton masks for you to consider! Also, if you’re wearing a cotton mask, make sure to wash it with warm water and a gentle detergent on a regular basis. This will aid in the removal of any oil or dead skin cells that may have accumulated on the inside of the mask.  Opting for surgical masks? Avoid reusing them as there’s no good way to clean them. </p>
                      <h5>Follow An Effective Skin Care Routine</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">After you’ve chosen a mask that fits well and doesn’t irritate your skin, it’s time to consider what you’ll put underneath it. Use non-comedogenic or oil-free skin care and makeup to help prevent breakouts. If you’re going to be outside in the sun, make sure you’re wearing sunscreen with at least SPF 30+ (although stay put as much as you can).

Always use a gentle cleanser to wash your face after a long day of wearing your mask.  It removes all the accumulated debris and oil. And, if your skin becomes dry or irritated as a result of wearing a mask, stop using physical scrubs or exfoliators because they can cause more harm by removing too many dead skin cells. </p>
                      <h5>Try An Acne-focused Treatment</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">The key is to avoid going from zero to ten all at once. Use mild, blemish-fighting formulations that avoid drying out or agitating your skin, which can make your skin more irritated and lead to more breakouts.  The Aureana Purite Acne Dissolver Gel and the Jovees Ayurveda Anti Acne & Pimple Cream are some of our favourites for how gently they treat breakouts. </p>
                      <h5>Hydrate And Moisturise!</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">Dehydration is often the root cause. As a result, moisturise your face right after you wash it. Use a moisturiser that contains soothing ingredients like aloe vera, green tea, or hyaluronic acid, which helps to seal moisture into your skin and is suitable for all skin types, including those with sensitive, acne-prone skin.</p>
                      <h5> The Final Tip!</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">Wearing makeup beneath a mask is not a good idea! This is an effective step in reducing the risk of clogged pores and bacterial build-up on the skin. A reasonable solution is to wear a tinted SPF like the ENN UV Film Tinted Sun Protection, which will give you a healthy glow without contributing to maskne. 

Last but not the least, avoid going out. The pandemic is far from being over and we all are in this together. Let’s mask up, maintain physical distancing, and let’s get vaccinated.</p>
                      
                      <a href="#" class="color-second text-left">CONTINUE SHOPPING</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">6 WAYS TO AVOID BREAKOUTS IN SUMMER!</h5>
                      <img src="../assets/ad/blog3.png" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Spring is all set to bid adieu and this signals a change—a change in your beauty routine. Summer heat and humidity can trigger unwanted breakouts, and even though we can hide under masks presently, video calls always find a way to highlight zits. So, step up to the season and steal the spotlight, even if it is on video call for now. 

We have rounded the best acne-fighting products and tips to help you in this mission.</p>
                      <h5>Change your Cleanser</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">Quite how you cut down on clothing layers, cut down on the layers that apply to the skin. Stick to a lightweight, non-comedogenic routine this summer. Start by forgoing oil and cream-based cleansers in favour of light, foamy options.</p>
                      <h5>Exfoliate Often</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">Summer is the best season to amp up exfoliation, especially if you have oily skin. Set your pores open and breathing by increasing your exfoliation frequency. It will remove excess oil regularly thus bringing down pimple pops. </p>
                      <h5>Moisturising Is A Must</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">A sweaty face might mimic a hydrated one, but that is no reason to strike-off moisturiser from your routine. Moisturising is just as important as sun screening throughout the year. However, you might want to change your moisturiser depending on the season. Look out for light, mattifying moisturisers preferably with SPF to battle acne and the limited sun you will face during this lockdown. </p>
                      <h5>Vow To Vitamin C</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">This powerful antioxidant doesn’t just build immunity (which we all need right now) but also fights hyperpigmentation, fine lines and acne-induced inflammation. Summer or not, invest in a good vitamin-C serum and remember to dab it after cleansing.</p>
                      <h5>Eat Healthy, Stay Hydrated</h5>
                      <p class="card-text font-size-14 text-black-50 py-1">A few rules never change. You can use a million products but your skin is what you eat and drink. So remember to eat healthily, and drink tons of water. There is nothing more refreshing for the face and soul than salads and fresh juices during sweltering months. </p>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <!-- !Blogs -->
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

    <!-- Sweetalert cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>

</body>
</html>