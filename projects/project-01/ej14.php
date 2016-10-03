<html>
<head> <title>Exercici 7</title>
<style type="text/css">
	.prueba{
		float: left;
		padding: 20px;
	}
	h2{
		clear: both;
	}

</style>
</head>
	<div class='form-wrap'>
		<section class='form-box'>
<?php
$cantidad = $_POST['cantidad'];
$ancho = $_POST['ancho'];
$alto = $_POST['alto'];

for ($c = 0; $c < $cantidad; $c++){
	print "<div class='prueba'>";
	for ($al = 0; $al < $alto; $al++){
		for ($an = 0; $an < $ancho; $an++){
			print '*';
		}
		print "</br>";
	}
		print "</div>";
}

 print "<h2>Cantidad: $cantidad </h2>\n";
 print "<h2>Ancho: $ancho </h2>\n";
 print "<h2>Alto: $alto </h2>\n";

?>

</section>
</div>
</html>