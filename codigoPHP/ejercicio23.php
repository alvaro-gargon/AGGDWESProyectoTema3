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
        <h1>Ejercico 23 Tema 3</h1>
        <h2>Este formulario te mostrara la respuesta en la misma página, pero escribelo bien o lo vuelves a rellenar</h2>
    </header>
    <h2>Cuestionario de Opinión</h2>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 20/10/2025
     * Uso: Formulario que se muestra en la misma página y te da error si envias algo mal */
    //Formulario que muestra las respuestas en la misma página
        require_once '../core/231018libreriaValidacion.php';
        $entradaOK=true; //variable boolean para enviar el formulario
        //array donde recojo los mensajes de error de cada campo
        $aErrores=
                [
                    'comida' =>null,
                    'dedos' =>null,
                    'peso' =>null
                    ];
        $aRespuestas=
                [
                    'comida' =>null,
                    'dedos' =>null,
                    'peso' =>null
                    ];
        //validacion de que comida es correcto y no estta vacio (a mano)
        /*if(empty($_REQUEST['comida']) || is_numeric($_REQUEST['comida'])){
            $entradaOK=false;
        }*/
        
        //Valido cada campo del formulario 
        if(isset($_REQUEST['enviar'])){
            $aErrores['comida']=validacionFormularios::comprobarAlfabetico($_REQUEST['comida'],100,1,1);
            $aErrores['dedos']=validacionFormularios::comprobarAlfabetico($_REQUEST['dedos'],100,1,1);    
            $aErrores['peso']=validacionFormularios::comprobarAlfabetico($_REQUEST['peso'],100,1,1);   
            foreach ($aErrores as $valor){
                if($valor!=null){
                    $entradaOK=false;
                }
            }
        }
        
        if($entradaOK){
            //codigo que se ejecuta cuando envias el formulario
            foreach ($aErrores as $clave =>$valor){
                echo('<h2>'.$clave.'</h2>'.':'.$valor);
            }
        }else{
            //codigo que se ejecuta antes de enviar el formulario
            echo '
    <form action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post">
        <p>
          <label>1. ¿Cuál es tu comida favorita?</label><br>
          <input class="obligatorio" type="text" name="comida" placeholder="Rugido de tripas ...">
        </p>

        <p>
          <label>2. ¿Cuantos dedos tienes?</label><br>
          <input type="number" name="dedos" min="0">
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