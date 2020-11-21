<?php session_start();
require_once 'config.php';
require_once 'functions.php';

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$conexion = conexion($bd_config);

var_dump($conexion);

require_once 'views/signUp.view.php';