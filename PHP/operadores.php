<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trabajando con variables PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Hola PHP </h1>
  <?php
  // Declaración de variables
    $saldo= 300;
    $ingreso=7;
    $gasto=20;
   

    echo "El saldo en la cuenta es de $saldo euros </br>";
    echo "El saldo de la cuenta después del ingreso sería de ";
    echo $saldo +$ingreso;
    echo " euros<br>";
    echo "El saldo de la cuenta después del gasto sería de ";
    echo $saldo-$gasto;
    echo " euros<br>";
    echo "El saldo de la cuenta después incrementar su valor sería de ";
    echo ++$saldo;
    echo " euros<br>";
    echo "El saldo de la cuenta después decrementar su valor sería de ";
    echo --$saldo;
    echo " euros<br>";
    $saldo=$saldo*2;
    echo "El saldo de duplicar su valor sería de $saldo";
    echo "Operadores lógicos";

    //Declaración de variables
    $estudia=true;
    $trabaja=true;
    $paro=false;
    $res=false; 
    echo "¿Estudia y trabaja? ";
    $res =$estudia && $trabaja;
    echo $res? "Sí<br>":"No<br>";
    $res = $estudia || $trabaja;
    echo $res? "Sí<br>":"No<br>";
    $res = !$trabaja;
    echo $res? "Sí<br>":"No<br>";

  ?>
</body>
</html>