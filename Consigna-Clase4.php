<?php
    $a = 1;
    $b = 2;
    $c = 3;
    $d = 4;
    $e = 5;
 
    echo 'Ejercicio 1 ';
    echo "<br>";

    echo $a;
    echo $b;
    echo $c;
    echo $d;
    echo $e;

    echo "<br><br>";
    //----------------------------------------------------------- 
    echo 'Ejercicio 2';
    echo "<br>";

    $total = $a + $b + $c + $d + $e;
    echo 'El total es: '.$total; // 15
    
    echo "<br><br>";
    //-----------------------------------------------------------
    echo 'Ejercicio 3';
    echo "<br>";
    
    $dia = 5;

    $diasemana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes');

    echo('El día es: ');
    if ($dia == 1) { echo $diasemana[$dia-1]; }
    if ($dia == 2) { echo $diasemana[$dia-1]; }
    if ($dia == 3) { echo $diasemana[$dia-1]; }
    if ($dia == 4) { echo $diasemana[$dia-1]; }
    if ($dia == 5) { echo $diasemana[$dia-1]; }


    $lunes = 'Lunes';
    $martes = 'Martes';
    $miercoles = 'Miércoles';
    $jueves = 'Jueves';
    $viernes = 'Viernes';

    echo "<br><br>";
    echo('El día es: ');
    if($dia == 1){ echo $lunes; }
    if($dia == 2){ echo $martes; }
    if($dia == 3){ echo $miercoles; }
    if($dia == 4){ echo $jueves; }
    if($dia == 5){ echo $viernes; }

    echo "<br><br>";
    //-----------------------------------------------------------
    echo 'Ejercicio 4';
    echo "<br>";
  
    $saludo = 'Hola, ';
    $nombre = 'Luis';
    $limite = 5;

    for($i = 1; $i <= $limite; $i++){
        echo "<br>";
        echo $i.' - '.$saludo.$nombre;
    }

    echo "<br><br>";
    //-----------------------------------------------------------
    echo 'Ejercicio 5';
    echo "<br>";

    // Utilizando las variables del Ejercicio 3.
    echo $lunes.','.$martes.','.$miercoles.','.$jueves.','.$viernes;
     
    echo "<br><br>";
    //-----------------------------------------------------------
    echo 'Ejercicio 6';
    echo "<br>";

    $semana = 'Lunes,Martes,Miércoles,Jueves,Viernes';
    
    $array = explode(',', $semana); // Transforma un string en un array.
    
    $array = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes');

    // Orden por valor: 
    //      sort($array);

    $array = array('2'=>'Jueves', 'Lunes', 'Martes', 'Miércoles',  'Viernes');


    
    // Orden inverso por valor: 
    //      rsort($array);

    //$array = array('Viernes', 'Miércoles', 'Martes', 'Lunes',  'Jueves');

    // Orden por índice:
    //      arsort($array);

    // Orden inverso por índice:
    //      krsort($array);

    // Cuenta el total de elementos del array.
          $total = count($array);

    foreach ($array as $key => $value) {
        echo "Arreglo " . $key+1 . " = $value";
        echo "<br>";
    }
    echo "La cantidad de elementos del arreglo es $total";


    



?>