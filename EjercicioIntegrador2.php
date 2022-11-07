<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ejercicios de PHP</title>
</head>
<body>
<?php

$numero[0] = "as";
$numero[1] = "2";
$numero[2] = "3";
$numero[3] = "4";
$numero[4] = "5";
$numero[5] = "6";
$numero[6] = "7";
$numero[7] = "8";
$numero[8] = "9";
$numero[9] = "sota";
$numero[10] = "caballo";
$numero[11] = "rey";

$palo[0] = "oros";
$palo[1] = "copas";
$palo[2] = "bastos";
$palo[3] = "espadas";

$numcarta = mt_rand(0,11);
$valorpalo = mt_rand(0,3);



?>
	<br />
	<TABLE BORDER  >
	<TR >
		<TH COLSPAN=2 ><h2>Saca una carta del mazo.</h2></TH>
	</TR>
	
	<TR>
		<TD align="center" COLSPAN=2> <?php print "Tu carta es el  $numero[$numcarta] de $palo[$valorpalo]<br />"; ?></TD> 
	</TR>
	<TR>
		<TD align="center" COLSPAN=2><button style="width: 200px; height: 20px;" onclick="setTimeout(function(){location.reload();}, 5);">Sacar otra carta</button></TD> 
		<!-- La funcion location.reload() refresca la página renovando el randon --> 	
	</TR>
</TABLE>

	
</body>
</html>