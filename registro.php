<?php session_start();

	if (isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$nombre = $_POST['nombre'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$email = $_POST['email'];;
		//$intentos = 0;

		$errores = '';

		if (empty($usuario) or empty($password) or empty($password2) or empty($nombre) or empty($apellido1) or empty($apellido2) or empty($email)) {
			$errores .= '<li>Por favor llena los campos correctamente</li>';
		} else {
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=bdsuministros','root','omar');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

			$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
			$statement->execute(array(':usuario' => $usuario));
			$resultado = $statement->fetch();

			if ($resultado != false) {
				$errores .= '<li> El nombre de usuario ya existe </li>';
			}

			if ($password != $password2) {
				$errores .= '<li> Las contraseñas no coinciden </li>';
			}
		}

		if ($errores == '') {
			$statement = $conexion->prepare('INSERT INTO usuarios (idusuario, usuario, pass, nombre, apellido1, apellido2, email) VALUES (null, :usuario, :pass, :nombre, :apellido1, :apellido2, :email)');

			$statement->execute(array(':usuario' => $usuario, ':pass' => $password, ':nombre' => $nombre, ':apellido1' => $apellido1, ':apellido2' => $apellido2, ':email' => $email));

			header('Location: login.php');
		}
	}

	require 'view/registro.view.php';

?>