<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from crud where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
$sql="update crud set id='$id',name='$name',email='$email',mobile='$mobile',password='$password'
where id= '$id'";
$result=mysqli_query($con,$sql);
if($result){
    echo"updated successfuly";
   // header('location:dispaly.php');
}else{
    die(mysqli_error($con));
}
    
}
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <!doctype html>
<html lang="en" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

<title>crud operation</title>
      </head>
  <body>
<div class="container my-5">
<form method="POST">
  <div class="from-group">
    <label  >name</label>
    <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off">
  </div>
  <div class="from-group">
    <label  >Email</label>
    <input type="Email" class="form-control" placeholder="enter your mail" name="email">
  </div>
  <div class="from-group">
    <label  >Mobile</label>
    <input type="number" class="form-control" placeholder="enter your mobile number" name="mobile" autocomplete="off">
  </div>
  <div class="from-group">
    <label  >password</label>
    <input type="password" class="form-control" placeholder="enter your password" name="password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

   
  </body>
</html>