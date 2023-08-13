<?php
include 'connect.php';

if (isset($_POST['submit'])) {

$emil=$_POST['emil'];  
$pssword=$_POST['pssword'];
 
$sluery="insert into person (emil,pssword)
values('$emil','$pssword')";
$d=mysqli_query($conn, $sluery);

if ($d) {
   // echo "inserted .";
   header('location:show.php');
}
else{die(mysqli_error($s));
}

}
?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

    <title>sign up page</title>
    <link rel="stylesheet" href="bank.css">

    <style>


    </style>
  </head>
 

<form method="POST">

<div id="div1">
        <img src="my bank/image" alt="">
        <h1 id="head1"> Create an account In our Bank </h1>
        <div id="div2">
            <h1 id="head"> Please sign-up Here  </h1>
    <input type="email"  id="userInput" placeholder="enter your e-mail" name="emil" ><br>
    <input type="password" id="userPassword" placeholder="enter your password " name="pssword"> <br>
    <button id="submit" name="submit">Signup</button>

    
    
   
        </div>
    </div>
  
</form>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
   
    #log{
      height: 50px;
      width: 100%;
      background-color: crimson;
      color: white;
     padding-top: 0px;
      
    }

    #log {
    transition-duration: 0.8s;
  }
  
  #log:hover {
    background-color: #4CAF50; 
    color: white;
  }
    body{
      margin-top: 0px;
      padding-top: 0px;
      margin-bottom: 0px;
    }
  </style>
</head>
<body>
  <button id="log">log in</button>
  <script>
    document.getElementById('log').addEventListener('click',function aso(){
    window.location.href='bank.html';
})
  </script>
</body>
</html>