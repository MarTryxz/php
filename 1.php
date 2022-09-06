<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romo</title>
    <style>
        body{
            background-color: black;
        }
        label{
            color: white;
        }
        h1{
            color: white;
        }
        p{
            color: white;
        }
    </style>
</head>
<body>
    <center>
    <h1>¿Que desea hacer?</h1>
    <form action="funt.php" method="post">
    <p><input type="radio" name="letra" id="" value="triangulo" checked>Area del triangulo</p>
    <p><input type="radio" name="letra" id="" value="circulo">Area del circulo</p>
    <p><input type="radio" name="letra" id="" value="rectangulo">Area del rectangulo</p>
    <p><input type="radio" name="letra" id="" value="circulo_p">perimetro del circulo</p>
    <br>
    <p>Radio <input type="number" name="radio" id="radio"></p>
    <p>Lado <input type="number" name="lado" id="lado"></p>
    <p>Segundo lado <input type="number" name="lado2" id="lado2"></p>
    <p>Base <input type="number" name="base" id="base"></p>
    <p>Altura <input type="number" name="altura" id="altura"></p>
    <input type="submit" value="Enviar">
    </form>
<?php
session_start();
if(isset($_SESSION['re'])){
    echo '<p>El resultado es: '.$_SESSION['re'];'</p>';
    unset($_SESSION['re']);
}
?>
</center>
</body>
</html>