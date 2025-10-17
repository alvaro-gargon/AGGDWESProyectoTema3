<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álvaro García González</title>
    <link rel="stylesheet" href="../webroot/css/estilos.css"/>
</head>
<body>
    <header>
        <h1>Ejercico 2 Tema 3</h1>
    </header>
    <main>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 09/10/2025
     * Uso: Funcionamiento de heredoc */
        $heredoc = <<<limit
                Cadena que puedes escribir lo que quieras sin comillas
                e incustrar secuencias SQL.
                "limit" puede ser cambiado por lo que quiera 
                limit; 
        $heredoc2 = <<<patata
                Cadena que puedes escribir lo que quieras sin comillas
                e incustrar secuencias SQL.
                "patata" puede ser cambiado por lo que quiera
                patata; 
        echo ("$heredoc");
        echo ("<br>$heredoc2");
        ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-03">03/10/2025</time></p>
    </footer>
</body>
</html>
