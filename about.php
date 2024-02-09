<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computer Club - UOK</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="about.css" />
    <!-- <link rel = "stylesheet" href="login.css"> -->

    <link rel="php" href="form.php">
 
  </head>

  <body>
    <div class="Homepage">
      <nav class="Header">
        <div class="logo">
          <a> <img class= "header-logo" src="images\kelaniyauni-w-01.png" /> </a>
        </div>
        <div class="menu">
          <ul class="menu-list">
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="contact.php">Contact</a></li>
            <li class="item"><a href="about.php">About</a></li>
            <!-- <li class="loginBtn"> -->
              <?php 
          if(isset($_SESSION["username"])){

          echo '<li class="item"><a href="#">'.$_SESSION["username"].'</a></li>';
          echo '<li class="item"><a href="includes\logout.inc.php">Log Out</a></li>';



          }else{
            echo '<li class="item"><a href="login.php">Login</a></li>';}

          ?>

            <!-- <li class="item2Button"><a href="http://">Sign Up</a></li> -->
            <li class="toggle" onclick="toggle()"><span class="bars"><img src="images\icons8-menu-100.png"></span></li>
          </ul>
          
          
          
          
          
          <ul class="toggle-menu" id="toggle-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li ><a href="login.php">Login</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>

        </div>
      </nav>



      <div class="about">
          <div class="mission" >
              <h2>Our Mission</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat ultrices massa, nec sodales arcu tristique sed.</p>
          </div>

          <div class="team">
                <div>
                  <div><h2>Our Team</h2></div>
                  <div class="team-member" style="display: flex; justify-content: space-around; align-items: center; column-gap: 5vw;">
                    <div>
                      <img src="images\pexels-pixabay-220453.jpg" width="100px" alt="Team Member 1">
                      <h3>John Doe</h3>
                      <p>CEO</p>
                    </div>
                    <div>
                      <img src="images\pexels-andrea-piacquadio-774909.jpg" width="100px" alt="Team Member 2">
                      <h3>Jane Smith</h3>
                      <p>COO</p>
                   </div>
                  </div>
              </div>
          <div class="contact">
              <h2>Contact Us</h2>
              <p>Email: contact@company.com</p>
              <p>Phone: (123) 456-7890</p>
          </div>  
      </div>
      <div class="footer">
      
      <div class="footer-logo-sec">
        <img src="images\kelaniyauni-w-01.png" alt="ss">
        <h2>University of Kelaniya</h2>
        <p>Thalagolla Rd, Dalugama, Kelaniya 11600</p>
      </div>

      <div class="footer-link-sec">
        <h2>Quick Links</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php">Sign In</a></li>
          <li><a href="signup.php">Sign Up</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

  </div>
  <div class="footer-bottom">
    <p class="footer-bottom-text">All rights reserved by &copy;Computer Club - UOK</p>
  </div>





    </div>
    <script src="index.js"></script>

  </body>
</html>