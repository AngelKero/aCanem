<?php session_start();
require_once 'config.php';
require_once 'functions.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    die();
}

$conexion = conexion($bd_config);
$sesion = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : NULL;
$user = obtener_usuario($conexion, $sesion);
$foto = is_null($user[0]['foto']) ? 'resourses/usuario.png' : $user[0]['foto'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {//Se enviaron datos por post
    $id     = $user[0]['id_user'];
    $titulo = limpiarDatos($_POST['titulo']);
    $texto  = limpiarDatos($_POST['texto']);
    $imagen = '';

    $texto = nl2br($texto);//Se agregan los saltos de linea correctamente

    $errores = '';//String para guardar los errores generados

    if(empty($titulo) or empty($texto)){
        $errores .= '<li>Por favor rellena todos los datos</li>';
	}else{
        if (strlen($titulo) >= 50) {
            $errores .= '<li>El titulo debe llevar maximo 50 caracteres</li>';
        }
    }

    #-------------Si no hay ningun error se registra al usuario----------->
    if ($errores == '') {
        $statement = $conexion->prepare('INSERT INTO articulo (titulo, texto, imagen, id_user) VALUES (:titulo, :texto, :imagen, :user)');
        $statement->execute([
			':titulo' => $titulo,
			':texto' => $texto,
			':imagen' => $imagen,
            ':user' => $id
        ]);
        
        #Si todo fue correcto se redirige al login
        header('Location: index.php');
    }
}

require_once 'views/articleForm.view.php';