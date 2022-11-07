<?php

$entero = 2000;
echo $entero;  // print
echo "<br>";

$real = 3.14159;
echo $real;
echo "<br>";

$string = "La mejor clase del mundo";
echo $string;
echo "<br>";

$verdadero = TRUE;
$falso = falsE;
echo $verdadero;
echo $falso;
echo "<br>";
echo "<br>";

define("FOO", "VALOR de la constante");
define("ENTERO" , 25);
echo FOO;
echo ENTERO;
echo "<br>";

$suma = $entero + ENTERO; // 2025 = 2000 + 25
$entero += $suma; // 4025 $entero = $entero + $suma = 2000 + 2025 
$entero = $entero + $suma; // 6050 = 4025 + 2025
echo "Valor de suma=$suma"; // 2025
echo "<br>";

//suma
$a = 10;
$b = 5;
echo ("La suma es ". $a+$b); // 15
echo "<br>";
echo ("La resta es ". $a-$b); // 5
echo "<br>";
echo ("La multuiplicación es ". $a*$b); // 50
echo "<br>";
echo ("La división es ". $a/$b); // 2
echo "<br>";
echo ("La módulo es ". $a%$b); // 0 
echo "<br>";
echo ("La potencia es ". $a**$b); // 100000
echo "<br>";

$a += $b; // 10 + 5 $a = $a + $b = 10 + 5  = 15
echo ("El resultado es ". $a); // 15
echo "<br>";
$a -= $b;  // 15 - 5 $a = $a - $b = 15 - 5 = 10
echo ("El resultado es ". $a); // 10
echo "<br>";

$cadena = "Hola ";
$cadena .= "mundo"; // $cadena = "Hola " . "mundo"
echo $cadena;
echo "<br>";

$c = 10;
$d = 20;
if ($c > $d) { // 10 > 20 -> false
	echo "c es mayor que d";
} else { // falso
	echo "d es mayor que c";
}
echo "<br>";

// Usando el operador ===
$var1 = 1;  // integer
$var2 = 1.0;  // float

if ($var1 === $var2) { // false
	echo "Las variables contienen el mismo valor y son del mismo tipo.";
}
else { // deberia imprimir este valor
	echo "Las variables son de tipos diferentes.";
}
echo "<br>";
if ($var1 == $var2) // true
	echo "Las variables contienen el mismo valor.";
else
	echo "Las variables no son iguales.";
echo "<br>";

$i = 1;
while ($i <= 10) {  // 1 ... 10 
	echo "Con while el valor de i=" . $i;
	echo "<br>";
	$i += 1; // $i = $i + 1
	//$i++;
}

for ($i=1; $i <= 10; $i++) { 
	echo "Con for el valor de i=" . $i;
	echo "<br>";
}


$j = 0.0;
do { // Cuantas veces se ejecuta 1 sola vez
	echo "Valor de j=" . $j;
	echo "<br>";
} while ($j>0);


// factorial 5! = 5 * 4 * 3 * 2 * 1 = 120
$n = 5; // factorial 10
$factorial = 1;
while ($n>0) {
	$factorial *= $n; // $factorial = $factorial * 10 .. 1
	$n--;             // $factorial = 10 * 9 * 8 * ... 1
}
echo "El valor de factorial de 5 es " . $factorial;
echo "<br>";

for ($n=5, $factorial=1; $n>0; $n--) { 
	$factorial *= $n;
}
echo "El valor de factorial usando for es " . $factorial;
echo "<br>";

// Sumar los numeros pares del arreglo
$array = array(10, 14, 18, 45, 87); // 0 ... 4
$i=0; // variable que recorre el arreglo
$sumapares = 0; // acumula el resultado de los numeros pares
do {
	if ($array[$i] % 2 == 0) {
		$sumapares += $array[$i]; // 42
		// $sumapares = $sumapares + $array[$i];
	}
	$i++;
} while ($i<5);
echo "El valor de la suma de los pares es " . $sumapares;
echo "<br>";

// Sumar las posiciones pares del arreglo
$array = array(10, 14, 18, 45, 87); // 0 ... 4
$i=0; // variable que recorre el arreglo
$sumapares = 0; // acumula el resultado de los numeros pares
do {
	if ($i % 2 == 0) {
		$sumapares += $array[$i]; // 115
		// $sumapares = $sumapares + $array[$i];
	}
	$i++;
} while ($i<5);
echo "El valor de la suma de las posiciones pares es " . $sumapares;
echo "<br>";

?>