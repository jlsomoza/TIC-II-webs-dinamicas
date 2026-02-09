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

    require_once "conexion_bd.php";

    if (!empty($_POST["usuario"])) {
        echo "El usuario es:";
        echo $_POST["usuario"];
        echo "</br>";
    }

    if (!empty($_POST["pass"])) {
        echo "La contraseña es:";
        echo $_POST["pass"];
        echo "</br>";
    }


    if (!empty($_POST["tratamiento"])) {
        echo "Tratamiento:";
        echo $_POST["tratamiento"];
        echo "</br>";
    }

    if (!empty($_POST["apellidos"])) {
        echo "Apellidos:";
        echo $_POST["apellidos"];
        echo "</br>";
    }

    if (!empty($_POST["edad"])) {
        echo "Edad:";
        echo $_POST["edad"];
        echo "</br>";
    }

    if (!empty($_POST["tipo_cuenta"])) {
        echo "Tipo cuenta:";
        echo $_POST["tipo_cuenta"];
        echo "</br>";
    }

    $aficiones = [];
    $i = 0;
    if (!empty($_POST['aficion1'])) {
        echo "La pesca es una de las aficiones.<br>";
        $aficiones[$i] = "pesca";
        $i++;
    }
    if (!empty($_POST['aficion2'])) {
        echo "La música es una de las aficiones.<br>";
        $aficiones[$i] = "música";
        $i++;
    }
    if (!empty($_POST['aficion3'])) {
        echo "Los viajes es una de las aficiones.<br>";
        $aficiones[$i] = "viajes";
        $i++;
    }
    if (!empty($_POST['aficion4'])) {
        echo "La comida es una de las aficiones.<br>";
        $aficiones[$i] = "comida";
        $i++;
    }


    $lista_aficiones = implode(", ", $aficiones);


    $vehiculos = [];
    $i = 0;
    if (!empty($_POST['vehiculo1'])) {
        $vehiculos[$i] = $_POST['vehiculo1'];
        $i++;
    }
    if (!empty($_POST['vehiculo2'])) {
        $vehiculos[$i] = $_POST['vehiculo2'];
        $i++;
    }
    if (!empty($_POST['vehiculo3'])) {
        $vehiculos[$i] = $_POST['vehiculo3'];
        $i++;
    }
    if (!empty($_POST['vehiculo4'])) {
        $vehiculos[$i] = $_POST['vehiculo4'];
        $i++;
    }


    $lista_vehiculos = implode(", ", $vehiculos);

    if (!empty($_POST["nombre"])) {
        echo "Nombre:";
        echo $_POST["nombre"];
        echo "</br>";
    }

    if (!empty($_POST["descripcion"])) {
        echo "Descripción:";
        echo $_POST["descripcion"];
        echo "</br>";
    }

    $lista_idiomas;

    if (!empty($_POST["idiomas"])) {
        $idiomas = [];
        echo "Idiomas:";

        foreach ($_POST["idiomas"] as $key => $valor) {
        # code...
            echo "$valor,";
        }
        echo "</br>";
        $lista_idiomas = implode(", ", $_POST["idiomas"]);
    }


    if (!empty($_POST["n_mensajes"])) {
        echo "Mensajes:";
        echo $_POST["n_mensajes"];
        echo "</br>";
    }

    // 🔐 Hash seguro de la contraseña
    $passwordHash = password_hash($_POST["pass"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, pass) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST["usuario"] ,$passwordHash]);
    

    echo "Usuario registrado correctamente <br>";

    echo "<a href='http://localhost/TIC-II/PHP/formulario-red-social.html'>Volver al formulario</a>";

    ?>
</body>
</html>