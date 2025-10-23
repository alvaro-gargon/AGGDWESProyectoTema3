<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álvaro García González</title>
    <link rel="stylesheet" href="../webroot/css/estilos.css"/>
    <style>
        
            .planoAsientos {
                display: flex;
                flex-direction: column;
                margin-bottom: 20px;
              }

              .fila {
                display: flex;
                margin-bottom: 5px;
              }

              .asiento {
                width: 45px;
                height: 45px;
                margin: 2px;
                border: 1px solid #ccc;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 12px;
                font-weight: bold;
                position: relative;
              }

              .libre {
                background-color:limegreen;
                color: white;
                border-color: black;
              }

              .ocupado {
                background-color: red;
                color: white;
                border-color: black;
              }

              .nombreFila {
                width: 60px;
                height: 45px;
                font-weight: 700;
                line-height: 45px;
                padding-right: 5px;
                padding-left: 10px;
                background-color: gray;
                color:white;
              }

    </style>
</head>
<body>
    <header>
        <h1>Ejercico 17 Tema 3</h1>
    </header>
    <main>
    <?php
    /* Agradecimientos a Vero Grue : https://veroniquegru.ieslossauces.es/index.html
     * @author: Alvaro Garcia Gonzalez
     * @since: 20/10/2025
     * Uso: .Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que 
     * tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. 
     * (Inicializamos el array ocupando únicamente 5 asientos) . 
     * Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.  */
                
                $filas = 20;       
                $columnas = 15;
                //inicializo el array
                //mejor empezar en 1 que en 0
                for ($i = 0; $i < $filas; $i++) {
                    $asientosTeatro[$i] = [];
                    for ($j = 0; $j < $columnas; $j++) {
                        $asientosTeatro[$i][$j] = '';
                    }
                }

                $asientosTeatro[4][6] = 'Pedro';      
                $asientosTeatro[8][0] = 'Jose';       
                $asientosTeatro[12][14] = 'Carla';     
                $asientosTeatro[19][3] = 'Maria';    
                $asientosTeatro[3][7] = 'Miguel';      

                echo "<h2>Mapa del Teatro (verdes libres y rojos ocupados)</h2>";

                // Recorrido con for para crear los divs
                echo '<div class="planoAsientos">';
                for ($i = 0; $i < $filas; $i++) {
                    echo '<div class="fila">'; // Inicio de la fila
                    $fl=$i+1;
                    echo "<div class='nombreFila'>Fila {$fl}</div>";
                    //hacerlo con un foreach
                    for ($j = 0; $j < $columnas; $j++) {
                        $fila = $i + 1;
                        $asiento = $j + 1;
                        $nombre = $asientosTeatro[$i][$j];
                        // Estado y contenido del asiento
                        if ($nombre !== '') {
                            // ocupado
                            $clase = 'ocupado';
                            $textoAsiento = $nombre;
                        } else {
                            // libre
                            $clase = 'libre';
                            $textoAsiento = 'F'.$fila.' A'.$asiento;
                        }

                        echo "<div class='asiento $clase' title='Fila {$fila}, Asiento {$asiento}'>";
                        echo $textoAsiento;
                        echo '</div>'; 
                    }
                    echo '</div>';
                }
                echo '</div>';     
    ?>
    </main>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-20">20/10/2025</time></p>
    </footer>
</body>
</html>