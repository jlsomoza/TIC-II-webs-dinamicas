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
    $titular="Lucía";
    $saldo_texto="300";
    $saldo_positivo= true;
    $res=false;

   

    echo "El saldo numérico es igual al saldo en texto?";
    $res = ($saldo == $saldo_texto);
    echo $res?" Sí<br>":" No<br>";
    echo "El saldo numérico es exactamente igual al saldo en texto?";
    $res = ($saldo === $saldo_texto);
    echo $res?" Sí<br>":" No<br>";
    echo "¿El titular es distinto al salto en texo?";
    $res= ($titular !=$saldo_texto);
    echo $res?" Sí<br>":"No <br>"; 

    
    echo "El saldo numérico es mayor al saldo en texto?";
    $res = ($saldo > $saldo_texto);
    echo $res?" Sí<br>":" No<br>";
    echo "El saldo numérico es menor o igual al saldo en texto?";
    $res = ($saldo <= $saldo_texto);
    echo $res?" Sí<br>":" No<br>";
    

  
    
    $valor=false;
    $valor2=true;
    $res=0;
    

    echo "El resultado de la operación and logica de valor y valor2 ";
    $res = $valor && $valor2;
    echo $res? "Positivo":"Negativo";

    echo "<br>";
    echo "El resultado de la operación or logica de valor y valor2 ";
    $res = $valor || $valor2;
    echo $res? "Positivo":"Negativo";


  ?>
</body>
</html>