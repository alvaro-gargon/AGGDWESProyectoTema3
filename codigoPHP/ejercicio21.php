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
        <h1>Ejercico 21 Tema 3</h1>
    </header>
    <h2>Cuestionario de Opinión</h2>

    <form action="tratamiento.php" method="post">
      <p>
        <label>1. ¿Cuál es tu nombre?</label><br>
        <input type="text" name="nombre" required>
      </p>

      <p>
        <label>2. ¿Qué edad tienes?</label><br>
        <input type="number" name="edad" min="0" required>
      </p>
        
      <p>
        <label>3. ¿Cuanto dinero te gustaría tener? Incluyeme los centimos</label><br>
        <input type="number" name="dinero" min="0" step="0.01">
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
        <label>5. ¿Qué tipo de música prefieres?</label><br>
        <input type="radio" name="musica" value="Pop" required> Pop<br>
        <input type="radio" name="musica" value="Rock"> Rock<br>
        <input type="radio" name="musica" value="Clásica"> Clásica<br>
        <input type="radio" name="musica" value="Reguetón"> Reguetón
      </p>

      <p>
        <label>6. ¿Qué aficiones tienes?</label><br>
        <input type="checkbox" name="aficiones[]" value="Deporte"> Deporte<br>
        <input type="checkbox" name="aficiones[]" value="Lectura"> Lectura<br>
        <input type="checkbox" name="aficiones[]" value="Viajar"> Viajar<br>
        <input type="checkbox" name="aficiones[]" value="Cine"> Cine
      </p>

      <p>
        <label>7. Deja un comentario:</label><br>
        <textarea name="comentario" rows="4" cols="40" disabled placeholder="Esto esta bloqueado "></textarea>
      </p>

      <p>
        <input type="submit" value="Enviar respuestas">
        <input type="reset" value="Borrar">
      </p>
    </form>
    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-17">17/10/2025</time></p>
    </footer>
</body>
</html>
