<?php
$host="localhost";
$user="root";
$pass="";
$db="mushrunayasmin";

$conn = new mysqli($host, $user, $pass, $db);

if($conn -> connect_error){
    die($conn -> error );
}
else{
    //echo "<h1>Database connected</h1>";
}
 
?>