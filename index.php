
      <?php
        include_once 'header.php';
      ?>
      
      <!-- Hero -->
      <div class="hero">
        <div class="hero-text">
        <h2>Hello!!! <?php 
          if(isset($_SESSION["username"])){
          echo $_SESSION["username"]; 
          }else{
            echo "Guest";}

          ?></h2>
          <h1>Computer Club</h1>
          
          <h1>University of Kelaniya</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus omnis earum odio cum unde. Nulla deserunt repudiandae est tenetur dicta.</p>
        </div>
       
      </div>
      
      <!--Sponsers' Logos -->
      <!-- <div>
        <li><img src="images/sponsers.png" alt="sponsers" /></li>        
        <li><img src="images/sponsers.png" alt="sponsers" /></li>
        <li><img src="images/sponsers.png" alt="sponsers" /></li>
        <li><img src="images/sponsers.png" alt="sponsers" /></li>

      </div> -->

      <!-- Form -->

      <div class="form-section">
        <h1>Join With Us</h1>
        <form class="form" action="form.php" method="post">
          <div >
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Your full name.." />
          </div>
          
          <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email.." />
          </div>
        
          <div>
            <label for="department">Department</label>
            <select id="department" name="department">
              <option value="SE">Software Engineering</option>
              <option value="CS">Computer Science</option>
              <option value="IM">Industrial Management</option>
              <option value="IT">Information & Technology</option>
          </div>
          
              <input class="submit-button" type="submit" name="submit" value="Submit">

        </form>
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
