<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456789";
$dbname = "user";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("No hay conexion" .mysqli_connect_error());
}
?>