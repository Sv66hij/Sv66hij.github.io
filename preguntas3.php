<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="preguntas.css">
    <title>Formulario de Opciones</title>
</head>
<body>
<center>
    <h1>Tenemos unas preguntas para ti</h1>
    <br></br><br></br><br></br><br></br><br></br>
    <h2>¿Qué tipo de transporte usas para llegar a la escuela?</h2>
    <form action="preguntas2.php" method="POST">
        <div class="custom-radio-group">
            <label class="custom-radio-container">
              <input type="radio" name="transporte" value="TransportePublico" required />
              <span class="custom-radio-checkmark"></span>
              Transporte público
            </label>
            <label class="custom-radio-container">
              <input type="radio" name="transporte" value="TransportePrivado" />
              <span class="custom-radio-checkmark"></span>
              Transporte privado
            </label>
            <label class="custom-radio-container">
              <input type="radio" name="transporte" value="Caminando" />
              <span class="custom-radio-checkmark"></span>
              Caminando
            </label>
            <label class="custom-radio-container">
                <input type="radio" name="transporte" value="Otro" />
                <span class="custom-radio-checkmark"></span>
              Otro
              </label>
          </div>
          <br></br><br></br><br>
          <h2>¿Cuánto dinero gastas al día para ir y regresar de la escuela?</h2>
        <div class="custom-radio-group">
            <label class="custom-radio-container">
              <input type="radio" name="gasto" value="0-20" required />
              <span class="custom-radio-checkmark"></span>
              0-20
            </label>
            <label class="custom-radio-container">
              <input type="radio" name="gasto" value="21-40" />
              <span class="custom-radio-checkmark"></span>
              21-40
            </label>
            <label class="custom-radio-container">
              <input type="radio" name="gasto" value="41-30" />
              <span class="custom-radio-checkmark"></span>
              41-60
            </label>
            <label class="custom-radio-container">
                <input type="radio" name="gasto" value="Otro" />
                <span class="custom-radio-checkmark"></span>
              Otro
              </label>
          </div>
          <br></br><br></br><br>
          <h2>¿Cuánto tiempo sueles demorar en llegar de tu casa a la escuela?</h2>
        <div class="custom-radio-group">
            <label class="custom-radio-container">
              <input type="radio" name="tiempo" value="10-30" required />
              <span class="custom-radio-checkmark"></span>
              10-30 minutos
            </label>
            <label class="custom-radio-container">
              <input type="radio" name="tiempo" value="31-50" />
              <span class="custom-radio-checkmark"></span>
              31-50 minutos
            </label>
            <label class="custom-radio-container">
              <input type="radio" name="tiempo" value="51-60" />
              <span class="custom-radio-checkmark"></span>
              51-60 minutos
            </label>
            <label class="custom-radio-container">
                <input type="radio" name="tiempo" value="Otro" />
                <span class="custom-radio-checkmark"></span>
              Otro
              </label>
          </div>
          <br></br><br></br><br>
          <button type="submit" name="registro" class="futuristic-button">Enviar</button>
    </form><br></br><br></br><br>
</center>
<?php
include("preguntas2.php");
?>
</body>
</html>    
          