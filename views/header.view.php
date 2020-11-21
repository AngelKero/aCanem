<header>
    <nav class="navigation">
        <div class="logo">
            <a href="index.php">
                <img src="resourses/favicon.svg" alt="logo canem">
                <div class="letters-logo">
                    <h1>aCanem</h1>
                    <h2>adopta</h2>
                </div>
            </a>
        </div>
        <form action="" method="post" class="buscador">
            <input type="search" name="search" id="search">
            <div class="search-icon">
                <a href="#"><i class="fas fa-search"></i></a>
            </div>
        </form>
        <ul class="buttons-navigation">
            <li class="button-home">
                <a href="index.php">
                    <p class="icon-button active"><i class="fas fa-home"></i></p>
                    <p class="text-button">Inicio</p>
                </a>
            </li>
            <li class="button-messages">
                <a href="<?php echo isset($_SESSION['usuario']) ? '#' : 'login.php'; ?>">
                    <p class="icon-button"><i class="fas fa-inbox"></i></p>
                    <p class="text-button">Mensajes</p>
                </a>
            </li>
            <li class="button-notifications">
                <a href="<?php echo isset($_SESSION['usuario']) ? '#' : 'login.php'; ?>">
                    <p class="icon-button"><i class="fas fa-bell"></i></p>
                    <p class="text-button">Notificaciones</p>
                </a>
            </li>
            <li class="button-options">
                <a href="<?php echo isset($_SESSION['usuario']) ? '#' : 'login.php'; ?>">
                    <p class="icon-button"><i class="fas fa-bars"></i></p>
                    <p class="text-button">Mas opciones</p>
                </a>
            </li>
        </ul>
    </nav>
</header>