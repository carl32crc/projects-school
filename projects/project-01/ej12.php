<html>
<head> <title>Ejemplo 5_1</title></head>
<body>
 <h1> Ejemplo de PHP </h1>
<?php
$nombre = $_POST['name'];
$correo = $_POST['email'];
$beer = $_POST['beer'];
 print "<h2>Hola $nombre , ";
 print "tu email es $correo y ";
 print "te gusta la cerveza $beer </h2>\n";
?>
</body>
</html>