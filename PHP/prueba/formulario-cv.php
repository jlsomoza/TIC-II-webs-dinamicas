<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario red social</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
  
    
  <?php

    // require_once "conexion_bd.php";

    if (!empty($_POST["nombre"])) {
        echo "Nombre:";
        echo $_POST["nombre"];
        echo "</br>";
    }

    if (!empty($_POST["apellidos"])) {
        echo "Apellidos:";
        echo $_POST["apellidos"];
        echo "</br>";
    }

    if (!empty($_POST["pswd"])) {
        echo "Contraseña:";
        echo $_POST["pswd"];
        echo "</br>";
    }

    if (!empty($_POST["gender"])) {
        echo "Sexo:";
        echo $_POST["gender"];
        echo "</br>";
    }

  

    if (!empty($_POST["temas"])) {
        $idiomas = [];
        echo "Temas interés:";

        foreach ($_POST["temas"] as $key => $valor) {
        # code...
            echo "$valor";
            echo "</br>";

        }
        echo "</br>";
      
    }


    if (!empty($_POST["descripcion"])) {
        echo "Descripción:";
        echo $_POST["descripcion"];
        echo "</br>";
    }

    
    if (!empty($_POST["novedades"])) {
        echo "Se ha subscrito al boletín de novedades";
        echo "</br>";
    }

    // 🔐 Hash seguro de la contraseña

    /*
    $passwordHash = password_hash($_POST["pass"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, pass) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST["usuario"] ,$passwordHash]);
    
*/
    echo "CV envidado correctamente <br>";

    echo "<a href='http://localhost/TIC-II/PHP/prueba/formulario-cv.html'>Volver al formulario</a>";

    ?>
</body>
</html>