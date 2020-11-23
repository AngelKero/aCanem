<!DOCTYPE html>
<html lang="es">
<?php include_once "head.view.php"; ?>

<body>
    <?php include_once "header.view.php" ?>
    <main>
        <?php include_once "userInfo.view.php"; ?>
        <section class="main-of-page">
            <div class="lista-peticiones">
                <h4>Personas que respondieron a tus mascotas ^_____^</h4>
                <table class="egt">
                    <tr>
                        <th scope="row">Mascota</th>
                        <th>Usuario</th>
                        <th>email</th>
                        <th>telefono</th>
                    </tr>
                    <?php foreach ($mensajes as $mensaje) : ?>
                    <tr>
                        <th><?php $mascota = obtener_post_id($conexion, $mensaje['mascota']); echo $mascota[0]['nombre']; ?></th>
                        <td><?php echo obtener_NombreUsuario($mensaje['solicitante'], $conexion) ?></td>
                        <td><?php echo $mensaje['email'] ?></td>
                        <td><?php echo $mensaje['telefono'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </section>
    </main>
    <?php include_once "navegacionMovil.view.php"; ?>
</body>

</html>