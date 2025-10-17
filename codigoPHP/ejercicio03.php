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
        <h1>Ejercico 3 Tema 3</h1>
    </header>
    <main>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 09/10/2025
     * Uso: formateo de fecha en español */
    
        date_default_timezone_set("Europe/Madrid");
        $datetime = new DateTime();
        echo $datetime->format("l-F-Y H:i:s"); //format no modifica la cadena original
        switch ($datetime->format("l")) {
            case "Monday":
                
                break;
            case "Tuesday":

                break;
            case "Wednesday":

                break;
            case "Thursday":

                break;
            case "Friday":

                break;
            case "Saturday":

                break;
            case "Sunday":

                break;
            default:
                break;
        }
        /*$fmt = datefmt_create(
            'es-ES',
            IntlDateFormatter::FULL,
            IntlDateFormatter::FULL,
            'Europe/Madrid',
            IntlDateFormatter::GREGORIAN
        );*/
        echo 'Formateo en español? '. datefmt_format($fmt, 0);
    ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-03">03/10/2025</time></p>
    </footer>
</body>
</html>