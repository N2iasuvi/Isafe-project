<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISAFE</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ISAFE</title>
    <h1>Student Attendance Monitoring System</h1> 
    <?php
    require 'header.php';
    require "nav.php";?>

  </head>

  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <?php 
  
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'server.php';
$number = $_POST["number1"];
$password = $_POST["pass"];

$sql ="Select * from user where studno='$number' AND password='$password'";
$result= mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
}
if($num==1){
  $login= true;
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $number;
  
  echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Login</strong>Success 
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
 header("location: welcome.php");
}
else
echo' <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <strong>Error!</strong>Invalid credentials.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
 error_reporting(E_ERROR | E_PARSE);
?>
<h2>Login to Continue</h1>
    <div class ="container mt-4">
<form action ="login.php" method = "post">
<div class="form-group " >
    <label for="Student number">Student Number</label>
    <input  class="form-control" id="number" name = "number1" placeholder="Student Number">
   
  <div class="form-group mt-3">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="password" name ="pass" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>  



</body>
</html></body>
</html>