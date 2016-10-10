<html>
  <head>
    <title>Exercici 05</title>
    <style>
      .casilla{
         float: left;
      }
      p {
         clear: both;
      }
      span{
         display: block;
         padding: 6px;
      }
    </style>
  </head>
  <body>
     <h1> Hotel (FORMULARIO 2) </h1>
     <p>Marque las habitaciones ocupadas:</p>
     <form action="hotel_ocupantes.php" method="post">
    <?php

         $habitaciones = $_POST['habitaciones'];

         if($habitaciones<=20 && $habitaciones>0){
            for ($i=1; $i<=$habitaciones; $i++) {
               echo "<div class='casilla'> <span>$i</span>";
               echo "<input type='checkbox' name='valor[$i]' value='on'></div>";
            }
         }else{
            echo "<p>Debes introducir entre 1 y 20 habitaciones</p>";
         }

         echo "<input type='hidden' name='habitaciones' value='$habitaciones'>";
   ?>
      <p><input type="submit"></p>
   </form>

   <p><a class='btn' href='exercici05.php'>Volver al formulario</a></p>

  </body>
</html>
