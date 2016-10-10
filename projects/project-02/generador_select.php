<html>
<head>
<title>Exercici 01</title>
<style>
th,td {
  border: 1px solid #000;
}
</style>

</head>
<body>
		<h1>Generador de Formularios 1</h1>
      <p>Los valores recibidos son los siguientes:</p>
      <form action="selects_generados.php" method="POST">
<?php
$selects = $_POST['selects'];
$opciones = $_POST['opciones'];


	for ($contador = 1; $contador <= $selects ; $contador++) {
      echo "&lt;select> nº$contador";

      echo "<table>";
      echo "<input type='hidden' name='select[$contador]'>";
      echo "<tr><td>Opción</td><td>Texto</td></tr>";
         for ($i=1; $i <= $opciones ; $i++) {
            echo "<tr>
                        <td>$i</td>
                        <td><input type='text' name='valor[$contador][$i]'></td>
                        </tr>";
         }

         echo "</table>";
	}

   echo "<input type='hidden' name='cantidad_opciones' value='$opciones' >";
?>
 <input type='submit'>
</form>
<p><a class='btn' href='exercici02.php'>Volver a empezar</a></p>
	</section>
</div>
</head>
</html>
