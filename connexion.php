<?php
$host="localhost";
$user="root";
$pwd="";
$database="crud";
$conn=mysqli_connect($host,$user,$pwd,$database);
if(!$conn){
    die("connexion echouee:".mysqli_connect_error());
}
?>