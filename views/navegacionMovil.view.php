<aside class="navegacion-movil">
    <ul class="buttons-navigation">
        <li class="button-home">
            <a href="index.php">
                <p class="icon-button active"><i class="fas fa-home"></i></p>
            </a>
        </li>
        <li class="button-cuenta">
            <a href="<?php echo isset($_SESSION['usuario']) ? 'user.php' : 'login.php'; ?>">
                <p class="icon-button"><i class="fas fa-user"></i></p>
            </a>
        </li>
        <li class="button-messages">
            <a href="<?php echo isset($_SESSION['usuario']) ? 'mensajes.php' : 'login.php'; ?>">
                <p class="icon-button"><i class="fas fa-inbox"></i></p>
            </a>
        </li>
        <li class="button-notifications">
            <a href="<?php echo isset($_SESSION['usuario']) ? '#' : 'login.php'; ?>">
                <p class="icon-button"><i class="fas fa-bell"></i></p>
            </a>
        </li>
        <li class="button-options">
            <a href="<?php echo isset($_SESSION['usuario']) ? '#' : 'login.php'; ?>">
                <p class="icon-button"><i class="fas fa-bars"></i></p>
            </a>
        </li>
    </ul>
</aside>