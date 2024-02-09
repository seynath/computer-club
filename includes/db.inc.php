<?php
$severname="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="myfirstdb";

$conn=mysqli_connect($severname,$dBUsername,$dBPassword,$dBName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}


