 <? php

 $string = 'La mejor clase del mundo';
echo $string;
echo "<br>";

$verdadero = true;
$falso = false;
echo $verdadero;
echo $falso;
echo "<br>";

define("FOO", "Valor de la constante");
define("ENTERO", 2);
echo FOO;
echo ENTERO;
echo "<br>";

$suma= $entero + ENTERO;
$enetro += $suma;
$entero =$entero + $suma;
echo "Valor de suma=".$suma;
echo "<br>";

//suma
$a =10;
$b =5 ;
echo ("La suma es ". $a+$b); //15
echo "<br>";
echo ("La resta es ". $a-$b); //5
echo "<br>";
echo ("La multiplicación es ". $a*$b); //50
echo "<br>";
echo ("La división es ". $a/$b); // 2
echo "<br>";
echo ("La modulo es ". $a%$b); // 0
echo "<br>";
echo ("La potencia es ". $a**$b); // 15
echo "<br>";

$a+= $b; // 10+5
echo ("El resultado es ".$a); //15
echo "<br>";
$a-= $b; // 15 - 5
echo ("El resultado es ". $a); // 10
echo "<br>";

$cadena1 = "Hola";
$cadena1 .="mundo";
echo $cadena1;
echo "<br>";

$c = 10;
$d =20;
if ($c > $d){ // 10 > 20 -> false
	echo "c es mayor que d";
}else{//false
	echo "d es mayor que c";
}
echo "<br>";

//Usando el operador ===
$var=1; //integer
$var2= 1.0; //float

if($var1===$var2) //false
	echo "Las variables contienen el mismo valor y son del mismo tipo.";
}else{
	echo "Las variables son de tipos distintos"
}
echo "<br>";

$i = 1;
while ($i <=10){
	echo "valor de i=" . $i;
echo "<br>";
//$i +=1; // $i = $i+1
$i++;
}

$i=0;
do{ //Cuantas veces se ejecuta 1 sola vez
	echo "Valor de j=" . $i;
	echo "<br>";
}while ($i>0); { //1---10
	echo "Con while el valor de i=" . $i;
	echo "<br>";
	$i +=1; // $i = $i +1
	//$i++;
}

$j=0.0;
do{ //Cuantas veces se ejecuta 1 sola vez
	echo "Valor de j=" . $j;
	echo "<br>";
}while ($j>0);

for ($i=1; $1 <=10; $i++){
	echo "Con for el valor de i=" . $i;
	echo "<br>";
}
//factorial 5! = 5*4*3*2*1 =120
$n=5;
$factorial = 1;
while ($n>0){
	$factorial *= n;
	$n--;
}
echo "El valor de factorial es" .$factorial;
echo "<br>";

for ($n=5, $factorial= 1; $n>0; $n--){ //Inicializar dos valores con coma
	$factorial *= $n;
}
echo "El valor de fatorial usando for es" .$factorial;
echo "<br>";

//Sumar los numeros pares del arreglo
$array= array(10,14,18,45,87);
$i=0; //variable que recorre el arreglo
$sumapares = 0; //acumula el resultado de números pares
do{
	if($array [$i]% 2==0){ //Si el número es par=42 //para ser impares en vez de == se pone
		$sumapares += $array [$i];
	}
	$i++;
}while ($i<=5);
echo "El valor de la suma de los pares es" .$sumapares;
echo "<br>";

$array= array(10,14,18,45,87);
$i=0; //variable que recorre el arreglo
$sumapares = 0; //acumula el resultado de números pares
do{
	if($i % 2==0){ //Si el número es par=42 //para ser impares en vez de == se pone
		$sumapares += $array [$i];
	}
	$i++;
}while ($i<=5);
echo "El valor de la suma de la posiciones pares" .$sumapares;
echo "<br>";
?>