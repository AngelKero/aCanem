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

$id_articulo = id_articulo($_GET['pet']);
$articulo = obtener_post_id($conexion, $id_articulo);

if(!$articulo){
    header('Location: index.php');
}

$articulo = $articulo[0];

$statement = $conexion->prepare("SELECT * FROM user WHERE id_user = ".$articulo['id_user'].' LIMIT 1');
$statement->execute();
$dueño = $statement->fetchAll();
$dueño = $dueño[0];
    
require_once "views/pet.view.php";