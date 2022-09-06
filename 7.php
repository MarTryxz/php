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
    </style>
</head>
<body>
    <center>
        <form action="" method="post">
            <p>Ingrese peso en Kilogramos: <input type="number" name="peso" id=""></p>
            <p>Ingrese altura en Metros: <input type="text" name="altura" id=""></p>
            <input type="submit" name="cal" value="Calcular">
        </form>
    </center>
    <?php
    if ($_POST['cal']=='Calcular') {
        $altura=$_POST['altura'];
        $alturaC=$altura*$altura;
        $peso=$_POST['peso'];
        $imc=$peso/$alturaC;
    }
    if ($imc>19 and $imc<=25) {
        echo "<script>alert('NORMAL')</script>";
    }
    if ($imc>25 and $imc<=30) {
        echo "<script>alert('SOBREPESO')</script>";
    }
    if ($imc>30) {
        echo "<script>alert('OBESIDAD')</script>";
    }
    ?>
</body>
</html>