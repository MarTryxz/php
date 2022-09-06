<!DOCTYPE html>
<html lang="en">
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
        <p>Numero 1: <input type="number" name="n1" id=""></p>
        <p>Numero 2: <input type="number" name="n2" id=""></p>
        <p>Numero 3: <input type="number" name="n3" id=""></p>
        <input type="submit" name="com" value="Comparar">
    </form>
    </center>
    <?php
    if ($_POST['com']=='Comparar') {
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $n3=$_POST['n3'];
        if ($n1==$n2 and $n2==$n3) {
            echo "<script>alert('Los 3 son iguales')</script>";
        }
        if (($n1!=$n2 and $n2==$n3)or($n1==$n3 and $n2!=$n3)or($n1==$n2 and $n2!=$n3)) {
            echo "<script>alert('1 es distinto')</script>";
        }
        if ($n1!=$n2 and $n1!=$n3 and $n2!=$n3) {
            echo "<script>alert('los 3 son distintos')</script>";
        }
    }
    ?>
</body>
</html>