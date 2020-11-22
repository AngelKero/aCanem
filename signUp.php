<?php session_start();
require_once 'config.php';
require_once 'functions.php';

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$conexion = conexion($bd_config);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {//Se enviaron datos por post
	$email = limpiarDatos($_POST['email']);
	$username = limpiarDatos($_POST['name']);
	$date = limpiarDatos($_POST['date']); 
    $password = limpiarDatos($_POST['password']);
    $password2 = limpiarDatos($_POST['password-repeat']);

    $errores = '';//String para guardar los errores generados

    #--------Se comprueba que ningun dato este vacio---------------->
    if(empty($email) or empty($username) or empty($date) or empty($password) or empty($password2)){
        $errores .= '<li>Por favor rellena todos los datos</li>';
	} else{ // Si no se valida el formulario
		if ($date <= 18) {
            '<li>Debes ser mayor a 18</li>';
		}
		if ($date >= 99) {
            '<li>Ingresa una edad valida</li>';
        }

		#Se comprueba primero el tamaño de la contraseña
		if (strlen($password) < 8 or strlen($password) > 20) {
			$errores .= '<li>La contraseña debe tener minimo 8 caracteres y maximo 20</li>';
		}
		#-----------Se hashean las contraseñas para hacerlas mas seguras----------->
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);
		// echo '<pre>';
		// print_r($password);
		// echo '</pre>';
		#----------Se comprueba que las contraseñas no sean iguales------------->
		if($password !== $password2){
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}

        #--------Se comprueba que el usuario ingresado no exista------------>
        $statement = $conexion->prepare('SELECT * FROM user WHERE username = :username OR email = :email LIMIT 1');
        $statement->execute([
			':username' => $username, 
			':email' => $email
		]);
		$resultado = $statement->fetch();
		// echo '<pre>';
		// print_r($resultado);
		// echo '</pre>';
        if($resultado != false){
            $errores .= '<li>El usuario ya existe</li>';
        }
		
    }

    #-------------Si no hay ningun error se registra al usuario----------->
    if ($errores == '') {
        $statement = $conexion->prepare('INSERT INTO user (username, edad, email, password) VALUES (:username, :edad, :email, :password)');
        $statement->execute([
			':username' => $username,
			':edad' => $date,
			':email' => $email,
            ':password' => $password
        ]);

        #Si todo fue correcto se redirige al login
        header('Location: login.php');
    }
}

require_once 'views/signUp.view.php';