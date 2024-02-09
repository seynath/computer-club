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
