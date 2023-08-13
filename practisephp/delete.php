<?php

include("connection.php");
"<br>";
$sql= "DELETE FROM college where name= '$_POST[name]'";

$sql1="DELETE FROM college where id='$_POST[id]'";

if($conn->query($sql) && $conn->query($sql1) ==TRUE){

    echo "delete successfully";
}
else{
    echo "something bad happends";
}

$conn->close();

?>