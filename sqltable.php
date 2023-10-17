<?php
$servername="localhost";
$username="root";
$password="";
$database="dbNimra";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn)
{  
    echo 'Connection is successful'; 
$sql= "INSERT INTO `data` (`Name`, `Job`, `Dob`) VALUES ('Alexa', 'Front-End', '2023-10-17 14:16:09.000000');";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo 'Data row is created succesfully';
}
else{
    echo 'sorry there is issue in inserting data';
}

}
else if(!$conn)
{
 echo 'connection failed';
}
?>
