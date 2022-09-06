<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martin Romo</title>
    <style>
        body{
            background: black;
        }
        p{
            color: white;
        }
    </style>
</head>
<body>
    <center>
    <form action="" method="post">
        <p>Ingrese numero: <input type="number" name="n1" id=""></p>
        <input type="submit" name="en" value="Enviar">
    </form>
</center>
<?php
if ($_POST['en']=='Enviar') {
    $n1=$_POST['n1'];
    switch ($n1) {
        case 1:
            echo "<script>alert('Lunes')</script>";
            break;
        case 2:
            echo "<script>alert('Martes')</script>";
            break;
        case 3:
            echo "<script>alert('Miercoles')</script>";
            break;
        case 4:
            echo "<script>alert('Jueves')</script>";
            break;
        case 5:
            echo "<script>alert('Viernes')</script>";
            break;
        case 6:
            echo "<script>alert('Sabado')</script>";
            break;
        case 7:
            echo "<script>alert('Domingo')</script>";
            break;
    }
}
?>
</body>
</html>