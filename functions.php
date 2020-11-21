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

function obtener_post($postPagina, $conexion){
    $inicio = (paginaActual() > 1) ? 
    (paginaActual() * $postPagina - $postPagina) : 0;
    $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio,$postPagina");
    $statement->execute();

    return $statement->fetchAll();
}

function id_articulo($id){
    return (int)limpiarDatos($id);
}


function obtener_post_id($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ?? false;
}

function numero_paginas($postPagina, $conexion){
    $totalArticulos = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $totalArticulos->execute();
    $totalArticulos = $totalArticulos->fetch()['total'];

    $numeroPaginas = ceil($totalArticulos / $postPagina);
    return $numeroPaginas;
}

function fecha($fecha){
    $timestamp = strtotime($fecha);
    $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp) - 1;
    $year = date('Y', $timestamp);

    $fecha = "$dia de " . $meses[$mes] . " del $year";
    return $fecha;
}
