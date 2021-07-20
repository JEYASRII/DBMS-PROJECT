<?php
include "DBController.php";
session_start();
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
    <link rel="stylesheet" href="quiz.css">
    
    
    
</head>
<body>
    <div><br></div>
    <div class="header" id="header">
    <h1 style="text-align:center; color: grey;"><center>YOUR PERSONALISED SKIN ANALYSIS</center></h1>
</div>
<form action="quiz.php" method='post' class="font-size-14 font-rale">
  <div class="container mt-sm-5 my-1">
    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h4"><b>1. YOUR AGE</b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3 h5" id="options"> 
              <input type="radio"  name="question1" value="a" required>16-20<br>
            
              <input type="radio"  name="question1" value="a">21-30<br>
             
              <input type="radio" name="question1" value="b">31-40<br>
  
              <input type="radio" name="question1" value="b">above 40<br>
    </div>
    </div>
    


    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h4"><b>2. YOUR GENDER</b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3 h5" id="options"> 
              <input type="radio"  name="question2" value="male" required>Male<br>
                
              <input type="radio"  name="question2" value="female">Female<br>
                 
              <input type="radio" name="question2" value="neutral">Other<br>
    </div>
    </div>
    

    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h4"><b>3. YOUR SKIN TYPE</b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3 h5" id="options"> 
              <input type="radio"  name="question3" value="normal" required>Normal<br>
                
              <input type="radio"  name="question3" value="dry">Dry<br>
                 
              <input type="radio" name="question3" value="oily">Oily<br>
  
              <input type="radio" name="question3" value="sensitive">Sensitive<br>
  
              <input type="radio" name="question3" value="combination">Combination<br>
    </div>
    </div>

    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h4"><b>4. YOUR SKIN CONCERN</b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3 h5" id="options"> 
                  <input type="radio"  name="question4" value="acne" required>Acne<br>
                    
                  <input type="radio"  name="question4" value="dullness">Dullness<br>
                     
                  <input type="radio" name="question4" value="dehydration">Dehydration<br>
      
                  <input type="radio" name="question4" value="pigmentation">Pigmentation<br>
    </div>
    </div>

    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h4"><b>5. YOUR SEASON</b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3 h5" id="options"> 
                        <input type="radio"  name="question5" value="summer" required>Summer<br>
                        
                        <input type="radio"  name="question5" value="winter">Winter<br>
    </div>
    </div>

    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h4"><b>6. SUN EXPOSURE</b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3 h5" id="options"> 
                            <input type="radio"  name="question6" value="35" required>Morning<br>
                            
                            <input type="radio"  name="question6" value="50">Noon<br>
                               
                            <input type="radio" name="question6" value="40">Evening<br>
                            
                            <input type="radio" name="question6" value="75">Whole day<br><br>
    </div>
    <div style="float:right;">
    
    <input type="button" value="BACK"  class="btn btn-warning font-size-12" onclick="document.location.href='account.php'">
  
</div>
    </div>
  
    <input type="submit" class="btn btn-warning font-size-12" name="test" value="SUBMIT">
  
  </div>  
</form>

<!-- sug products -->

<br>
          <section id="sugprod">
            <div class="container" id="done">
              <h4 class="font-rubik font-size-20">SUGGESTED PRODUCTS</h4>
              <hr>
                <div id="filters" class="button-group  font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">ALL</button>
                <button class="btn" data-filter=".CLEANSERS">CLEANSERS</button>
                <button class="btn" data-filter=".TONERS">TONERS</button>
                <button class="btn" data-filter=".MOISTURIZERS">MOISTURIZERS</button>
                <button class="btn" data-filter=".SCRUBS">SCRUBS</button>
                <button class="btn" data-filter=".MASKS">MASKS</button>
                <button class="btn" data-filter=".SUNSCREENS">SUNSCREENS</button>
                <div class="grid">
                <?php
                if(isset($_POST["test"]))
                {
                    if(isset($_POST["question1"])){
                      $age=$_POST["question1"];
                      }
                      if(isset($_POST["question2"])){
                      $gender=$_POST["question2"];
                      }
                      if(isset($_POST["question3"])){
                      $skint=$_POST["question3"];
                      }
                      if(isset($_POST["question4"])){
                      $skinc=$_POST["question4"];
                      }
                      if(isset($_POST["question5"])){
                      $season=$_POST["question5"];
                      }
                      if(isset($_POST["question6"])){
                      $sun=$_POST["question6"];
                      }
                   
                    $quiz = mysqli_query($conn," SELECT * from product where maturity = '".$age."' and 
                    (gender = '".$gender."' or gender='neutral') and
                    skin_type = '".$skint."' and 
                    skin_concern = '".$skinc."' and 
                    season = '".$season."' union
                    SELECT * from product where spf = '".$sun."'");
                    
                    $row = mysqli_fetch_assoc($quiz);
                    $count=mysqli_num_rows($quiz);
                    $_SESSION["quiz"]=true;
                if($count>0){
                do{
                  
                ?>
                
                <div class="grid-item <?php echo $row["pro_type"];?> border">
                <div class="item py-1" style="width: 150px;">
                <div class="product font-rale">
                    <a href='#'><img src="<?php echo $row["pro_image"];?>" alt="product1" class="img-fluid"></a>
                    <form action="quiz.php" method='post'>
                    <input type="hidden" name="prodid" value="<?php echo $row["pro_id"];?>">
                    
                    <input type="submit" class="btn btn-warning font-size-12" name="atc" value="Add to Cart">
                </form>
                 </div>
                 </div>
                 </div>  
                 
                
            <?php } while($row = mysqli_fetch_assoc($quiz));
            ?>
            
            <?php } }
            ?>
            
              </div>
            </div>
            <center>
              <h5 class="card-title font-size-16">TAKE QUIZ TO GET PERSONALISED RECOMMEDATIONS!</h5>
              <button type="submit" class="btn btn-warning font-size-12" onclick="document.location.href='quiz.php#header'">TAKE QUIZ</button>
              
              </center> 
            </div>
          </section>
          <br>
          <?php
        if(isset($_POST["atc"])){
          $prodid = $_POST["prodid"];
          $user = $_SESSION["user"];
          $pro=mysqli_query($conn,"SELECT * FROM product where pro_id='$prodid'");
          $cut=mysqli_fetch_assoc($pro);
          $price=$cut["pro_price"];
          $sqlc=mysqli_query($conn,"SELECT * FROM cart");
          $cart=mysqli_fetch_assoc($sqlc);
          $flag=0;
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
          $ins=mysqli_query($conn,"INSERT INTO cart(user_id,pro_id,price,quantity) values ('$user','$prodid','$price','1')");
          }}
          else{
            if(flag==0)
            $ins=mysqli_query($conn,"INSERT INTO cart(user_id,pro_id,price,quantity) values ('$user','$prodid','$price','1')");
          }
        

if($ins){
	?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php 
  $_SESSION["count"]=$_SESSION["count"]+1;}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php }}
  ?>  
          <!-- !sug products -->
 
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