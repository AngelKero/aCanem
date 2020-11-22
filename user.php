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
echo '<pre>';
print_r($foto);
echo '</pre>';

require_once 'views/user.view.php';