<?php

$servername="localhost";
$username="root";
$password="";
$dbname="practise";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn==true){

    echo "connection istablished";
}






?>