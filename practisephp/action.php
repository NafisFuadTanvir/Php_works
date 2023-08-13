<?php
include("connection.php");

$sql= "INSERT INTO college(id,name,password) VALUES ('$_POST[id]','$_POST[name]','$_POST[pass]')";

if($conn->query($sql)==TRUE){

    echo ("new data inserted");
}
else{
    echo("error");
}

$conn->close();

?>