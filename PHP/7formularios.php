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

    require_once "conexion.php";
    

    echo "El usuario es:";
    echo $_POST["usuario"];
    echo "</br>";
    echo "La contraseña es:";
    echo $_POST["pass"];
    echo "</br>";
    echo "Estudia?";
    echo $_POST["estudia"];
    echo "</br>";

    if(!empty($_POST['aficion1']))
     echo "La pesca es una de las aficiones.<br>";
    if(!empty($_POST['aficion2']))
     echo "La música es una de las aficiones.<br>";
     if(!empty($_POST['aficion3']))
     echo "La viajes es una de las aficiones.<br>";
     if(!empty($_POST['aficion4']))
     echo "La comida es una de las aficiones.<br>";

     foreach ($_POST["menu"] as $valor) {
         # code...
         echo "$valor<br>";
     }


     if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {

        $nombre = $_FILES["imagen"]["name"];
        $tipo = $_FILES["imagen"]["type"];
        $rutaTemporal = $_FILES["imagen"]["tmp_name"];
    
       
        echo "<h3>Imagen subida:</h3>";
        echo "<img src='data:$tipo;base64," . base64_encode(file_get_contents($rutaTemporal)) . "' width='300'>";
      
    
    } else {
        echo "No se ha enviado ninguna imagen.";
    }
    
/*
    $sql = "INSERT INTO usuarios (nombre, pass) VALUES (:nombre, :pass)";

    $stmt = $pdo->prepare($sql);

    $nome  = $_POST["usuario"];
    $email = $_POST["pass"];

    $stmt->bindParam(":nombre", $nome);
    $stmt->bindParam(":pass", $email);

    $stmt->execute();

    echo "Rexistro inserido correctamente";

    */


    $sql = "INSERT INTO usuarios (nombre, pass) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST["usuario"] ,$_POST["pass"]]);

    echo "Rexistro inserido correctamente";

?>
</body>
</html>