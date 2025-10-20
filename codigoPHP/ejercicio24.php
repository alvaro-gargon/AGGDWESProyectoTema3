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
        <h1>Ejercico 24 Tema 3</h1>
        <h2>Este formulario te mostrara la respuesta en la misma página, pero si lo escribes mal te vuelvo a poner lo que tienes bien</h2>
    </header>
    <h2>Cuestionario de Opinión</h2>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 20/10/2025
     * Uso: Formulario que se muestra en la misma página y te da error si envias algo mal */
    //Formulario que muestra las respuestas en la mism página
        $entradaOK=true;
        $aRespuestas= [
            'comida_favorita',
            'imaginacion',
            'numero_dedos',
            'peso',
            'color'
        ];
        if(empty($_REQUEST['comida']) || is_numeric($_REQUEST['comida'])){
            
            $entradaOK=false;
        }
        if(empty($_REQUEST['imaginacion']) || is_numeric($_REQUEST['comida'])){
            
            $entradaOK=false;
        }
        
        if(isset($_REQUEST['enviar']) && $entradaOK){
            //codigo que se ejecuta cuando envias el formulario
            echo "<p><strong>1. Comida favorita:</strong> " . htmlspecialchars($_REQUEST["comida"]) . "</p>";
            echo "<p><strong>2. Imaginacion:</strong> " . htmlspecialchars($_REQUEST["imaginacion"]) . "</p>";
            echo "<p><strong>3. Numero de dedos:</strong> " . htmlspecialchars($_REQUEST["dedos"]) . "</p>";
            echo "<p><strong>4. Peso deseado:</strong> " . htmlspecialchars($_REQUEST["peso"]) . "</p>";
            echo "<p><strong>5. Color favorito:</strong> " . htmlspecialchars($_REQUEST["color"]) . "</p>";
        }else{
            //codigo que se ejecuta antes de enviar el formulario
            echo '
    <form action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post">
        <p>
          <label>1. ¿Cuál es tu comida favorita?</label><br>
          <input class="obligatorio" type="text" name="comida" placeholder="Rugido de tripas ...">
        </p>
        
        <p>
          <label>2. Escribeme lo primero que se te ocurra</label><br>
          <input  type="text" id="imaginacion" name="imaginacion" placeholder="Tu mente esta llena de ...">
        </p>

        <p>
          <label>3. ¿Cuantos dedos tienes?</label><br>
          <input type="number" name="dedos" min="0">
        </p>

        <p>
          <label>4. ¿Cuanto pesas? Incluyeme dos dígitos</label><br>
          <input type="number" name="peso" min="0" step="0.01">
        </p>

        <p>
          <label>5. ¿Cuál es tu color favorito?</label><br>
          <select name="color" >
            <option value="Rojo">Rojo</option>
            <option value="Verde">Verde</option>
            <option value="Azul">Azul</option>
            <option value="Amarillo">Amarillo</option>
          </select>
        </p>

        <p>
          <label>6. Deja un comentario:</label><br>
          <textarea name="comentario" rows="4" cols="40" disabled placeholder="Esto esta bloqueado "></textarea>
        </p>

        <p>
          <input type="submit" name="enviar" value="Enviar respuestas">
          
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