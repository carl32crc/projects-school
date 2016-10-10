<html>
  <head>
    <title>Exercici 04</title>
  </head>
  <body>
    <?php

         $filas = $_POST['filas'];
         $columnas = $_POST['columnas'];
         $contador = 0;
         $contadorOn = 0;

         for ($i=1; $i<=$filas; $i++) {
                  for ($c=1; $c<=$columnas; $c++) {
                     $contador++;
                     if(!empty($_POST['valor'][$contador])=='on'){
                        $contadorOn++;
                     }
                  }
               echo "<p>En la fila $i han marcado $contadorOn casilla/s.</p>";
               $contadorOn=0;
            }
   ?>

  </body>
</html>
