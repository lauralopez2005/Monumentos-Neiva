<?php
$servername = "localhost";
$username = "id21083566_equipomonumentos";
$password="Miperrito#1";
$bdname ="id21083566_monumentosneivas";

$conn = new mysqli($servername, $username, $password, $bdname);

if ($conn->connect_error){
    die("conexion fallida ". $conn->connect_error);
}

$nombre= $_POST['nombre'];
$celular=$_POST['celular'];

$sql = "INSERT INTO suscripciones(
    nombre, 
    celular
)

VALUES(
    '$nombre',
    '$celular'
)";

if ($conn-> query($sql)){
    echo "registro exitoso";
} else{
    echo "error al registrar " .$conn->error;
}
?>