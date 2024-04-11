<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/money.png">
  <link rel="stylesheet"  type="text/css" href="styles.css">
  


<!-- Link to Google Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500&family=Inter:wght@300;400;500;600;700;800;900&family=League+Spartan:wght@100;300;500;600;700;800&family=Outfit:wght@100;400&family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500&family=Inria+Serif:wght@300;400;700&family=Inter:wght@300;400;500;600;700;800;900&family=League+Spartan:wght@100;300;500;600;700;800&family=Outfit:wght@100;400&family=Roboto:wght@100&display=swap" rel="stylesheet">


  <title>Cash Chronicles</title>
</head>
<body>

  <main>

    <!-- SECTION NAV*************************-->
    <nav class="nav lr-padding">
      <h4 class="nav__header"><a href="/index.php#top">Cash Chronicles</a></h4>

      <ul class="nav__list">
        <li class="nav__list__button"><a href="index.php">Back to Homepage</a></li>
      </ul>

      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>

    <!-- SECTION BLOCK 1*************************-->
    <section class="review-top lr-margin">

      <div class="review-top__left">
        <img src="assets/review.png" >
      </div>
     
      <div class="review-top__right">
        <h2>Cash Chronicles Reviews</h2>
        <p>Leave a review!</p>
      </div>

    </section>


     <!-- SECTION BLOCK 2*************************-->  
     <section class="review-bot lr-margin">

      <form class="" action="" method="POST">
        <label for="username">Name:</label>
        <input type="text" class="" id="username" name="username">
        <label for="textReview">Review:</label>
        <input type="text" class="" id="textReview" name="textReview">
        <button type="submit" class="">Post</button>
      </form>
      <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){

              $db_sever = "localhost";
              $db_user = "root";
              $db_pass= "";
              $db_name = "websitedb";
              $conn = "";
  
              try{
                //connection object 
                $conn = mysqli_connect($db_sever, $db_user, $db_pass,$db_name);
                //echo"database connected";
              }catch(mysqli_sql_exception){
                //echo"Not Connected";
              }

              
              $username = $_POST["username"];
              htmlspecialchars($username);
              $textReview = $_POST["textReview"];
              htmlspecialchars($textReview);
          
              if(empty($username)){
                  echo"Please enter a username";
              }
              elseif(empty($textReview)){
                  echo"Please enter a review";
              }
              else{    
                  try{
                    $sql = "INSERT INTO reviews (username, textReview) Values( '$username', '$textReview')";
                      mysqli_query($conn, $sql);
                      echo"<p style= 'font-family:var(--inter); color:#151B1F' >Thank you for your review!<p>";
                  }
                  catch(mysqli_sql_exception){
                      echo"Error";
                  }
                  mysqli_close($conn);
              }
          }
          ?>
     </section>

     
<!-- SECTION BLOCK 3*************************-->  
<section class="review-grid-container lr-padding">

 
    <?php include 'read.php';?>
  

</section>
   
    

     
    
  

     <!-- FOOTER*************************-->  
     <footer class="lr-padding footer">
  
      <div class="footer__left">
        <h4 class="footer__header"><a href="#top">Cash Chronicles</a></h4>
  
        <ul class="footer__left__list">
          <li><a href="/index.php#about">About Us</a></li>
          <li><a href="/index.php#community">Community</a></li>
          <li ><a href="#sign">Sign Up</a></li>
        </ul>
      </div>
      
      
      <div class="footer__right">
        <a href="https://open.spotify.com/show/4FYpq3lSeQMAhqNI81O0Cn"><img src="assets/spotify.png"></a>
        <a href="https://twitter.com/planetmoney?lang=en"><img src="assets/twitter.png"></a>
        <a href="https://www.instagram.com/planetmoney/?hl=en"> <img src="assets/instagram.png"></a>
      </div>

     </footer>
  </main>

  <!-- JS Scripts -->
  <script type="text/javascript" src="scripts.js"></script>



  
</body>
</html>