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
<form action="formulario_generado.php" method="POST">
<?php

$cantidad = $_POST['numero'];

	for ($contador = 1; $contador <= $cantidad ; $contador++) {
		echo "
		<table>
						<tr>
						<td rowspan='2'> $contador </td>
						<td>Texto:</td>
						<td><input type='text' name='texto[$contador]'></td>
						</tr>

						<tr>
						<td>Tipo de control:</td>
						<td>	<input type='radio' name='texto_casilla[$contador]' value='texto'>Texto</br>
								<input type='radio' name='texto_casilla[$contador]' value='casilla'>Casilla de Verificación
						</td>
						</tr>

		</table>
				</tr>";
	}




?>
 <input type='submit'>
</form>
<p><a class='btn' href='exercici01.php'>Volver a empezar</a></p>
	</section>
</div>
</head>
</html>
