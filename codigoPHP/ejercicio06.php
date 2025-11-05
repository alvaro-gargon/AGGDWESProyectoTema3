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
        <h1>Ejercico 6 Tema 3</h1>
    </header>
    <main>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 09/10/2025
     * Uso: Suma de fechas */
        date_default_timezone_set("Europe/Madrid");
        $fecha_actual = new DateTime("now",new DateTimeZone('Europe/Madrid'));
        echo ("Fecha actual: ".$fecha_actual->format("N-m-Y H:i:s"));
        echo("<br>Con modify + 60 days: ".$fecha_actual->add(new DateInterval('P60D'))->format("N-m-Y H:i:s"));
        $fecha_actual->modify('+30 hours');
        echo ("<br>Y le sumamos otras 30 horas: ".$fecha_actual->format("N-m-Y H:i:s"));
    ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-03">03/10/2025</time></p>
    </footer>
</body>
</html>
