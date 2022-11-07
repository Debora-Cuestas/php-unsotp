<?php

// Solución 1

$numero = 12325;
$cociente = $numero;
$numinvertido = 0;

while ($cociente >0 ) {
	$resto = $cociente % 10; 
    // rescato el primer digito de la derecha (unidad)
	$numinvertido =$numinvertido*10 + $resto; 
    // el resto lo sumo al nuevo numero adicionandole el producto * 10
	$cociente = (int)($cociente / 10); 
    //redefino el cociente para obtener el número menos el primer digito de la derecha (unidad)
	
    // Secuencia de valores de las variables
    // resto = 5, numinvertido = 0*10 + 5 = 5, cociente= 5484
	// resto = 4, numinvertido = 5*10 + 4 = 54, cociente= 548
	// resto = 8, numinvertido = 54*10 + 8 = 548, cociente= 54
	// resto = 4, numinvertido = 548*10 + 4 = 5484, cociente= 5
	// resto = 5, numinvertido = 5484*10 + 5 = 54845, cociente= 0
}


// Solución 2

 $numero = 12325;
 $cociente = str_split($numero);
 krsort($cociente);
 $numinvertido = implode("", $cociente);

// Solución 3

 $numero = 12325;
 $numinvertido = 0;
 $cociente = str_split($numero);

for ($i=count($cociente)-1; $i>=0 ; $i--) {
 	$numinvertido = $numinvertido*10 + $cociente[$i];
}


// Resultado

if ($numero == $numinvertido) {
	echo "El numero $numero es capicua";	
} else {
	echo "El numero $numero no es capicua";
}

?>