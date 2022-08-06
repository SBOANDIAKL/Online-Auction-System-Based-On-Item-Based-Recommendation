<?php
$host="localhost";
$user="root";
$password="";
$dbname="oas";
$conn=mysqli_connect($host,$user,$password,$dbname);
if(!$conn)
{
    die("Could not connect: ".mysqli_connect_error());
}
// else{
//     echo '<script>alert("conn established");</script>';
// }
?>