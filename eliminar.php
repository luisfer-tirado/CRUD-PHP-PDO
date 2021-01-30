<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    $pdo = new PDO('mysql:host=192.168.64.2;dbname=conexion','root','');
    $comando = $pdo -> prepare("delete from usuario where id = :id");
    
    $id = $_POST['ID'];

    $comando -> bindParam(':id',$id);

    $comando->execute();
?>