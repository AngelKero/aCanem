<?php session_start();
require_once 'functions.php';
require_once 'config.php';

$conexion = conexion($bd_config);

$sesion = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : NULL;
if (is_null($sesion)) {
    header('Location: index.php');
    die();
}

$user = obtener_usuario($conexion, $sesion);


require_once 'views/user.view.php';