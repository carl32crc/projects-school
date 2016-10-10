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
		<h1>Generador de Selects 1</h1>

<?php

$selects = $_POST['select'];
$valor = $_POST['valor'];
$cantidad_selects = count($selects);

echo "<table>";
for ($contador = 1; $contador <= $cantidad_selects ; $contador++) {
   echo "<tr><td>Número</td><td>Control &lt;select></td></tr><tr>
               <td>$contador</td>
               <td>
               <select>";
      for ($i=1; $i <= $_POST['cantidad_opciones'] ; $i++) {
         echo "<option value='".$valor[$contador][$i]."'>".$valor[$contador][$i]."</option>";
      }
      echo "</select></td></tr>";
}
echo "</table>";



?>
<p><a class='btn' href='exercici02.php'>Volver a empezar</a></p>
	</section>
</div>
</head>
</html>
