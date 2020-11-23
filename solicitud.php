<?php session_start();
require_once 'config.php';
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Se enviaron datos por post
    $conexion = conexion($bd_config);
    $sesion = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : NULL;
    $user = obtener_usuario($conexion, $sesion);

    $nombre    = limpiarDatos($_POST['nombre']);
    $email     = limpiarDatos($_POST['email']);
    $telefono  = limpiarDatos($_POST['telefono']);
    $razones   = limpiarDatos($_POST['razones']);
    $casa      = limpiarDatos($_POST['casa']);
    $patio     = limpiarDatos($_POST['patio']);
    $personas  = limpiarDatos($_POST['personas']);
    $animales  = limpiarDatos($_POST['animales']);
    $who       = limpiarDatos($_POST['who']);
    $rincon    = limpiarDatos($_POST['rincon']);
    $soledad   = limpiarDatos($_POST['soledad']);
    $ninos     = limpiarDatos($_POST['ninos']);
    $howmuch   = limpiarDatos($_POST['howmuch']);
    $propiedad = limpiarDatos($_POST['propiedad']);
    $date      = limpiarDatos($_POST['date']);
    $solicitante   = limpiarDatos($_POST['solicitante']);
    $dueno = limpiarDatos($_POST['dueno']);
    $mascota      = limpiarDatos($_POST['mascota']);

    $razones = nl2br($razones); //Se agregan los saltos de linea correctamente

    $errores = ''; //String para guardar los errores generados

    if (
        empty($nombre) or
        empty($email) or
        empty($telefono) or
        empty($razones) or
        empty($casa) or
        empty($patio) or
        empty($personas) or
        empty($animales) or
        empty($who) or
        empty($rincon) or
        empty($soledad) or
        empty($ninos) or
        empty($howmuch) or
        empty($propiedad) or
        empty($date)
        ) {
            $errores .= '<li>Por favor rellena todos los datos</li>';
        } else {
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        }
        
        #-------------Si no hay ningun error se registra al usuario----------->
        if ($errores == '') {
        $statement = $conexion->prepare("INSERT INTO solicitud (nombre, email, telefono, razones, casa, patio, personas, animales, who, rincon, soledad, ninos, howmuch, propiedad, date, solicitante, dueno, mascota) VALUES (:nombre, :email, :telefono, :razones, :casa, :patio, :personas, :animales, :who,  :rincon, :soledad, :ninos, :howmuch, :propiedad, :date, :solicitante, :dueno, :mascota)");
        $statement->execute([
            ':nombre'   => $nombre,
            ':email'    => $email,
            ':telefono' => $telefono,
            ':razones'  => $razones,
            ':casa'     => $casa,
            ':patio'    => $patio,
            ':personas' => $personas,
            ':animales' => $animales,
            ':who'      => $who,
            ':rincon'   => $rincon,
            ':soledad'  => $soledad,
            ':ninos'    => $ninos,
            ':howmuch'  => $howmuch,
            ':propiedad' => $propiedad,
            ':date'     => $date,
            ':solicitante' => $solicitante,
            ':dueno'  => $dueno,
            ':mascota'    => $mascota
        ]);
        #Si todo fue correcto se redirige al login
        header('Location: index.php');
    }
} else{
    header('Location: index.php');
}
