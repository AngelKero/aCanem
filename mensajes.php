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

$id = $user[0]['id_user'];

$statement = $conexion->prepare('SELECT * FROM solicitud WHERE dueno = :id');
$statement->execute([':id' => $id]);
$mensajes = $statement->fetchAll();
// echo '<pre>';
// print_r($mensajes);
// echo '</pre>';

require_once 'views/mensajes.view.php';