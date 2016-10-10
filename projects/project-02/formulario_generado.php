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
<form action="resultado_formulario.php" method="POST">
<?php

$texto = $_POST['texto'];
$cantidad = count($texto);

echo "<table>";
	for ($contador = 1; $contador <= $cantidad ; $contador++) {
      if(!empty($_POST['texto_casilla'][$contador])){
         if($_POST['texto_casilla'][$contador]=='texto'){
            echo "	   <tr>
      						<td>$texto[$contador]:</td>
                        <td><input type='text' name='valor[$contador]'></td>
      						</tr>";
         }else{
            echo "	   <tr>
      						<td>$texto[$contador]:</td>
                        <td> <input type='radio' name='valor[$contador]' value='on'></br> </td>
      						</tr>";
         }
   }
	}
   echo "<input type='hidden' name='tamany' value='$cantidad'>";
echo "</table>";



?>
 <input type='submit'>
</form>
<p><a class='btn' href='exercici01.php'>Volver a empezar</a></p>
	</section>
</div>
</head>
</html>
