<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cuestionario</title>
  <link rel="stylesheet" href="../webroot/css/estilos.css"/>
</head>
<body>
    <header>
        <h1>Ejercico 22 Tema 3</h1>
        <h2>Este formulario te mostrara la respuesta en la misma página</h2>
    </header>
    <h2>Cuestionario de Opinión</h2>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 15/10/2025
     * Uso: . Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()). */
    //Formulario que muestra las respuestas en la mism página
        if(isset($_REQUEST['Enviar respuestas'])){
            echo "<p><strong>1. Comida:</strong> " . htmlspecialchars($_REQUEST["comida"]) . "</p>";
            echo "<p><strong>2. Dedos:</strong> " . htmlspecialchars($_REQUEST["dedos"]) . "</p>";
            echo "<p><strong>3. Peso deseado:</strong> " . htmlspecialchars($_REQUEST["peso"]) . "</p>";
            echo "<p><strong>4. Color favorito:</strong> " . htmlspecialchars($_REQUEST["color"]) . "</p>";
        }else{
            echo '
            <form action="'echo($_SERVER['PHP_SELF'])'" method="post">
            <p>
              <label>1. ¿Cuál es tu comida favorita?</label><br>
              <input type="text" name="comida" required>
            </p>

            <p>
              <label>2. ¿Cuantos dedos tienes?</label><br>
              <input type="number" name="dedos" min="0" required>
            </p>

            <p>
              <label>3. ¿Cuanto pesas? Incluyeme dos dígitos</label><br>
              <input type="number" name="peso" min="0" step="0.01">
            </p>

            <p>
              <label>4. ¿Cuál es tu color favorito?</label><br>
              <select name="color" >
                <option value="Rojo">Rojo</option>
                <option value="Verde">Verde</option>
                <option value="Azul">Azul</option>
                <option value="Amarillo">Amarillo</option>
              </select>
            </p>

            <p>
              <label>5. Deja un comentario:</label><br>
              <textarea name="comentario" rows="4" cols="40" disabled placeholder="Esto esta bloqueado "></textarea>
            </p>

            <p>
              <input type="submit" value="Enviar respuestas">
              <input type="reset" value="Borrar">
            </p>
          </form>';
        
        }
    ?>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-17">17/10/2025</time></p>
    </footer>
</body>
</html>
