<?php
    session_start();
    $letra = $_POST['letra'];

    $re=0;
    switch ($letra) {
        case 'circulo':
            $radio = $_POST['radio'];
            $re = ($radio ** 2) * M_PI;
            break;
        case 'rectangulo':
            $lado = $_POST['lado'];
            $lado2 = $_POST['lado2'];
            $re = $lado * $lado2;
            break;
        case 'triangulo':
            $altura=$_POST['altura'];
            $base=$_POST['base'];
            $re = ($base*$altura)/2;
            break;
        case 'circulo_p':
            $radio = $_POST['radio'];
            $re = ($radio*2)*M_PI;
            break;
    }

    $_SESSION['re']=$re;
    header("Location: 1.php");
?>