<html>
  <head>
    <title>Exercici 05</title>
  </head>
  <body>
     <h1> Hotel (FORMULARIO 3) </h1>
     <p>Escriba el nombre de los ocupantes</p>
     <form action="hotel_resultado.php" method="post">
    <?php

         $habitaciones = $_POST['habitaciones'];

            for ($i=1; $i<=$habitaciones; $i++) {
               if(!empty($_POST['valor'][$i])=='on'){
                  echo "<p>$i<input type='text' name='valor[$i]'></p>";
               }
            }
            echo "<input type='hidden' name='habitaciones' value='$habitaciones'>";
            echo "<p><input type='submit'></p>";
            echo "</form>";
            echo "<p><a class='btn' href='exercici05.php'>Volver al formulario inicial</a></p>";
            echo "<form action='hotel_casillas.php' method='post'>";
            echo "<input type='hidden' name='habitaciones' value='$habitaciones'>";
            echo "<input class='btn' type='submit' value='Volver al formulario anterior'>";
            echo "</form>";
   ?>


  </body>
</html>
