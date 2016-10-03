<html>
<head> <title>Ejemplo 6</title></head>
<body>
 <h1> Ejemplo de PHP </h1>

<?php

#Definimos la función con parametros por referencia 
function suma1 (&$a, &$b)
{
  $c=$a+$b;
  return $c;
}

#Definimos la función con parametros por valor
function suma2 (&$a, &$b)
{
  $c=$a+$b;
  return $c;
}

$a=2; $b=3; $suma;
#Llamamos la función 1 por referencia (no puede ser de otra forma) 
print $suma=suma1($a,$b);

#Llamamos la función 2 por referencia
print $suma=suma2($a,$b);

#Llamamos la función 2 por valor
print $suma=suma2($a,$b);

?>

</body>
</html>
