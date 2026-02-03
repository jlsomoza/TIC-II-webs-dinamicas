<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trabajando con estructuras control repetitivas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
  <?php

    
  /*Ejercicio 1;  	
    La asociación matemática quiere que, además, mostremos por pantalla los 50 primeros números impares. 
    Para ello deberás abrir el programa del ejercicio anterior, definir una nueva variable 
    (o usar la que ya tienes para el contador aunque reiniciándola a 0) y utilizar un bucle do..while 
    para realizar la comprobación. Recuerda que puedes usar el operador % para la comparación.
    */
    $pares=0;
    $contador=0;
    echo("Listado de los 50 primeros números pares: <br>");

    while ($pares <= 50) {
        if($contador %2==0){
            $pares++;
            echo("$contador <br>");
        }
        $contador++;
    }

    echo("<br>");



    /*Ejercicio 2:
    La asociación matemática quiere que, además, mostremos por pantalla los 50 primeros números impares. 
    Para ello deberás abrir el programa del ejercicio anterior, definir una nueva variable 
    (o usar la que ya tienes para el contador aunque reiniciándola a 0) y utilizar un bucle do..while para realizar la comprobación. 
    Recuerda que puedes usar el operador % para la comparación.
    */

    $impares=0;
    $contador=0;

    echo("Listado de los 50 primeros números impares: <br>");

    do {
        # code...
        if($contador %2!=0){
            $impares++;
            echo("$contador <br>");
        }
        $contador++;
    } while ($impares <= 50);

    
    echo("<br>");
 

    /* Ejercicio 3: 
    La asociación matemática nos ha indicado que, debido a un reto que ha puesto, quiere realizar la suma de los 100 primeros números pares. 
    Para ello deberás abrir el programa del ejercicio anterior, definir dos variables: una para guardar el contador 
    (o usar la que ya tienes para el contador aunque reiniciándola a 0) y otra para guardar las sumas parciales; y utilizar un bucle for para recorrer los elementos. 
    Tras realizar el sumatorio deberá mostrar por pantalla el resultado.
    */

    $contador = 0;   // Contador, comienza en 0
    $suma = 0;       // Variable para guardar la suma
    
    for ($i = 0; $i < 100; $i++) {
        $suma += $contador;
        $contador += 2;  // Pasamos al siguiente número par
    }
    
    echo "La suma de los 100 primeros números pares es: $suma <br>";
    echo("<br>");

    /*
    Ejercicio 4: 

    Para terminar, nos piden que mostremos los meses del año en inglés y en español. 
    Para ello deberás abrir el fichero del ejercicio anterior y definir dos variables de tipo array: una para los meses en español y otra para los de inglés. 
    Una vez hecho, deberás usar un bucle foreach para recorrerlos y mostrarlos por pantalla (primero en español y luego en inglés).
    */

    echo "Listado de meses en español: <br>";

    $meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');

    foreach ($meses as $value) {
        echo("$value <br>");
    }

    echo("<br>");

    echo "Listado de meses en inglés: <br>";


    $meses_en = ["January","February","March","April","May","June","July","August","September","October","November","December"];

    foreach ($meses_en as $mes) {
        echo("$mes <br>");
    }

    echo("<br>");
  ?>
</body>
</html>