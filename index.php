<?php session_start();

$sesion = (isset($_SESSION['usuario'])) ? $sesion = true : $sesion = false;

var_dump($sesion);

require_once "views/feed.view.php";