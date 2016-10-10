<html>
  <head>
    <title>Exercici 05</title>
  </head>
  <body>
     <h1> Hotel (RESULTADO) </h1>
     <p>Escriba el nombre de los ocupantes</p>
    <?php

         $habitaciones = $_POST['habitaciones'];

            for ($i=1; $i<=$habitaciones; $i++) {
               if(!empty($_POST['valor'][$i])){
                  echo "<p>La habitación $i está ocupada por ".$_POST['valor'][$i]."</p>";
               }
            }

            echo "<p><a class='btn' href='exercici05.php'>Volver al formulario inicial</a></p>";
   ?>


  </body>
</html>
