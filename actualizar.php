<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    $pdo = new PDO('mysql:host=192.168.64.2;dbname=conexion','root','');
    $comando = $pdo -> prepare("update usuario set correo = :correo,nombre = :nombre, apPaterno = :apPaterno, apMaterno = :apMaterno, edad = :edad, sexo = :sexo where correo = :correo");
    
    $correo = $_POST['CORREO'];
    $nombre = $_POST['NOMBRE'];
    $apPaterno = $_POST['APPATERNO'];
    $apMaterno = $_POST['APMATERNO'];
    $edad = $_POST['EDAD'];
    $sexo = $_POST['SEXO'];

    $comando -> bindParam(':correo',$correo);
    $comando -> bindParam(':nombre',$nombre);
    $comando -> bindParam(':apPaterno',$apPaterno);
    $comando -> bindParam(':apMaterno',$apMaterno);
    $comando -> bindParam(':edad',$edad);
    $comando -> bindParam(':sexo',$sexo);

    $comando->execute();
?>