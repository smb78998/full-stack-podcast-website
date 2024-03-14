<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/money.png">
  <link rel="stylesheet" href="styles.css">
  


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
      <h4 class="nav__header"><a href="#top">Cash Chronicles</a></h4>

      <ul class="nav__list">
        <li><a href="#about">About Us</a></li>
        <li><a href="#community">Community</a></li>
        <li class="nav__list__button"><a href="#sign">Sign Up</a></li>
        <li class="nav__list__button"><a href="https://open.spotify.com/show/4FYpq3lSeQMAhqNI81O0Cn" target="_blank">Listen in</a></li>
      </ul>

      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>

    <!-- SECTION BLOCK 1*************************-->
    <section class="carasel lr-margin" id="top">

      <div class="carasel__left">
        <img src="assets/carasel1-removebg.png" >
      </div>
     
      <div class="carasel__right">
        <h2>Cash <br/>Chronicles</h2>
        <p>Personal Finaces can get confusing, we are here to help!</p>

        <div class="animate-button">
          <button class="button-animation"><a href="#sign">Subscribe Today</a></button>
        </div>
        
      </div>
    </section>

    <!-- SECTION BLOCK 2*************************-->
    <section class="about lr-padding" id="about">
      <div class="about__right ">
        <h2 class="heading-2" >About Us</h2>
        <p class="p">Embark on a journey towards financial empowerment with Cash Chronicles. Dive into insightful discussions, expert interviews, and real-life stories that demystify money matters. Sign up for our mailing list to stay updated on the latest episodes and exclusive content!</p>
      </div>

      <div class="about__left">
        <div class="iframe-wrapper">
          <iframe src="https://www.youtube.com/embed/rK6WLHNYjwM?si=n8ZTAwSrI8ynvqxB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
       
      </div>

    </section>






    <!-- SECTION BLOCK 3*************************-->
    <div class="community lr-margin" id="community">
      <h2 class="heading-2">Our Community</h4>

      <div class="community__feedback"> <!--carousel-->

        <div class="community__feedback__box"><!--carousel__item -->
          <div class="community__feedback__box__top">
            <img src="assets/profile1.png">
            <p>Kenji Writgh</p>
          </div>
          <p class="p">"If you're seeking financial guidance without the jargon, this podcast is a gem. The hosts share practical tips without overwhelming you, making it easy to apply their advice to your own financial situation."</p>
        </div>

        <div class="community__feedback__box">
          <div class="community__feedback__box__top ">
            <img src="assets/profile2.png">
            <p>Alba Smith</p>
          </div>
          <p class="p">"I stumbled upon this hidden gem of a podcast, and it's become my go-to for personal finance wisdom. The hosts share practical tips that have genuinely improved my financial outlook. A must-listen!"</p>
        </div>

        <div class="community__feedback__box">
          <div class="community__feedback__box__top">
            <img src="assets/profile3.png">
            <p>Keily Jones</p>
          </div>
          <p class="p">"Finally, a podcast that speaks my language! Cash Chronicles breaks down money matters in a way that's relatable and actionable. I've never been more excited about my financial future."</p>
        </div>

        <!-- <div class="carousel__nav">
          <span class="carousel__button"></span>
          <span class="carousel__button carousel__button--selected" ></span>
          <span class="carousel__button"></span>
        </div> -->

      </div>




      </div>
    </div>


     <!-- SECTION BLOCK 4*************************-->  
     <section class="ready lr-margin" id="sign">

      <div class="ready__left">
        <h2 class="heading-2">Ready to<br> start Saving?</h4>
        <p >Sign up for our mailing list today!</p>
      </div>
      
      <div class="ready__right">
      


          <form action="" id="myForm" method="post">
            <p class="p">First Name</p>
            <input type="text" placeholder="Enter your first name " name="firstName"/>
            <p class="p">Last Name</p>
            <input type="text" placeholder="Enter your last name " name="lastName"/>
            <p class="p">Email</p>
            <input type="text" placeholder="Enter a valid email address " name="email" />

            <input type="submit" name="submit" value="register" id="ready__right--register">
           
            </form>



            <?php
            // if(isset($_POST["firstName"])){
            //   $firstName = $_POST["firstName"];
            // }
              
            // if(!empty($firstName)){
            //   echo"Hello {$firstName}";
            // } 

            if($_SERVER["REQUEST_METHOD"] == "POST"){

              $db_sever = "localhost";
              $db_user = "root";
              $db_pass= "";
              $db_name = "websitedb";
              $conn = "";
  
              try{
                //connection object 
                $conn = mysqli_connect($db_sever, $db_user, $db_pass,$db_name);
                echo"database connected";
              }catch(mysqli_sql_exception){
                echo"Not Connected";
              }
  
              // //Check if Database is connected
              // if($conn){
              //   echo"yes";
              // }else{
              //   echo"no";
              // }
  

              //sql command to run
              //$sql = "INSERT INTO users (lastName, firstName, email) Values('bob', 'billy', 'email@gmail.com')";
  
              // try{
              //   mysqli_query($conn,$sql);
              //   echo"user registered";
              // }catch(mysqli_sql_exception){
              //   echo"could not register user";
              // }
  

              $firstName = $_POST["firstName"];
              $lastName = $_POST["lastName"];
              $email = $_POST["email"];
          
              if(empty($firstName)){
                  echo"Please enter a username";
              }
              elseif(empty($lastName)){
                  echo"Please enter a password";
              }
              elseif(empty($email)){
                echo"Please enter an email";
                mysqli_close($conn);
            }
              else{    
                  try{
                    $sql = "INSERT INTO users (lastName, firstName, email) Values('$firstName', '$lastName', '$email')";
                      mysqli_query($conn, $sql);
                      echo"You are now registered!";
                  }
                  catch(mysqli_sql_exception){
                      echo"Error";
                  }
                  mysqli_close($conn);
              }
              
          }
            

     

          ?>

         
        
    



   
      </div>

     </section>

     <div class="welcome-back"></div>
  

     <!-- FOOTER*************************-->  
     <footer class="lr-padding footer">
  
      <div class="footer__left">
        <h4 class="footer__header"><a href="#top">Cash Chronicles</a></h4>
  
        <ul class="footer__left__list">
          <li><a href="#about">About Us</a></li>
          <li><a href="#community">Community</a></li>
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

  <!-- JS Scripts and React Components -->
  <script type="text/javascript" src="scripts.js"></script>

  <script
  src="https://unpkg.com/react@16/umd/react.production.min.js"
  crossorigin
></script>
<script
  src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"
  crossorigin
></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

 <script type="text/babel" src="WelcomeBack.js"></script>
<script type="text/babel" src="CoolButton.js"></script>

<script type="text/babel">
  ReactDOM.render(<WelcomeBack />, document.querySelector(".welcome-back"));
</script> 

  
</body>
</html>