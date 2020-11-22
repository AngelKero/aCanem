<?php
require_once 'config.php';

function conexion($bd_config){
    try {
        $url = $bd_config['url'];
        $nombre = $bd_config['baseDatos'];
        $usuario = $bd_config['usuario'];
        $password = $bd_config['pass'];
        $conexion = new PDO("mysql:host=$url;dbname=$nombre", $usuario, $password);
        return $conexion;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        return false;
    }
}
// conexion($bd_config);

function limpiarDatos($datos){
    $datos = trim($datos);//Limpiar espacios
    $datos = stripcslashes($datos);//Quitar barras
    $datos = htmlspecialchars($datos);
    return $datos;
}

function paginaActual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_post($postTotales, $tabla, $conexion){
    $inicio = (paginaActual() > 1) ? (paginaActual() * $postTotales - $postTotales) : 0;

    $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM $tabla ORDER BY id_$tabla DESC LIMIT $inicio,$postTotales");
    $statement->execute();

    return $statement->fetchAll();
}

function contar_filas($conexion){
    $totalArticulos = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $totalArticulos->execute();
    $totalArticulos = $totalArticulos->fetch()['total'];

    return $totalArticulos;
}

function id_articulo($id){
    return (int)limpiarDatos($id);
}

function numero_paginas($totalArticulos, $postTotales){
    $numeroPaginas = ceil($totalArticulos / $postTotales);
    return $numeroPaginas;
}

function obtener_NombreUsuario($id, $conexion){
    $statement = $conexion->prepare("SELECT * FROM user WHERE id_user = $id LIMIT 1");
    $statement->execute();
    $username = $statement->fetchAll();

    return $username[0]['username'];
}

function obtener_post_id($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM mascota WHERE id_mascota = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ?? false;
}


function obtener_usuario($conexion, $sesion){
    $statement = $conexion->prepare("SELECT * FROM user WHERE email = :sesion");
    $statement->execute(['sesion' => $sesion]);
    $user = $statement->fetchAll();
    return $user;
}

function fecha($fecha){
    $timestamp = strtotime($fecha);
    $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp) - 1;
    $year = date('Y', $timestamp);

    $fecha = "$dia-" . $meses[$mes] . "-$year";
    return $fecha;
}
