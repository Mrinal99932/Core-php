<?php


$servername="localhost";
$username="root";
$password="";
$database="mindnote";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con){
  die("Failed to Connect".mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST'){
  $t=$_POST['title'];
  $d=$_POST['description'];
  $sql="INSERT INTO note (title,description) VALUES ('$t','$d')";
  $stmt = mysqli_prepare($con, $sql);


    // Execute the statement
    $result = mysqli_stmt_execute($stmt);
  if($result){
    echo"Notes Added...";
    
  }
}