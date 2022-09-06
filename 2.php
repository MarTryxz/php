<html>
    <head>
    <title>Martin Romo</title>
    <style>
        p{
            color:white;
        }
    </style>
    </head>
    <body bgcolor="black">
        <center>
        <form action="" method="post">
            <p>Ingrese la medida en CM <input type="number" name="n1" id=""></p>
            <input type="submit" name="com" value="analizar">
            </center>
        </form>
        <?php
        if ($_POST['com']=="analizar") {
            $pul=$_POST["n1"]/2.54;
            echo "<script>alert('La medida en pulgadas es: $pul')</script>";
        }
        ?>
    </body>
</html>