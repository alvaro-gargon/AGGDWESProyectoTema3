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
        <h1>Ejercico 5 Tema 3</h1>
    </header>
    <main>
    <?php
        /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 09/10/2025
     * Uso: funcionamiento de timestamp */
        $timestamp = time(); //tiempo transcurrido desde el 1 de enero de 1970
        echo($timestamp);
        //tambien es util tenerla en una variable para poder hacer calculos con las fechas y horas
        $variable = date("d-m-Y H:i:s", $timestamp);
        date_default_timezone_set("Europe/Madrid");
        echo ("<br>Poner la variable no afecta al imprimir: ".$variable);
    ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-03">03/10/2025</time></p>
    </footer>
</body>
</html>
