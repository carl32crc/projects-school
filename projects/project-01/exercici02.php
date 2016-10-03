<html>
<head> <title>Ejemplo 2 </title></head>
<body>
 <h1> Ejemplo de PHP </h1>

<?php
 /* Asignando una cadena. */
 $str = "Esto es una cadena";

 /* Añadiendo a la cadena. */
 $str = $str . " con algo más de texto";

 /* Otra forma de añadir, incluye un carácter de nueva línea  */
 $str .= " Y un carácter de nueva línea al final.\n";
 print "$str <br>\n";

 /* Esta cadena terminará siendo '<p>Número: 9</p>' */
 $num = 9;
 $str = "<p>Número: $num</p>";
 print "$str <br>\n";

 /* Esta será '<p>Número: $num</p>' */
 $num = 9;
 $str = '<p>Número: $num</p>';
 print "$str <br>\n";

 /* Obtener el primer carácter de una cadena  como una vector*/
$str = 'Esto es una prueba.';
 $first = $str[0];
 print "$str 0->$first <br>\n";

 /* Obtener el último carácter de una cadena. */
 $str = 'Esto es aún una prueba.';
 $last = $str[strlen($str)-1];
 print "$str last->$last <br>\n";
 ?>

</body>
</html>
