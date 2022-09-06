<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martin Romo</title>
</head>
<body bgcolor="#999999">
    <center>
    <form action="" method="post">
        <p>Temperatura: <input type="number" name="n1" id=""></p>
        <select name="op" id="">
            <option value="Celsius">Celsius a Fahrenheit</option>
            <option value="Fahrenheit">Fahrenheit a Celsius</option>
        </select>
        <input type="submit" name="con" value="Convertir">
    </form>
    </center>
<?php
if ($_POST['con']=='Convertir') {
    if ($_POST['op']=='Fahrenheit') {
        $n1=$_POST['n1'];
        $n2=($n1-32)*5/9;
        echo "<script>alert('$n1 °F es igual a $n2 °C')</script>";
    }
    if ($_POST['op']=='Celsius') {
        $n1=$_POST['n1'];
        $n2=($n1*9/5)+32;
        echo "<script>alert('$n1 °C es igual a $n2 °F')</script>";
    }
}
?>
</body>
</html>