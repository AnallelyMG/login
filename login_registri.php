<?php
include("conexion.php");

$nombre = $_POST['usuario'];
$password = $_POST['password'];

if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '$nombre' and password ='$password'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
        echo "<script> alert('Bienvenido $nombre'); window.location='inicio.html' </script>";
    } else 
    {
        echo "<script> alert('usuario no exixte'); window.location='login.html' </script>";
    }

}
if(isset($_POST["btnregistrar"]))
{
    $sqlgrabar = "INSERT INTO login (usuario,password) values ('$nombre', '$password')";
    
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('usuario registrad: $nombre'); window.location='login.html' </script>";
    }else 
    {
    }
    
    

}

?>