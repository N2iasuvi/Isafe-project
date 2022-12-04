
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ISAFE</title>
    <h1>Student Attendance Monitoring System</h1> 
  </head>
  <body>
  <?php require 'header.php';
     require 'nav.php';?>
     <!doctype html>
     <?php
     $error;
    
     
     ?>
     <?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'server.php';
$name = $_POST["name1"];
$number = $_POST["number1"];
$password = $_POST["Password"];
$cpassword = $_POST["Password1"];
$exists=false;
global $result;
if(($password==$cpassword) && $exists==false){
    $sql = "INSERT INTO `user` ( `name`, `studno`, `password`,`date`) VALUES ( '$name', '$number', '$password',current_timestamp())";
    $result= mysqli_query($conn,$sql);
}


}
if($result){
  echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Registerd Sucessfully </strong> 
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
//  header("location: login.php");
}
else
echo' <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <strong>Error!</strong>Password dose not match.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class ="container mt-4">
     <form action ="signup.php" method = "post">
        <div class="form-group">
            <label for="Name">Name</label>
            <input class="form-control" id="Name1" name = "name1" placeholder="Name">
        <div class="form-group mt-3">
            <label for="student number">Student Number</label>
            <input class="form-control" id="number1" name = "number1" placeholder="Student Number">
        </div>
        <div class="form-group mt-3">
            <label for="password1">Password</label>
            <input type="password" class="form-control" id="Password" name = "Password" placeholder="Password">
        </div>
        <div class="form-group mt-3">
            <label for="CPassword1">Conform Password</label>
            <input type="password" class="form-control" id="Password1"name = "Password1" placeholder="Conform Password">
            <small>Make sure to type the same password</small>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
     </form>
</div>  
</body>
</html>
</body>
</html>