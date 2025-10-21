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
        <h1>Ejercico 15 Tema 3</h1>
    </header>
    <main>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 20/10/2025
     * Uso: . Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la
            semana. (Array asociativo con los nombres de los días de la semana). */
                $aSalarioXDia = [
                    'Lunes' => 40,
                    'Martes' => 30,
                    'Miercoles' => 60,
                    'Jueves' => 90,
                    'Viernes' => 55,
                    'Sabado' => 100,
                    'Domingo' => 0
                ];
                echo ('Dinero ganado a lo largo de la semana.<br>');
                foreach ($aSalarioXDia as $dia => $salarioDia) {
                    echo"$dia : $salarioDia €<br>";
                }
                $salarioSemanal=0;
                foreach ($aSalarioXDia as $dia => $salarioDia) {
                    // $totalHorasSemana = $salarioDia+$totalHorasSemana;
                    $salarioSemanal += $salarioDia;
                }
                echo'<br><h3>El total del salario semanal es: ' . $salarioSemanal . " €</h3><br>";
    ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-20">20/10/2025</time></p>
    </footer>
</body>
</html>