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
    <title>aCanem | Comparte y adopta Mascotas</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Roboto:wght@300;400;700&family=Stardos+Stencil&display=swap" rel="stylesheet">
    <!-- Fontasome -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <!-- Normalize -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Styles -->
    <link rel="stylesheet" href="sass/master.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav class="navigation">
            <div class="logo">
                <a href="#">
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
                    <a href="index.html">
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
                    <img src="img/profile/profile2.png" alt="" width="300">
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
            <div class="publish-article">
            </div>
            <div class="filters">
            </div>
            <div class="articles">
                <div class="group-articles">
                    <article class="type-sharing">
                        <div class="article-about-sharing">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Don peludo</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>2</span> horas</p>
                                </li>
                            </ul>
                            <ul class="buttons-comment-love">
                                <li class="icon-comment"><p><i class="far fa-comment-dots"></i></p></li>
                                <li class="icon-love"><p><i class="far fa-heart"></i></p></li>
                            </ul>
                        </div>
                        <div class="article-sharing-content-view">
                            <div class="article-sharing-text">
                                <h2 class="title-article">Titulo del articulo</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel voluptas accusantium quis ratione ducimus? Velit ratione quae consequatur, sequi sunt delectus eveniet id repudiandae in necessitatibus eius optio perferendis ullam ex sint quaerat quis odit voluptatibus fugit. Nesciunt ullam ad modi alias totam adipisci exercitationem officia doloremque ducimus! Fugiat tempore sit, aspernatur consequuntur vitae laudantium dolores quo culpa suscipit voluptates sed, maxime exercitationem modi illo temporibus aliquid perferendis magnam minus earum accusamus, nihil corrupti mollitia. Reprehenderit iure et voluptatibus natus, odio aut. Eligendi reiciendis numquam praesentium, omnis enim quis, nostrum tenetur provident aperiam doloremque ipsa voluptate minus, explicabo maiores sapiente!</p>
                            </div>
                            <div class="image-article-sharing">
                                <img src="img/articles/image1.jpg" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="type-adopt">
                        <div class="article-about-adopt">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Nombre de usuario</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>2</span> horas</p>
                                </li>
                            </ul>
                            <ul class="buttons-comment-love">
                                <li class="icon-comment"><p><i class="far fa-comment-dots"></i></p></li>
                                <li class="icon-love"><p><i class="far fa-heart"></i></p></li>
                            </ul>
                        </div>
                        <div class="article-adop-content-view">
                            <div class="about-pet">
                                <h4 class="name-pet">Nombre</h4>
                                <p class="about-pet">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore nostrum corporis quo quas id quasi mollitia rerum iste ipsa accusantium expedita, optio provident ipsam nobis maxime magni vel enim perspiciatis.</p>
                            </div>
                            <div class="image-reasons">
                                <div class="image-pet">
                                    <img src="img/articles/pet1.jpg" alt="">
                                </div>
                                <div class="reasons">
                                    <h5>En adopcion por:</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt qui et cupiditate placeat odit doloremque exercitationem sequi ad natus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="state-pet">
                            <h6>Estado: <span>Calle</span></h6>
                        </div>
                        <div class="get-pet">
                            <a href="views/pet.html"><i class="far fa-handshake"></i> Hazlo mio!!</a>
                        </div>
                    </article>
                    <article class="type-adopt">
                        <div class="article-about-adopt">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Nombre de usuario</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>2</span> horas</p>
                                </li>
                            </ul>
                            <ul class="buttons-comment-love">
                                <li class="icon-comment"><p><i class="far fa-comment-dots"></i></p></li>
                                <li class="icon-love"><p><i class="far fa-heart"></i></p></li>
                            </ul>
                        </div>
                        <div class="article-adop-content-view">
                            <div class="about-pet">
                                <h4 class="name-pet">Nombre</h4>
                                <p class="about-pet">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore nostrum corporis quo quas id quasi mollitia rerum iste ipsa accusantium expedita, optio provident ipsam nobis maxime magni vel enim perspiciatis.</p>
                            </div>
                            <div class="image-reasons">
                                <div class="image-pet">
                                    <img src="img/articles/pet2.jpg" alt="">
                                </div>
                                <div class="reasons">
                                    <h5>En adopcion por:</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt qui et cupiditate placeat odit doloremque exercitationem sequi ad natus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="state-pet">
                            <h6>Estado: <span>Calle</span></h6>
                        </div>
                        <div class="get-pet">
                            <a href="views/pet.html"><i class="far fa-handshake"></i> Hazlo mio!!</a>
                        </div>
                    </article>
                </div>
                <div class="group-articles">
                    <article class="type-sharing">
                        <div class="article-about-sharing">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Don peludo</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>2</span> horas</p>
                                </li>
                            </ul>
                            <ul class="buttons-comment-love">
                                <li class="icon-comment"><p><i class="far fa-comment-dots"></i></p></li>
                                <li class="icon-love"><p><i class="far fa-heart"></i></p></li>
                            </ul>
                        </div>
                        <div class="article-sharing-content-view">
                            <div class="article-sharing-text">
                                <h2 class="title-article">Titulo del articulo</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel voluptas accusantium quis ratione ducimus? Velit ratione quae consequatur, sequi sunt delectus eveniet id repudiandae in necessitatibus eius optio perferendis ullam ex sint quaerat quis odit voluptatibus fugit. Nesciunt ullam ad modi alias totam adipisci exercitationem officia doloremque ducimus! Fugiat tempore sit, aspernatur consequuntur vitae laudantium dolores quo culpa suscipit voluptates sed, maxime exercitationem modi illo temporibus aliquid perferendis magnam minus earum accusamus, nihil corrupti mollitia. Reprehenderit iure et voluptatibus natus, odio aut. Eligendi reiciendis numquam praesentium, omnis enim quis, nostrum tenetur provident aperiam doloremque ipsa voluptate minus, explicabo maiores sapiente!</p>
                            </div>
                            <div class="image-article-sharing">
                                <img src="img/articles/image1.jpg" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="type-adopt">
                        <div class="article-about-adopt">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Nombre de usuario</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>2</span> horas</p>
                                </li>
                            </ul>
                            <ul class="buttons-comment-love">
                                <li class="icon-comment"><p><i class="far fa-comment-dots"></i></p></li>
                                <li class="icon-love"><p><i class="far fa-heart"></i></p></li>
                            </ul>
                        </div>
                        <div class="article-adop-content-view">
                            <div class="about-pet">
                                <h4 class="name-pet">Nombre</h4>
                                <p class="about-pet">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore nostrum corporis quo quas id quasi mollitia rerum iste ipsa accusantium expedita, optio provident ipsam nobis maxime magni vel enim perspiciatis.</p>
                            </div>
                            <div class="image-reasons">
                                <div class="image-pet">
                                    <img src="img/articles/pet3.jpg" alt="">
                                </div>
                                <div class="reasons">
                                    <h5>En adopcion por:</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt qui et cupiditate placeat odit doloremque exercitationem sequi ad natus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="state-pet">
                            <h6>Estado: <span>Calle</span></h6>
                        </div>
                        <div class="get-pet">
                            <a href="views/pet.html"><i class="far fa-handshake"></i> Hazlo mio!!</a>
                        </div>
                    </article>
                    <article class="type-adopt">
                        <div class="article-about-adopt">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Nombre de usuario</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>2</span> horas</p>
                                </li>
                            </ul>
                            <ul class="buttons-comment-love">
                                <li class="icon-comment"><p><i class="far fa-comment-dots"></i></p></li>
                                <li class="icon-love"><p><i class="far fa-heart"></i></p></li>
                            </ul>
                        </div>
                        <div class="article-adop-content-view">
                            <div class="about-pet">
                                <h4 class="name-pet">Nombre</h4>
                                <p class="about-pet">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore nostrum corporis quo quas id quasi mollitia rerum iste ipsa accusantium expedita, optio provident ipsam nobis maxime magni vel enim perspiciatis.</p>
                            </div>
                            <div class="image-reasons">
                                <div class="image-pet">
                                    <img src="img/articles/pet4.jpg" alt="">
                                </div>
                                <div class="reasons">
                                    <h5>En adopcion por:</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt qui et cupiditate placeat odit doloremque exercitationem sequi ad natus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="state-pet">
                            <h6>Estado: <span>Calle</span></h6>
                        </div>
                        <div class="get-pet">
                            <a href="views/pet.html"><i class="far fa-handshake"></i> Hazlo mio!!</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
</body>
</html>