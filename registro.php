<?php session_start();

// Limpiamos los datos,
// valores ingresados para que no nos inyecten codigo html esto le da mas seguridad a la pagina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
  $cedula = $_POST['cedula'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];




  $errores = '';


// Analizamos si las variables estan vacias, si estan vacias imprimimos un mensaje de error para que rellene los datos
  if (empty($usuario) or empty($cedula) or empty($password) or empty($password2)) {
    $errores .= '<li>  Por favor rellena los datos </li>';
  }else {
    try {
      $conexion = new PDO('mysql:host=localhost;
      dbname=ctpaserri_login',
      'root',
      '');
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

    // Realizamos la consulta SQL para que inserte la variable de $usuario en la base de datos
    $state = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
    $state->execute(array(':usuario' => $usuario));
    $resultado = $state->fetch();

    // Realizamos la consulta SQL para que inserte la variable de $usuario en la base de datos
    $estado = $conexion->prepare('SELECT * FROM usuarios WHERE ced = :cedula LIMIT 1');
    $estado->execute(array(':cedula' => $cedula));
    $resultado2 = $estado->fetch();


    // Confirmamos que el usuario ya existe e imprimimos que el nombre de usuario
    if ($resultado != false) {
      $errores .= '<li> El nombre de usuario ya existe  </>';
      $errores .= '<li> </>';
    }
    // Confirmamos que el numero de cedula ya existe e imprimimos que la cedula ya esta registrada
    if ($resultado2 != false) {
      $errores .= '<li> El numero de cedula ya esta registrado </>';
    }

    // "Hasheamos" las Contraseñas con el algoritmo de encriptacion "sha512"
    $password = hash('sha512', $password);
    $password2 = hash('sha512', $password2);

    // verificamos que las Contraseñas sean iguales
    if ($password != $password2) {
      $errores .= '<li> Las Contraseñas son distintas </li>';
    }
  }

  // Si la variable errores esta vacia sino esta vacia es porque tiene errores,
  // ya podemos insertar los datos en la base de datos
  if ($errores == '') {
    $state = $conexion->prepare('INSERT INTO usuarios (id, usuario, ced, pass) VALUES(null, :usuario, :ced, :pass)');
    $state->execute(array(':usuario' => $usuario, ':ced' => $cedula, ':pass' => $password));


    header('Location: registro.php');
  }


}


// referimos al archivo registro.view.php
require 'views/registro.view.php';





 ?>
