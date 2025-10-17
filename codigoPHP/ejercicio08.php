<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álvaro García González</title>
    <link rel="stylesheet" href="../webroot/css/estilos.css"/>
</head>
<body>
    <header>
        <h1>Ejercico 8 Tema 3</h1>
    </header>
    <main>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 10/10/2025
     * Uso: Imprimo la direccion IP del servidor */
        

       echo("La dirección IP del servidor es: ".$_SERVER['SERVER_ADDR']);
       

    ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-03">03/10/2025</time></p>
    </footer>
</body>
</html>
