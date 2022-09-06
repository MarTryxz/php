<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martin Romo</title>
    <style>
        body{
            background-color: #727272;
        }
        table, tr, td{
            border: 5px solid black;
        }
    </style>
</head>
<body>
    <center>
    <form action="" method="post">
        <table>
            <tr>
                <td><p>Ingrese los minutos: <input type="number" name="sec" id=""></p></td>
                <td><input type="submit" name="env" value="Cambiar"></td>
            </tr>
        </table>
    </form>
<?php
if ($_POST['env']=='Cambiar') {
    $dias=0;
    $horas=0;
    $min = $_POST['sec'];
    while ($min>=60) {
        $horas=$horas+1;
        $min=$min-60;
    }
    while ($horas >= 24) {
        $dias=$dias+1;
        $horas=$horas-24;
    }
    echo "dias: ".$dias." horas: ".$horas." Minutos: ".$min;
}
?>
</center>
</body>
</html>