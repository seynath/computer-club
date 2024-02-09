<?php 

  $servername = "localhost";
  $username = "look";
  $password = "v7@K6eu8-HCZ*DIp";
  $dbname = "myfirstdb";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  $name = mysqli_real_escape_string($conn, $_POST['fname']);
  $email = mysqli_real_escape_string ($conn, $_POST['email']);
  $department = mysqli_real_escape_string($conn, $_POST['department']);

  $sql = "INSERT INTO newsletter ( name, email, department) VALUES ('$name', '$email', '$department')";

  if (mysqli_query($conn, $sql)) {
    //  echo "New record created successfully";
    echo "<script>alert('New record created successfully');
    window.location.href='index.php';</script>";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>