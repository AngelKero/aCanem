<?php session_start();
require_once 'config.php';
require_once 'functions.php';

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$conexion = conexion($bd_config);

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Se enviaron datos por post
	$email = limpiarDatos($_POST['email']);
	$password = limpiarDatos($_POST['password']);

	$errores = ''; //String para guardar los errores generados

	#--------Se comprueba que ningun dato este vacio---------------->
	if (empty($email) or empty($password)) {
		$errores .= '<li>Por favor rellena todos los datos</li>';
	} else { // Si no se valida el formulario
		#Se hashea la contraseña
		$password = hash('sha512', $password);

		#Se consulta si hay un usuario y contraseña iguales a los enviados
		$statement = $conexion->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
		$statement->execute([
			':email' => $email,
			':password' => $password
		]);
		#Se guarda el resultado
		$resultado = $statement->fetch();
		
		echo '<pre>';
		print_r($resultado);
		echo '</pre>';

		#Si no devolvio algo se crea la sesion
		if ($resultado != false) {
			$_SESSION['usuario'] = $email;
			#Se redirige al index que decidira a donde enviar al usuario
			header('Location: index.php');
		} else{
			$errores .= '<li>Datos Incorrectos</li>';
		}
	}
}

require_once 'views/login.view.php';
