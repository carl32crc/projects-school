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
<?php
$valor = $_POST['valor'];
$cantidad = $_POST['tamany'];

echo "<table>";
	for ($contador = 1; $contador <= $cantidad ; $contador++) {
      if(!empty($valor[$contador])){
         if($_POST['valor'][$contador]=='on'){
            echo "<p>El campo $contador del formulario vale $valor[$contador]</p>";
         }else{
            echo "<p>El campo $contador del formulario vale $valor[$contador]</p>";
         }
      }else{
            echo "<p>El campo $contador del formulario no le has puesto valor</p>";
      }
	}
echo "</table>";

?>
<p><a class='btn' href='exercici01.php'>Volver a empezar</a></p>
	</section>
</div>
</head>
</html>
