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
        <h1>Ejercico 12 Tema 3</h1>
    </header>
    <main>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 05/11/2025
     * Uso: . Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()). */
    //Muestra del contenido de la variable $GLOBALS con print_r
    echo "<pre>";

    //Muestra del contenido de la variable $_SERVER con print_r
    echo '<h2>Mostrar $_SERVER con print_r</h2>';
    echo '<table class="globales">';
    echo '<tr><th>Variable</th><th>Valor</th></tr>';
    if (!empty($_SERVER)) {
        foreach ($_SERVER as $variable => $resultado) {
            echo "<tr>";
            echo '<td>$_SERVER[' . $variable . ']</td>';
            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
    }
    echo "</table>";

    //Muestra del contenido de la variable $_GET con print_r
    echo '<h2>Mostrar $_GET con print_r</h2>';
    echo '<table class="globales">';
    echo '<tr><th>Variable</th><th>Valor</th></tr>';
    if (!empty($_GET)) {
        foreach ($_GET as $variable => $resultado) {
            echo "<tr>";
            echo '<td>$_SERVER[' . $variable . ']</td>';
            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
    }
    echo "</table>";

    //Muestra del contenido de la variable $_POST con print_r
    echo '<h2>Mostrar $_POST con print_r</h2>';
    echo '<table class="globales">';
    echo '<tr><th>Variable</th><th>Valor</th></tr>';
    if (!empty($_POST)) {
        foreach ($_POST as $variable => $resultado) {
            echo "<tr>";
            echo '<td>$_SERVER[' . $variable . ']</td>';
            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
    }
    echo "</table>";

    //Muestra del contenido de la variable $_FILES con print_r
    echo '<h2>Mostrar $_FILES con print_r</h2>';
    echo '<table class="globales">';
    echo '<tr><th>Variable</th><th>Valor</th></tr>';
    if (!empty($_FILES)) {
        foreach ($_FILES as $variable => $resultado) {
            echo "<tr>";
            echo '<td>$_SERVER[' . $variable . ']</td>';
            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
    }
    echo "</table>";

    //Muestra del contenido de la variable $_COOKIE con print_r
    echo '<h2>Mostrar $_COOKIE con print_r</h2>';
    echo '<table class="globales">';
    echo '<tr><th>Variable</th><th>Valor</th></tr>';
    if (!empty($_COOKIE)) {
        foreach ($_COOKIE as $variable => $resultado) {
            echo "<tr>";
            echo '<td>$_SERVER[' . $variable . ']</td>';
            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
    }
    echo "</table>";

    //Muestra del contenido de la variable $_SESSION con print_r
    echo '<h2>Mostrar $_SESSION con print_r</h2>';
    echo '<table class="globales">';
    echo '<tr><th>Variable</th><th>Valor</th></tr>';
    if (!empty($_SESSION)) {
        foreach ($_SESSION as $variable => $resultado) {
            echo "<tr>";
            echo '<td>$_SERVER[' . $variable . ']</td>';
            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
    }
    echo "</table>";

    //Muestra del contenido de la variable $_REQUEST con print_r
    echo '<h2>Mostrar $_REQUEST con print_r</h2>';
    echo '<table class="globales">';
    echo '<tr><th>Variable</th><th>Valor</th></tr>';
    if (!empty($_REQUEST)) {
        foreach ($_REQUEST as $variable => $resultado) {
            echo "<tr>";
            echo '<td>$_SERVER[' . $variable . ']</td>';
            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
    }
    echo "</table>";

    //Muestra del contenido de la variable $_ENV con print_r
    echo '<h2>Mostrar $_ENV con print_r</h2>';
    echo '<table class="globales">';
    echo '<tr><th>Variable</th><th>Valor</th></tr>';
    if (!empty($_ENV)) {
        foreach ($_ENV as $variable => $resultado) {
            echo "<tr>";
            echo '<td>$_SERVER[' . $variable . ']</td>';
            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
    }
    echo "</table>";

    
    ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-11-05">15/10/2025</time></p>
    </footer>
</body>
</html>