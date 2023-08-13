<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action=" " method="post">
 id:- <input type="number" name="id"><br>
 name:- <input type="text" name="name"><br>
 password:- <input type="number" name="pass"><br>
 <br>
<input type="submit" name="submit1" value="insert">
<input type="submit" name="submit2" value="delete">
<input type="submit" name="submit3" value="update">
<input type="submit" name="submit4" value="view">

</form>
</body>
</html>

<?php

include("connection.php");
if(isset($_POST["submit1"])){

    $sql= "INSERT INTO college(id,name,password) VALUES('$_POST[id]','$_POST[name]','$_POST[pass]')";

  if($conn->query($sql)==TRUE){
          echo "inserted successfully";
  }

}

if(isset($_POST["submit2"])){

    $sql= "DELETE FROM college where id='$_POST[id]'";
    if($conn->query($sql)==TRUE){
        echo "deleted successfully";


}
}

if(isset($_POST["submit3"])){

$sql= "UPDATE college SET password='$_POST[pass]' where name='$_POST[name]'";
if($conn->query($sql)==TRUE){
    echo "updated successfully";
}

}

if(isset($_POST["submit4"])){

    $sql="SELECT * FROM college";
    if($conn->query($sql)==TRUE){
        echo "view successfully";
    }
}

$conn->close();
?>