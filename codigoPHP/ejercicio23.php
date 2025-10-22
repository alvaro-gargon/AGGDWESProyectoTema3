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
        <h2>Este formulario te mostrara la respuesta en la misma página, te mostrare los mensajes de error</h2>
    </header>
    <h2>Cuestionario de Opinión</h2>
    <?php
    /*
     * @author: Alvaro Garcia Gonzalez
     * @since: 20/10/2025
     * Uso:Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma 
     * página las preguntas y las respuestas recogidas; 
     * en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
     */
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
        //validacion de que comida es correcto y no esta vacio (a mano)
        /*if(empty($_REQUEST['comida']) || is_numeric($_REQUEST['comida'])){
            $entradaOK=false;
        }*/
        
        //Valido cada campo del formulario. Recojo los errores o las respuestas si es correcto
        //Si algun valor es null, el formulario no se recogera y se volvera a mostrar
        if(isset($_REQUEST['enviar'])){
            $aErrores['comida']=validacionFormularios::comprobarAlfabetico($_REQUEST['comida'],100,1,1);
            $aErrores['dedos']=validacionFormularios::comprobarEntero($_REQUEST['dedos'],100,1,0);    
            $aErrores['peso']=validacionFormularios::comprobarFloat($_REQUEST['peso'],100,1,0);   
            foreach ($aErrores as $clave => $valor){
                if($valor!=null){
                    $entradaOK=false;
                }else{
                    $aRespuestas[$clave]=$_REQUEST["$clave"];
                }
            }
        }
        
        if(isset($_REQUEST['enviar']) && $entradaOK==true){
            //codigo que se ejecuta cuando envias el formulario
            foreach ($aRespuestas as $clave =>$valor){
                echo('<h2>'.$clave.':'.$valor.'</h2>');
            }
        }else{
            //codigo que se ejecuta antes de enviar el formulario
            ?>
            
            
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p>
          <label>1. ¿Cuál es tu comida favorita?</label><br>
          <input class="obligatorio" type="text" name="comida" placeholder="Rugido de tripas ...">
          <p class="error"><?php echo($aErrores['comida'])?></p>
        </p>

        <p>
          <label>2. ¿Cuantos dedos tienes?</label><br>
          <input type="number" name="dedos" min="0">
          <p class="error"><?php echo($aErrores['dedos'])?></p>
        </p>

        <p>
          <label>3. ¿Cuanto pesas? Incluyeme dos dígitos</label><br>
          <input type="number" name="peso" min="0" step="0.01">
          <p class="error"><?php echo($aErrores['peso'])?></p>
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
    </form>;
        <?php
        }
        ?>

    <footer>
        <p><a href="../indexProyectoTema3.php">Álvaro García González</a></p>
        <p>Última actualización <time datetime="2025-10-22">22/10/2025</time></p>
    </footer>
</body>
</html>