<?php session_start();
require_once 'config.php';
require_once 'functions.php';

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$conexion = conexion($bd_config);

$sesion = (isset($_SESSION['usuario'])) ? $sesion = true : $sesion = false;

var_dump($sesion);

require_once "views/feed.view.php";