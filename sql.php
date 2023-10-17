<?php
$servername="localhost";
$username="root";
$password="";

$conn = mysqli_connect($servername,$username,$password);
if(!$conn)
{
echo 'Sorry failed to connect';
}
else
{
$sql='CREATE DATABASE dbNimra1';
mysqli_query($conn,$sql);    
echo 'Connection is successful';
}
?>
