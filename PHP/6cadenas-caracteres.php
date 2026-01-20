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
  
    $bienvenida1="Bienvenido al Bar tolo";
    $menu="Aquí podrá degustar varios menús";
    $pregunta='¿Quiere probar los \'Tolines\'?';
    $nombre="Pepe";

    echo $bienvenida1;
    echo '<br>';
    echo($menu);
    echo '<br>';
    echo $pregunta;
    echo '<br>';
    echo $bienvenida1[0];
    echo '<br>';
    echo $bienvenida1[5];
    echo '<br>';
    $respuesta="Hola $nombre";

    echo $respuesta;
    echo '<br>';
    $bienvenida1[9]='a';


    //funciones
    $cadenaMayusculas= strtoupper($bienvenida1);
    $cadenaMinusculas=strtolower($bienvenida1);
    $cadenaMayusculas1c=ucfirst($bienvenida1);
    $cadenaMayusculas1w=ucwords($bienvenida1);
    echo $cadenaMayusculas;
    echo '<br>';
    echo $cadenaMayusculas;
    echo '<br>';
    echo $cadenaMayusculas1c;
    echo '<br>';
    echo $cadenaMayusculas1w;
    echo '<br>';


    $cadena = " elimina los espacios derecha  ";

    echo $cadena;
    echo '<br>';
    $cadena2=chop($cadena);
    echo $cadena2;
    echo '<br>';
    $cadena3=ltrim($cadena);
    echo $cadena3;
    echo '<br>';
    $cadena4=trim($cadena);
    echo $cadena4;
    echo '<br>';

    $cadena1="Hola a todos";
    $cadena2="to";
    $pos= strpos($cadena1,$cadena2);
    $pos2=strspn($cadena1,$cadena2);
    $res=strcmp($cadena1,$cadena2);

    echo $pos;
    echo '<br>';
    echo $pos2;
    echo '<br>';
    echo $res;
    echo '<br>';

    $num=30;
    $car=chr($num);
    $car2="a";
    $num2=ord($car);

    echo $car;
    echo '<br>';
    echo $num2;
    echo '<br>';





  ?>
</body>
</html>