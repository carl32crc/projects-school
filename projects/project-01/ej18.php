<html>
<head>
<title>Exercici 10</title>
<style type="text/css">
	.casella{
		display: block;
		float: left;
		padding:20px;
	}
	section{
		background-color: blue;
	}
	img{
		width: 150px;
		height: 150px;
		padding: 10px;
		border:1px solid black;
	}
	.bot-prove{
		clear: both;
		text-decoration: none;
	}
</style>
</head>
<body>
 <h1> Tragaperras (RESULTADO) </h1>

<?php
$apuesta = $_POST['apuesta'];
$casella1 = rand(1,6);
$casella2 = rand(1,6);
$casella3 = rand(1,6);

$total=0;

if($casella1 == 1 && $casella2 == 1 && $casella3 == 1){
	$total=$apuesta*10;
}else if($casella1 == 1 && $casella2 == $casella3){
	$total=$apuesta*3;
}else if($casella2 == 1 && $casella1 == $casella3){
	$total=$apuesta*3;
}else if($casella3 == 1 && $casella2 == $casella1){
	$total=$apuesta*3;
}else if($casella2 == 1 && ($casella1 == 1 || $casella3 == 1)){
	$total=$apuesta*4;
}else if($casella1 == 1 && ($casella2 == 1 || $casella3 == 1)){
	$total=$apuesta*4;
}else if($casella1 == 1 || $casella2 == 1 || $casella3 == 1){
	$total=$apuesta;
}else  if($casella1==$casella2 && $casella1==$casella3){
	$total=$apuesta*5;
}else if($casella1==$casella2 || $casella1==$casella3){
	$total=$apuesta*2;
}else if($casella2==$casella1 || $casella2==$casella3){
	$total=$apuesta*2;
}else{
	$total;
}

print "<section>
			<div class='casella'>
				<img src='$casella1.png' alt='casella1'>
			</div>
			<div class='casella'>
				<img src='$casella2.png' alt='casella2'>
			</div>
			<div class='casella'>
				<img src='$casella3.png' alt='casella3'>
			</div>
		</section>";

print "<div class='bot-prove'>Total a retornar: $total </br><a href='exercici10.php'>Volver al formulario</a></div>";


?>
</head>
</html>