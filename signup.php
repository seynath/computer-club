<?php
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel = "stylesheet" href="login.css">
  <link rel = "stylesheet" href="index.css">
</head>
<body class="contact-body" >
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



  <div class="contact-section" >
    <div class="contact-text">
      <h1>Sign Up</h1>
      <p>Welcome to UOK Hackers</p>
    </div>
    <div class="container">
      <form action="includes\signup.inc.php" method="post" >
    
        <input type="text" id="" name="name" placeholder="Enter Your Name">
        <input type="text" id="email" name="email" placeholder="Enter Your Email">
        <input type="text" id="" name="uid" placeholder="Enter Your Username">
        <input type="password" id="password" name="pwd" placeholder="Enter Password">
        <input type="password" id="password" name="pwdrepeat" placeholder="Repeat Password">
        <button name="submit" type="submit">Sign Up</button>
      </form>
    <div style="margin-top: 15px;">  Already member ? <a href="/computer-club/login.php">Log In</a></div>
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
      <script src="index.js"></script>

</body>
</html>

