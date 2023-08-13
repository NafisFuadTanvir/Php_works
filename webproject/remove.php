<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $uery="delete from person where ID=$id";
    $r=mysqli_query($conn,$uery);
    if ($r) {
      header('location:show.php');
        //  echo "Deleted .";# code...
    }else
    {
        die(mysqli_error($conn));
    }
}
?>