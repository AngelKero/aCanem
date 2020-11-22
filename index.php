<?php session_start();
require_once 'config.php';
require_once 'functions.php';

$conexion = conexion($bd_config);

$sesion = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : NULL;

$user = obtener_usuario($conexion, $sesion);
if (!is_null($sesion)) {
    $foto = is_null($user[0]['foto']) ? 'resourses/usuario.png' : $user[0]['foto'];
}

$articulos = obtener_post($home_config['postArticulos'], 'articulo', $conexion);
$filasArticulos = contar_filas($conexion);
$mascotas = obtener_post($home_config['postMascotas'], 'mascota', $conexion);
$filasMascotas = contar_filas($conexion);

$filasTotales = $filasArticulos + $filasMascotas;
$paginas = numero_paginas($filasTotales, $home_config['postTotales']);
// echo '<pre>';
// print_r($mascotas);
// echo '</pre>';

require_once "views/feed.view.php";
 