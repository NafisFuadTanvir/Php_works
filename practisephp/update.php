<?php

include("connection.php");

$sql="UPDATE college SET password='$_POST[pass]' WHERE name='$_POST[name]'";

$sql1="UPDATE college SET name='$_POST[name]' WHERE id='$_POST[id]'";

if($conn->query($sql) || $conn->query($sql1)==TRUE){

    echo "update successfully";
}

else{
    echo "some problem occured";
}

$conn->close();

?>