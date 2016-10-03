<html>
<head>

<title>Exercici 8</title>
<style type="text/css">
.form-wrap {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
}
.form-box {
	width: 90%;
	max-width: 500px;
	margin: 50px auto;
	padding: 20px;
	background: #fff;	
	box-shadow: 0 0 5px rgba(0,0,0,.5);
	text-align: center;
}

.btn {
  display: inline-block;
  padding: 10px 12px;
  color: #fff;
  text-decoration: none;
  background:  #307a16;
  border-radius: 3px;
  cursor: pointer;
  font-family:arial;
  font-size: 12px;
  border: 0px;
  margin: 10px;
}
</style>

</head>
<body>
	<div class='form-wrap'>
		<section class='form-box'>
 <h1> Hombres y mujeres (RESULTADO 2) </h1>


<?php

$concatH = " ";
$concatM = " ";
$tamany = $_POST['tamany'];
$cont = 0;
$contM= 0;
$contH= 0;

for ($i=1; $i <= $tamany; $i++) {
	$name = 'name'.$i;
	$dona = 'dona'.$i;
	$gender = 'gender'.$i;
	if(!empty($_POST[$name]) && !empty($_POST[$gender])){
		if($_POST[$gender]===$dona){
			$concatM = $_POST[$name].$concatM;
			$concatM = ",".$concatM;
			$contM++;
		}else{
			$concatH = $_POST[$name].$concatH;
			$concatH = ",".$concatH;
			$contH++;
		}
		$cont++;
	}
}

$concatH=substr($concatH,1);
$concatM=substr($concatM,1);


print "Se han recibido $cont dato(s) completo(s) de un total de $tamany</br>";
print "$contH hombre(s): $concatH</br>";
print "$contM mujer(es): $concatM</br>";

print "<a class='btn' href='exercici08.php'>Volver al formulario inicial</a></br>";
print "<form action='ej15.php' method='post'>";
print "<input type='hidden' name='tamany' value='$tamany'>";
print "<input class='btn' type='submit' value='Volver a la tabla'>";
print "</form>";


?>

</section>
</div>
</body>
</html>