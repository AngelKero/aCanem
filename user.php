<?php session_start();
require_once 'config.php';
require_once 'functions.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    die();
}

$conexion = conexion($bd_config);
$sesion = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : NULL;
$user = obtener_usuario($conexion, $sesion);
$foto = is_null($user[0]['foto']) ? 'resourses/usuario.png' : $user[0]['foto'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {//Se enviaron datos por post
    $id     = $user[0]['id_user'];
    $name   = limpiarDatos($_POST['name']);
    $edad   = limpiarDatos($_POST['edad']);
    $email  = limpiarDatos($_POST['email']);
    $cuenta = limpiarDatos($_POST['cuenta']);
    $estado = limpiarDatos($_POST['estado']);
    $ciudad = limpiarDatos($_POST['ciudad']);
    $calle  = limpiarDatos($_POST['calle']);
    $numero = limpiarDatos($_POST['numero']);

    $errores = '';//String para guardar los errores generados

    if( empty($name)   or
        empty($edad)   or
        empty($email)  or
        empty($cuenta) or
        empty($estado) or
        empty($ciudad) or
        empty($calle)  or
        empty($numero)
    ){
        $errores .= '<li>Por favor rellena todos los datos</li>';
	}else{
        if ($edad <= 18) {
            $errores .= '<li>Debes ser mayor a 18</li>';
        }
        if ($edad >= 99) {
            $errores .= '<li>Ingresa una edad valida</li>';
        }
        #Se comprueba que almenos un campo haya cambiado
        if ($name   === $user[0]['username']   and
            $edad   === $user[0]['edad']       and
            $email  === $user[0]['email']      and
            $cuenta === $user[0]['tipoCuenta'] and
            $estado === $user[0]['estado']     and
            $ciudad === $user[0]['ciudad']     and
            $calle  === $user[0]['calle']      and
            $numero === $user[0]['numero']
        ){
            $errores .= '<li>Por favor cambie almenos un campo</li>';
        }else{
            #--------Si se modifico un campo se comprueba que el usuario o email ingresado no exista ya------------>
            if ($name !== $user[0]['username'] or $email !== $user[0]['email']){
                $statement = $conexion->prepare('SELECT * FROM user WHERE username = :username OR email = :email LIMIT 1');
                $statement->execute([
                    ':username' => $name,
                    ':email' => $email
                ]);
                $resultado = $statement->fetch();
                if($resultado != false){
                    $errores .= '<li>El usuario o email que quieres cambiar ya lo tiene alguien mas, elige otro.</li>';
                }
            }
        }
    }

    #-------------Si no hay ningun error se registra al usuario----------->
    if ($errores == '') {
        $statement = $conexion->prepare('UPDATE user 
        SET username = :username, edad = :edad, email = :email, estado = :estado, ciudad = :ciudad, calle = :calle, numero = :numero, tipoCuenta = :tipoCuenta
        WHERE id_user = :id');
        $statement->execute([
			':username' => $name,
			':edad' => $edad,
			':email' => $email,
            ':estado' => $estado,
            ':ciudad' => $ciudad,
            ':calle' => $calle,
            ':numero' => $numero,
            ':tipoCuenta' => $cuenta,
            ':id' => $id
        ]);

        #Si todo fue correcto se redirige al login
        header('Location: user.php');
    }
}

require_once 'views/user.view.php';