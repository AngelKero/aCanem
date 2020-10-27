<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Mascotas, Adopcion, Comparte, Experiencias">
    <meta name="description" content="Pagina dedicada a la adopcion de mascotas (perros, gatos, etc). aCanem es un intermediario entre el que quiere dar en adopcion y el que quiere adoptar.">
    <meta name="author" content="aCanem">
    <link rel="shortcut icon" href="resourses/favicon.svg" type="image/x-icon">
    <title>aCanem | Proceso de adopcion</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Roboto:wght@300;400;700&family=Stardos+Stencil&display=swap" rel="stylesheet">
    <!-- Fontasome -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <!-- Normalize -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- Styles -->
    <link rel="stylesheet" href="../sass/master.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <nav class="navigation">
            <div class="logo">
                <a href="#">
                    <img src="../resourses/favicon.svg" alt="logo canem">
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
                    <a href="../index.html">
                        <p class="icon-button"><i class="fas fa-home"></i></p>
                        <p class="text-button">Inicio</p>
                    </a>
                    
                </li>
                <li class="button-messages">
                    <a href="#">
                        <p class="icon-button"><i class="fas fa-inbox"></i></p>
                        <p class="text-button">Mensajes</p>
                    </a>
                </li>  
                <li class="button-notifications">
                    <a href="#">
                        <p class="icon-button"><i class="fas fa-bell"></i></p>
                        <p class="text-button">Notificaciones</p>
                    </a>
                </li>
                <li class="button-options">
                    <a href="#">
                        <p class="icon-button"><i class="fas fa-bars"></i></p>
                        <p class="text-button">Mas opciones</p>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <aside class="info">
            <a href="#" class="settings-user">Ajustes de usuario  <i class="fas fa-cog"></i></a>
            <section class="info-user">
                <div class="image-profile">
                    <img src="../img/profile/profile2.png" alt="" width="300">
                </div>
                <h3 class="user-name">Don bobino</h3>
                <h4 class="user-type">Individual</h4>
                <div class="user-level-info">
                    <h4 class="level">Nivel</h4>
                    <p class="user-level">Croqueta</p>
                    <p class="icon-level"><i class="fas fa-paw"></i></p>
                    <a href="#">¿Como funcionan los niveles?</a>
                </div>
                <div class="user-stadistics">
                    <p class="user-pets">Mis mascotas: <span id="num-pets">2</span></p>
                    <p class="user-pets">He ayudado: <span id="num-helps">1</span></p>
                    <p class="user-pets">Mis contribuciones: <span id="num-contributions">25</span></p>
                </div>
            </section>
        </aside>
        <section class="main-of-page">
            <br>
        </section>
    </main>
</body>
</html>