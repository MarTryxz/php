<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martin Romo</title>
    <style>
        body{
            background-color: black;
        }
        p{
            color: white;
        }
        h1{
            color: white;
        }
        table, tr, td{
            border: 2px solid red;
        }
    </style>
</head>
<body>
    <center>
    <h1>---REGISTRO DE CLIENTES---</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><p>Rut:</p></td>
                <td><input type="text" name="rut" id=""></td>
            </tr>
            <tr>
                <td><p>Nombre: </p></td>
                <td><input type="text" name="nombre" id=""></td>
            </tr>
            <tr>
                <td><p>Apellido: </p></td>
                <td><input type="text" name="apellido" id=""></td>
            </tr>
            <tr>
                <td><p>Fecha de Nacimiento: </p></td>
                <td><input type="date" name="fnac" id=""></td>
            </tr>
            <tr>
                <td> <p>Ingrese su Sexo: </p></td>
                <td><select name="sexo" id="">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select></td>
            </tr>
            <tr>
                <td><p>Ingrese su region: </p></td>
                <td><select name="region" id="">
                <option value="I Region">I Region</option>
                <option value="II Region">II Region</option>
                <option value="III Region">III Region</option>
            </select></td>
            </tr>
            <tr>
                <td><p>Ingrese su fono: </p></td>
                <td><input type="text" name="fono" id=""></td>
            </tr>
        </table>
        <input type="submit" name="env" value="Enviar">
        </form>
    </center>
    <?php
    if ($_POST['env']=='Enviar') {
        include("funciones.php");
        $rut = $_POST['rut'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fnac = $_POST['fnac'];
        $sex = $_POST['sexo'];
        $reg = $_POST['region'];
        $fono = $_POST['fono'];
        $sql = "insert into clientes (`rut`, `nombre`, `apellido`, `fnac`, `sex`, `reg`, `fono`) values ('$rut','$nombre','$apellido','$fnac','$sex','$reg','$fono');";
        mysqli_query($cnn,$sql);
        echo "<script>alert('Se han guardado los datos')</script>";
        }
    ?>
</body>
</html>