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
        
    }
    // Configuración de la conexión
$servername = "localhost";
$username = "root"; // Cambia a tu usuario de base de datos
$password = ""; // Cambia a tu contraseña de base de datos
$dbname = "theusacblog";
    // Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "theusacblog");

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comentario = $_POST['comentario'];
    $usuario = $_SESSION['usuario']; // Asumiendo que el usuario está en la sesión

    // Inserta el comentario en la base de datos
    $query = "INSERT INTO publicaciones (nombre, usuario, comentario) VALUES ('Anonimo', '$usuario', '$comentario')";
    mysqli_query($conexion, $query);

    // Redirige al usuario a la misma página para evitar reenvíos al refrescar
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

// Obtén los comentarios de la base de datos para mostrarlos
$resultado = mysqli_query($conexion, "SELECT * FROM publicaciones ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Blog del Cudep</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/publicaciones.css">
</head>
<body>
    <header>
        <div class="content">
            <div class="menu container-menu">
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
    <div class="container-public">
    <div class="input-section">
        <form method="POST" action="">
            <input type="text" name="comentario" placeholder="Escribe lo que desees" required>
            <button type="submit">PUBLICAR</button>
        </form>
    </div>

    <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
        <div class="post">
            <p><?php echo htmlspecialchars($fila['comentario']); ?></p>
        </div>
    <?php endwhile; ?>

</div>
</body>
</html>