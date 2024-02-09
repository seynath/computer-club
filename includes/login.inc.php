<?php
if (isset($_POST['submit'])){
    $username=$_POST['uid'];
    $password=$_POST['pwd'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username,$password)!==false){
      //  header("Location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn,$username,$password);

}
else{
  header("Location: ../index.php");
  exit();
}

