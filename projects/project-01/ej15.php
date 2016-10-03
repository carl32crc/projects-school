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
 <h1> Hombres y mujeres (RESULTADO 1) </h1>

<?php
$tamany = $_POST['tamany'];

print "<form action='ej16.php' method='post'>";
for ($c = 1; $c <= $tamany; $c++){
	print  "$c <input type='text' name='name$c'>
	Hombre <input type='radio' name='gender$c' value='home$c'>
	Mujer  <input type='radio' name='gender$c' value='dona$c'></br>";
}
print "<input type='hidden' name='tamany' value='$tamany'>";
print "<input class='btn' type='submit'>";
print "</form>";

print "<a class='btn' href='exercici08.php'>Volver al formulario</a>";

?>
	</section>
</div>
</head>
</html>