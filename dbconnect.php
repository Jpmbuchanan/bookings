<?php

$servername ="localhost";
$username ="jpmbuchanan";
$password="";
$dbname ="c9";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}

?>