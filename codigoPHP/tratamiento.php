<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados del Cuestionario</title>
  <link rel="stylesheet" href="../webroot/css/estilos.css"/>
</head>
<body>
    <header>
        <h2>Tratamiento del ejercicio21.php</h2>
    </header>
  

  <?php
  /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 15/10/2025
     * Uso: Formulario recibido . */
  // htmlspecialchars sirve para que convertir caracteres especiales como 
      echo "<p><strong>1. Nombre:</strong> " . htmlspecialchars($_REQUEST["nombre"]) . "</p>";
      echo "<p><strong>2. Edad:</strong> " . htmlspecialchars($_REQUEST["edad"]) . "</p>";
      echo "<p><strong>4. Dinero deseado:</strong> " . htmlspecialchars($_REQUEST["dinero"]) . "</p>";
      echo "<p><strong>5. Color favorito:</strong> " . htmlspecialchars($_REQUEST["color"]) . "</p>";
      echo "<p><strong>6. Tipo de música:</strong> " . htmlspecialchars($_REQUEST["musica"]) . "</p>";

      echo "<p><strong>7. Aficiones:</strong><br>";
      if (!empty($_REQUEST["aficiones"])) {
        foreach ($_REQUEST["aficiones"] as $aficion) {
          echo "- " . htmlspecialchars($aficion) . "<br>";
        }
      } else {
        echo "No seleccionó ninguna afición.<br>";
      }
      echo "</p>";
  ?>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-17">17/10/2025</time></p>
    </footer>
</body>
</html>