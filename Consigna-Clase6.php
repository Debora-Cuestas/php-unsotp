<?php 

if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
}

if (isset($_POST["apellido"])) {
    $apellido = $_POST["apellido"];
}

if (isset($_POST["edad"])) {
    $edad = $_POST["edad"];
}

if (isset($_POST["comision"])) {
    $comision = $_POST["comision"];
}

if (isset($_POST["password"])) {
    $password = $_POST["password"];
    echo "Welcome: $nombre $apellido, your password is $password<br>";
    echo "You are $edad years old, your assignment is $comision<br>";
}


 ?>