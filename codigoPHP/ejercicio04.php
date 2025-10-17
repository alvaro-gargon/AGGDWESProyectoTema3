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
        <h1>Ejercico 4 Tema 3</h1>
    </header>
    <main>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 09/10/2025
     * Uso: formateo fecha Porto */
        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Lisbon'); /* aunque el ejercicio dice Oporto, PHP identifica esa zona horaria con la de Lisboa
        y la hora es la misma. Europe/Porto (nombres siempre en ingles) no existe */
        $datetime->setTimezone($timezone);
        echo $datetime->format("d-m-Y H:i:s"); 
    ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-03">03/10/2025</time></p>
    </footer>
</body>
</html>