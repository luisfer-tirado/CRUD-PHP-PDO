<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    $pdo = new PDO('mysql:host=192.168.64.2;dbname=conexion','root','');
    $comando = $pdo -> prepare("insert into usuario (correo,nombre,apPaterno,apMaterno,edad,sexo) values (:correo,:nombre,:apPaterno,:apMaterno,:edad,:sexo)");
    
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

    echo '<script type = text/javascript>';
    echo 'window.history.back(-1)';
    echo '</script>'
?>