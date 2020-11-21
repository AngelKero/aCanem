<aside class="info">
    <a href="<?php echo isset($_SESSION['usuario']) ? ('user.php?user='.$user[0]['id_user']) : 'login.php'; ?>" class="settings-user">Ajustes de usuario <i class="fas fa-cog"></i></a>
    <section class="info-user">
        <div class="image-profile">
            <img src="<?php echo isset($_SESSION['usuario']) ? $foto : 'resourses/usuario.png'; ?>" alt="<?php echo isset($_SESSION['usuario']) ? 'foto de perfil de '.$user[0]['username'] : 'Sin foto de perfil' ?>" width="300">
        </div>
        <h3 class="user-name"><?php echo isset($_SESSION['usuario']) ? $user[0]['username'] : 'Invitado'; ?></h3>
        <h4 class="user-type"><?php echo isset($_SESSION['usuario']) ? $user[0]['tipoCuenta'] : 'Sin tipo'; ?></h4>
        <div class="user-level-info">
            <h4 class="level">Nivel</h4>
            <p class="user-level"><?php echo isset($_SESSION['usuario']) ? $user[0]['Nivel'] : 'Sin nivel'; ?></p>
            <p class="icon-level"><i class="fas fa-paw"></i></p>
            <a href="#">¿Como funcionan los niveles?</a>
        </div>
        <?php if (isset($_SESSION['usuario'])): ?>
        <div class="user-stadistics">
            <p class="user-pets">Mis mascotas: <span id="num-pets">2</span></p>
            <p class="user-pets">He ayudado: <span id="num-helps">1</span></p>
            <p class="user-pets">Mis contribuciones: <span id="num-contributions">25</span></p>
        </div>
        <?php endif ?>
    </section>
</aside>