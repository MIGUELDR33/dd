<?php
if(isset($_POST['btn']));
$nom=$_POST['nombre'];
$ApellidoP=$_POST['ApellidoP'];
$ApellidoM=$_POST['ApellidoM'];
$tel=$_POST['telefono'];
$email=$_POST['email'];
$pass=$_POST['pass'];
if($nom=""){
    echo"digitame tu nombre";
}
if($AP=""){
    echo"digitame tu apellido paterno";
}
if($AM=""){
    echo"digitame tu apellido materno";
}
if($tel=""){
    echo"digitame tu telefono";
}
if($email=""){
    echo"digitame tu email";
}
if($pass=""){
    echo"digitame tu contraseña";
}






