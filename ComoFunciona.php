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

    <div class="faq-container">
    <div class="faq-header">
        <h2>Este blog fue creado con el objetivo de proporcionar un espacio seguro y anónimo para que cualquier persona de la comunidad de la USAC pueda expresar sus pensamientos, opiniones o denuncias. Ya sea sobre descontentos, faltas de respeto, abusos o cualquier otra situación relacionada con catedráticos, estudiantes o personal de la universidad, este sitio se presenta como un canal libre de represalias. La privacidad y el anonimato de quienes decidan compartir sus experiencias están garantizados, ya que esta página fue diseñada con medidas de seguridad para proteger a todos sus usuarios registrados. Aquí, nadie será señalado ni identificado sin su consentimiento, permitiendo una libre expresión sin temor a consecuencias negativas.

Es importante destacar que este espacio busca ser una herramienta constructiva para mejorar la convivencia en nuestra universidad, promover la justicia y generar un entorno en el que todas las voces sean escuchadas y respetadas.

 </h2>
    </div>

    <div class="faq-section">
        <h3>PREGUNTAS FRECUENTES</h3>
    </div>

    <div class="faq-item">
        <div class="faq-question">
            <span>1. ¿Cómo puedo publicar en este blog de forma anónima?</span>
            <button class="toggle-btn" onclick="toggleAnswer(1)">+</button>
        </div>
        <div class="faq-answer" id="answer-1">
            <p>Para publicar en nuestro blog de forma anónima, solo necesitas registrarte con un nombre de usuario que no te identifique directamente. Al momento de publicar, puedes elegir no incluir información personal que te vincule. Además, tu identidad está protegida por las políticas de privacidad del sitio, garantizando que nadie podrá saber quién eres a menos que lo decidas.</p>
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">
            <span>2. ¿Cómo aseguran mi anonimato en este blog?</span>
            <button class="toggle-btn" onclick="toggleAnswer(2)">+</button>
        </div>
        <div class="faq-answer" id="answer-2">
            <p>Tu anonimato está protegido por las medidas de seguridad implementadas en nuestra plataforma. No se requiere que utilices tu nombre real para registrarte ni para publicar, y toda la información personal está cifrada. Además, no compartimos ni divulgamos datos identificativos sin tu consentimiento. Nuestro objetivo es brindarte un espacio seguro donde puedas expresarte libremente sin temor a ser identificado.</p>
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">
            <span>3. ¿Puedo ser rastreado o identificado a través de mis publicaciones?</span>
            <button class="toggle-btn" onclick="toggleAnswer(3)">+</button>
        </div>
        <div class="faq-answer" id="answer-3">
            <p>No, no puedes ser rastreado ni identificado a través de tus publicaciones si sigues las pautas de anonimato del blog. Las publicaciones no contienen información personal visible, y tu identidad está protegida en todo momento. Sin embargo, te recomendamos no incluir detalles que puedan vincularte de forma indirecta, como ubicaciones exactas o situaciones específicas que solo tú puedas conocer. Así garantizarás un nivel máximo de privacidad.</p>
        </div>
    </div>

</div>

    <script src="js/comofuniona.js"></script>
</body>
</html>