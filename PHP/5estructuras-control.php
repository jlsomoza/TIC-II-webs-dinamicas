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
    $retirada_maxima=50;
    $opcion = 2;

    if($saldo>= $cantidad_retirada && $cantidad_retirada<=$cantidad_retirada){
      echo "Puede efecturar la operacion.<br>";
      echo "Su saldo es de $saldo euros";
      echo $saldo-$cantidad_retirada;
      echo "euros";
    }

    if($saldo>$cantidad_retirada)
      echo "Puede efecturar la operacion.";
    
    if($saldo<$cantidad_retirada)
      echo "No puede efectuar la operacion ya que no dispone de saldo suficiente";
      echo "Su saldo es de $saldo euros";

    

      //if else

      if($saldo>=$cantidad_retirada && $cantidad_retirada<=$retirada_maxima){
        echo "Puede efectuar la operación.<br>";
        echo "El saldo en la cuenta es de ";
        echo $saldo-$cantidad_retirada;
        echo " euros";
      }else{
        echo "No puede efectuar la operacion ya que no dispone 
        de saldo suficiente o porque excede el máximo permitido.<br>";
      }


      //if elseif else

      if($saldo>=$cantidad_retirada && $cantidad_retirada<=$retirada_maxima){
        echo "Puede efectuar la operación.<br>";
        echo "El saldo en la cuenta es de ";
        echo $saldo-$cantidad_retirada;
        echo " euros";
      }elseif ($saldo<$cantidad_retirada){
        echo "No puede efectuar la operacion ya que no dispone 
        de saldo suficiente";
      }
      else{
        echo "No puede efectuar la operacion ya que  excede el máximo permitido.<br>";
      }

    switch ($opcion) {
      case 0:
        echo "0.-Opción de retirada de efectivo";
        break;

      case 1:
        echo "1.-Opción de ingreso en efectivo";
        break;

      case 2:
        echo  "2.-Opción de pago de recibos";
        break;

      case 3:
        echo "3.-Opción de pago de impuestos";
        break;

      default:
        echo "Opción no contemplada";
        break;
    }

    $numero=1;

    while(($numero<=20)&&($numero>=1)){
      echo $numero++;
      echo "<br>";
    }

    $numero=1;
    do {
      echo $numero++;
      echo "<br>";
    } while($numero<=10);

    for ($i=0; $i <10 ; $i++) { 
      echo($i);
      echo "<br>";
    }


    //declaración de variables
    $numero=0;
    $alumnado = array("Pepe","Pepa","Juan","Juana");
   
   /*
    for ($i=0; $i <4 ; $i++) { 
      echo($alumnado[$i]);
      echo "<br>";
    }

    for ($i=0; $i <sizeof($alumnado) ; $i++) { 
      echo($alumnado[$i]);
      echo "<br>";
    }
    */

    $i=(sizeof($alumnado)-1);
    for ($i=3; $i >=0 ; $i--) { 
      echo($alumnado[$i]);
      echo "<br>";
    }

    foreach ($alumnado as $key => $value) {
      echo($value);
      echo "<br>";
    }

    foreach ($alumnado as $alumno) {
      echo($alumno);
      echo "<br>";
    }

    $bienvenida1="Bienvenido al Bar tolo";
    $menu="Aquí podrá degustar varios menús";
    $pregunta="'¿Quiere probar los \'Tolines\'?'";

    echo $bienvenida1;
    echo '<br>';
    echo($menu);
    echo '<br>';
    echo $pregunta;
    echo '<br>';
    echo $bienvenida1[5];

    $cadenaMayusculas= strtoupper($bienvenida1);
    echo $cadenaMayusculas;
    echo '<br>';



  ?>
</body>
</html>