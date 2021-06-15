<?php

$server = "localhost";
$user = "root";
$dbname = "diy";
$dbpswd = "";

$conn = new mysqli($server,$user,$dbpswd,$dbname);
if($conn->connect_error){
    die("connection failed");
// }else{
//     echo "connected.";
}

?>