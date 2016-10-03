<html>
<head> <title>Ejemplo 5_1</title></head>
<body>
 <h1> Ejemplo de PHP </h1>
<?php
$distancia = $_POST['distancia'];
$tiempo = $_POST['tiempo'];
$kmhora = 0;
$msegundo = 0;

if($_POST['unidadDistancia']==='kilometros'  && $_POST['unidadTiempo']==='horas'){
	$kmhora = $distancia/$tiempo;
	$msegundo = ($distancia*1000)/(($tiempo*60)*60);
	$msegundo = number_format($msegundo,1,".",",");
	$kmhora = number_format($kmhora,1,".",",");
	print "Si ha recorrido $distancia m en $tiempo s su velocidad media ha sido $kmhora km/h ($msegundo m/s).</br>";
}else if($_POST['unidadDistancia']==='metros'  && $_POST['unidadTiempo']==='segundos'){
	$msegundo = $distancia/$tiempo;
	$msegundo = number_format($msegundo,1,".",",");
	$kmhora = ($distancia/1000)/(($tiempo/60)/60);
	$kmhora = number_format($kmhora,1,".",",");
	print "Si ha recorrido $distancia m en $tiempo s su velocidad media ha sido $msegundo m/s ($kmhora km/h).</br>";
}else{
	print "Te falta introducir un dato.</br>";
}

print "<a href='exercici09.php'>Volver al formulario</a>";

?>
</body>
</html>