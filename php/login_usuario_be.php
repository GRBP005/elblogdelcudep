<?php

    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    /*$contrasena = hash('sha512', $contrasena);*/

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' and contrasena='$contrasena' ");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("location: ../index.php");
        exit;
    }else {
        echo '
            <script>
                alert("Correo Y/O Contraseña no Registrado, Por Favor verifica el correo");
                window.location = "../Registro.php";
            </script>
        ';
        exit;
    }

?>