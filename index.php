<?php session_start();
require_once 'config.php';
require_once 'functions.php';

$conexion = conexion($bd_config);

$sesion = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : NULL;

$user = obtener_usuario($conexion, $sesion);
if (!is_null($sesion)) {
    $foto = is_null($user[0]['foto']) ? 'resourses/usuario.png' : $user[0]['foto'];
}


// echo '<pre>';
// print_r($user);
// echo '</pre>';

require_once "views/feed.view.php";
