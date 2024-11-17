<?php

    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Blog Usac</title>
    <link rel="stylesheet" href="css/menu.css">
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
                        <li><a href="Perfil.php">Perfil</a></li>
                        <li><a href="Registro.php">Inicio Sesión / Registro</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="js/script.js"></script>
</body>
</html>