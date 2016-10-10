<html>
  <head>
    <title>Exercici 04</title>
    <style type="text/css">
th,td {
  border: 1px solid #000;
  padding: 30px;
}
    </style>
  </head>
  <body>
   <table border="1">
      <form action="resultado_casillas.php" method="POST">
    <?php

         $filas = $_POST['filas'];
         $columnas = $_POST['columnas'];
         $contador = 0;
         echo "<tr><th></th>";
         for ($numhor=1; $numhor<=$columnas; $numhor++) {
               echo "<th>$numhor</th>";
         }
         echo "</tr>";
         for ($i=1; $i<=$filas; $i++) {
               echo "<tr>";
               echo "<td>$i</td>";
                  for ($c=1; $c<=$columnas; $c++) {
                     $contador++;
                     echo "<td><input type='checkbox' name='valor[$contador]' value='on'></td>";
                  }
               echo "</tr>";
            }
         echo "<input type='hidden' name='filas' value='$filas'>";
         echo "<input type='hidden' name='columnas' value='$columnas'>";
   ?>
   </table>
   <input type='submit'>
  </form>
  </body>
</html>
