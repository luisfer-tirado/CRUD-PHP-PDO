
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ingreso</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="indexConsulta.css">
    </head>
    <body>
        <section id="contenedor">
            <table id="tabla">
                <tr>
                    <td class="titulo">Id</td>
                    <td class="titulo">Correo</td>
                    <td class="titulo">Nombre</td>
                    <td class="titulo">Apellido paterno</td>
                    <td class="titulo">Apellido materno</td>
                    <td class="titulo">Edad</td>
                    <td class="titulo">Sexo</td>
                </tr>
                <?php
                    $pdo = new PDO('mysql:host=192.168.64.2;dbname=conexion','root','');
                
                    $comando = $pdo->prepare("select * from usuario");
                
                    $comando -> execute();

                    while($resultado = $comando -> fetch(PDO::FETCH_BOTH)){
                ?>
                <tr>
                    <td><?php echo $resultado['id'];?></td>
                    <td><?php echo $resultado['correo'];?></td>
                    <td><?php echo $resultado['nombre'];?></td>
                    <td><?php echo $resultado['apPaterno'];?></td>
                    <td><?php echo $resultado['apMaterno'];?></td>
                    <td><?php echo $resultado['edad'];?></td>
                    <td><?php echo $resultado['sexo'];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </section>
    </body>
</html>