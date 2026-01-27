<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trabajando con estructuras control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Hola PHP </h1>
  <?php
  // Declaración de variables
    $velocidad= 100;
    $aceleracion=120;
    $altura_naves=1000;

    //Declaración de constantes
    const gravedad=6.674*10**-11;
    const aceleracion_gra=9.8;
    const velocidad_max=300;
    if($velocidad<velocidad_max && $aceleracion>aceleracion_gra){
        echo("Todos los parámetros so correctos");
    } else{
        if($velocidad>velocidad_max){
            echo("La velocidad es exesiva");
        }elseif($aceleracion<aceleracion_gra){
            echo("La aceleración es insuficiente");
        }
    }

    $pares=0;
    $contador=0;

    while ($pares <= 50) {
        if($contador %2==0){
            $pares++;
            echo("$contador <br>");
        }
        $contador++;
    }

    $pares=0;
    $contador=0;


    do {
        # code...
        if($contador %2==0){
            $pares++;
            echo("$contador <br>");
        }
        $contador++;
    } while ($pares <= 50);

 

    // Ejercico for

    $contador = 0;   // Contador, comienza en 0
    $suma = 0;       // Variable para guardar la suma
    
    for ($i = 0; $i < 100; $i++) {
        $suma += $contador;
        $contador += 2;  // Pasamos al siguiente número par
    }
    
    echo "La suma de los 100 primeros números pares es: " . $suma;

    $meses = array('enero','febrero','marzo','abril','mayo');

    foreach ($meses as $key => $value) {
        echo("$value <br>");
    }

  ?>
</body>
</html>