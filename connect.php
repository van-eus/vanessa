<?php
$dbhost="localhost";
$dbUser="root";
$password="";
$dbName="phpCrud";

$conn=mysqli_connect($dbhost, $dbUser,$password,$dbName);
if (!$conn){
    die("Connection Failed ");
}else{
    echo"Connection id sucessfuly done!!";
}
?>