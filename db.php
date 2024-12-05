<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="crud";

$connection = new mysqli($servername, $username, $password);



$connection->select_db($dbname);


?>
