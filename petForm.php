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
    $nombre = limpiarDatos($_POST['nombre']);
    $info   = limpiarDatos($_POST['info']);
    $motivos  = limpiarDatos($_POST['motivos']);
    $peso  = limpiarDatos($_POST['peso']);
    $edad  = limpiarDatos($_POST['edad']);
    $raza  = limpiarDatos($_POST['raza']);
    $sexo  = limpiarDatos($_POST['sexo']);
    $estelizado     = limpiarDatos($_POST['estelizado']);
    $desparazitado  = limpiarDatos($_POST['desparazitado']);
    $mascotas  = limpiarDatos($_POST['mascotas']);
    $tamano    = limpiarDatos($_POST['tamano']);
    $energia   = limpiarDatos($_POST['energia']);
    $ejercicio = limpiarDatos($_POST['ejercicio']);
    $imagen = '';

    $info = nl2br($info);//Se agregan los saltos de linea correctamente
    $motivos = nl2br($motivos);

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

require_once 'views/petForm.view.php';