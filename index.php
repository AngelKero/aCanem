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

if ($filasArticulos > count($articulos) or $filasMascotas > count($mascotas)) {
    $paginas++;
}

if (empty($mascotas) and empty($articulos)) {
    $empty = true;
}else{$empty = false;}

require_once "views/feed.view.php";
 