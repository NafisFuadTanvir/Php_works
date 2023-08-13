<?php
include 'connect.php';
$id=$_GET['id'];
if (isset($_POST['submit'])) {
$nme=$_POST['nme'];
$mobile=$_POST['mobile'];
$pssword=$_POST['pssword'];
$emil=$_POST['emil'];   
$sluery="update person set id=$id,nme='$nme',mobile='$mobile',pssword='$pssword',emil='$emil'
where id=$id";

$d=mysqli_query($conn,$sluery);

if ($d) {
   // echo "Updated Data";
   header('location:show.php');
}
else{die(mysqli_error($s));
}

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body><br><br><br>
<div class="container my-5">
<form method="POST">
  <div class="form-group">
    <label >Nme 
    <input type="text" class="form-control" placeholder="Enter nme" name="nme"
    autocomplete="off"></label>
  </div>

  <div class="form-group">
    <label >Emil 
    <input type="text" class="form-control" placeholder="Enter emil" name="emil"
    autocomplete="off"></label>
  </div>

  <div class="form-group">
    <label >Mobile 
    <input type="text" class="form-control" placeholder="Enter mobile" name="mobile"
    autocomplete="off"></label>
  </div>

  <div class="form-group">
    <label >Pssword 
    <input type="text" class="form-control" placeholder="Enter pssword" name="pssword"
    autocomplete="off"></label>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>

</body>
</html>