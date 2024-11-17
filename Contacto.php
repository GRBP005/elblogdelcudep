<?php

    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por Favor debes Iniciar Sesion");
                window.location = "Registro.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Blog Usac</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/contacto.css">
</head>
<body>
<header>
        <div class="content">
            <div class="menu container">
                <a href="index.php" class="logo"><img src="img/logoblog.png" style="width: 70px; height: 70px;" alt=""></a>
                <input type="checkbox" id="menu">
                <label for="menu">
                    <img src="img/2311531.png" class="menu-icono" alt="">
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="ComoFunciona.php">Como Funciona</a></li>
                        <li><a href="Contacto.php">Contacto</a></li>
                        <!--<li><a href="Perfil.php">Perfil</a></li>-->
                        <li><a href="Registro.php">Inicio Sesión / Registro</a></li>
                        <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section>
        <div>
        <h1 id="Contacto" class="centrado-h1">Contacto</h1>
        </div>
    </section>

    <div class="contact-container">
        <div class="contact-form">
            <form action="https://formsubmit.co/burgospazg@gmail.com" method="POST">
                <div class="input-group">
                    <input type="text" name="nombre" placeholder="NOMBRE" required>
                    <input type="text" name="apellido" placeholder="APELLIDO" required>
                </div>
                <div class="input-group">
                    <input type="tel" name="telefono" placeholder="TELEFONO" required>
                    <input type="email" name="correo" placeholder="CORREO ELECTRONICO" required>
                </div>
                <textarea name="mensaje" placeholder="MENSAJE" required></textarea>
                <button type="submit">ENVIAR</button>
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="http://localhost/blog/Contacto.php">
            </form>
            <a href="php/cerrar_sesion.php"><button class="cerrar_sesion">Cerrar Sesion</button></a>
        </div>
    </div>
    
</body>
</html>