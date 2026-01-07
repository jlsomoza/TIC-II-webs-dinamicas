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
    $frase= "Hola caracola";
    $numero=7;
    $estudia=true;
    $numerocondecimales= 13.4;
    $array =array(1,2,3,4);

    echo $frase;
    echo "</br>";
    echo gettype($frase);
    echo $numero;
    echo $estudia;
    echo $numerocondecimales;
    echo "</br>";
    echo is_array($array);
    echo "</br>";

    define ("nombre_constante",123);
    const const1 ="hola";
    echo constant("nombre_constante");
    echo constant("const1");

  ?>
</body>
</html>