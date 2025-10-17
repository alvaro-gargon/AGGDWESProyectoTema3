<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álvaro García González</title>
    <link rel="stylesheet" href="../webroot/css/estilos.css"/>
</head>
<body>
    <?php /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 09/10/2025
     * Uso: Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,
var_dump) */ ?>
    <header>
        <h1>Ejercico 1 Tema 3</h1>
    </header>
    <main>
        
    <?php
        $iEntero=8;
        $fDecimal=1.3;
        $sCadena="Si";
        $bBoolean=true;
        /*colores con html */
        echo("<h2>Uso del echo</h2>");
        echo('La variable $iEntero es '.gettype($iEntero).' y su valor es:'.$iEntero.'<br>');
        echo('La variable $fDecimal es '.gettype($fDecimal).' y su valor es:'.$fDecimal.'<br>');
        echo('La variable $sCadena es '.gettype($sCadena).' y su valor es:'.$sCadena.'<br>');
        echo('La variable $bBoolean es'.gettype($bBoolean).' y su valor es:'.$bBoolean.'<br>');
        
        print("<h2>Uso de print</h2>");
        print('La variable $iEntero es '.gettype($iEntero).' y su valor es:'.$iEntero.'<br>');
        print('La variable $fDecimal es '.gettype($fDecimal).' y su valor es:'.$fDecimal.'<br>');
        print('La variable $sCadena es '.gettype($sCadena).' y su valor es:'.$sCadena.'<br>');
        print('La variable $bBoolean es'.gettype($bBoolean).' y su valor es:'.$bBoolean.'<br>');
        
        printf("<h2>Uso de printf</h2>");
        printf('La variable $iEntero es %s y su valor es: %d<br>', gettype($iEntero), $iEntero);
        printf('La variable $fDecimal es %s y su valor es: %f<br>', gettype($fDecimal), $fDecimal);
        printf('La variable $sCadena es %s y su valor es: %s<br>', gettype($sCadena), $sCadena);
        printf('La variable $bBoolean es %s y su valor es: %b<br>', gettype($bBoolean), $bBoolean);
        
        print_r("<h2>Uso de print_r</h2>");
        print_r('La variable $sCadena es '.gettype($iEntero).' y su valor es:'."$iEntero".'<br>');
        print_r("La variable $fDecimal es ".gettype($fDecimal)." y su valor es:".$fDecimal."<br>");
        print_r("La variable $sCadena es ".gettype($sCadena)." y su valor es:".$sCadena."<br>");
        print_r("La variable $bBoolean es".gettype($bBoolean)." y su valor es:".$bBoolean."<br>");
        
        var_dump("<h2>Uso de var_dump</h2>");
        var_dump("La variable $iEntero es ".gettype($iEntero)." y su valor es:".$iEntero."<br>");
        var_dump("La variable $fDecimal es ".gettype($fDecimal)." y su valor es:".$fDecimal."<br>");
        var_dump("La variable $sCadena es ".gettype($sCadena)." y su valor es:".$sCadena."<br>");
        var_dump("La variable $bBoolean es".gettype($bBoolean)." y su valor es:".$bBoolean."<br>");
    ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-03">03/10/2025</time></p>
    </footer>
</body>
</html>

