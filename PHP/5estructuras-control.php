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
    $saldo= 100;
    $cantidad_retirada=120;

    if($saldo>$cantidad_retirada)
      echo "Puede efecturar la operacion.";
    
    if($saldo<$cantidad_retirada)
      echo "No puede efectuar la operacion ya que no dispone de saldo suficiente";


    
  ?>
</body>
</html>