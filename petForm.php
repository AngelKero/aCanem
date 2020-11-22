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
    $ninos  = limpiarDatos($_POST['ninos']);
    $mascotas  = limpiarDatos($_POST['mascotas']);
    $tamano    = limpiarDatos($_POST['tamano']);
    $energia   = limpiarDatos($_POST['energia']);
    $ejercicio = limpiarDatos($_POST['ejercicio']);
    $imagen = '';

    $info = nl2br($info);//Se agregan los saltos de linea correctamente
    $motivos = nl2br($motivos);

    $errores = '';//String para guardar los errores generados

    if( empty($nombre) or 
        empty($info) or
        empty($motivos) or
        empty($peso) or
        empty($edad) or
        empty($raza) or
        empty($sexo) or
        empty($estelizado) or
        empty($desparazitado) or
        empty($ninos) or
        empty($mascotas) or
        empty($tamano) or
        empty($energia) or
        empty($ejercicio)
    ){
        $errores .= '<li>Por favor rellena todos los datos</li>';
	}else{
        if ((strlen($info) <= 50 or strlen($info) >= 1500) or (strlen($motivos) <= 50 or strlen($motivos) >= 1500)) {
            $errores .= '<li>La descripcion y los motivos deben llevar minimo 50 y maximo 1500 caracteres</li>';
        }
        if ($peso <= 0 or $edad <= 0) {
            $errores .= '<li>Ingresa un peso o edad validos[Mayores a 0]</li>';
        }
    }

    #-------------Si no hay ningun error se registra al usuario----------->
    if ($errores == '') {
        $statement = $conexion->prepare('INSERT INTO mascota (nombre, info, motivos, peso, edad, raza, sexo, esterelizado, desparazitado, ninos, mascotas, tamano, energia, ejercicio, id_user) VALUES (:nombre, :info, :motivos, :peso, :edad, :raza, :sexo, :esterelizado, :desparazitado, :ninos, :mascotas, :tamano, :energia, :ejercicio, :id_user)');
        $statement->execute([
            ':nombre' => $nombre,
            ':info' => $info,
            ':motivos' => $motivos,
            ':peso' => $peso,
            ':edad' => $edad,
            ':raza' => $raza,
            ':sexo' => $sexo,
            ':esterelizado' => $estelizado,
            ':desparazitado' => $desparazitado,
            ':ninos' => $ninos,
            ':mascotas' => $mascotas,
            ':tamano' => $tamano,
            ':energia' => $energia,
            ':ejercicio' => $ejercicio,
            'id_user' => $id
        ]);
        
        #Si todo fue correcto se redirige al login
        header('Location: index.php');
    }
}

require_once 'views/petForm.view.php';