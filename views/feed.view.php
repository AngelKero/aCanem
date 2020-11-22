<!DOCTYPE html>
<html lang="es">
<?php include_once "head.view.php"; ?>

<body>
    <?php include_once "header.view.php" ?>
    <main>
        <?php include_once "userInfo.view.php"; ?>
        <section class="main-of-page">
            <div class="publish-article">
                <h4>Publica algo o da en adopcion <span>❤</span></h4>
                <div class="buttons-publish">
                    <a href="articleForm.php" class="button button-article">🖥Publicar algo📱</a>
                    <a href="petForm.php" class="button button-pet">🐾Dar en adopcion🦴</a>
                </div>
            </div>
            <!-- <div class="filters"> -->
            <!-- </div> -->
            <div class="articles">
                <?php include "paginacion.view.php"; ?>
                <?php if($empty){
                    echo '<h3 style="font-size: 32px;">Ya no hay nada que cargar :(</h3><br><br>
                    <h2>Error 404</h2>';
                } 
                ?>
                <?php 
                    $articuloI = 0; //Iterador de articulo
                    $mascotaI = 0;
                ?>
                <?php for ($ronda = 0; $ronda < ($home_config['postTotales'] / 3); $ronda++) : ?>
                <div class="group-articles">
                    <?php if(isset($articulos[$articuloI])): ?>
                    <article class="type-sharing" data-aos="fade-left">
                        <div class="article-about-sharing">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="resourses/usuario.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">
                                        <?php echo obtener_NombreUsuario($articulos[$articuloI]['id_user'], $conexion) ?>
                                    </p>
                                </li>
                                <li class="article-time">
                                    <?php echo '<p>'.fecha($articulos[$articuloI]['fecha']).'</p>' ?>
                                </li>
                            </ul>
                            <ul class="buttons-comment-love">
                                <li class="icon-comment">
                                    <p><i class="far fa-comment-dots"></i></p>
                                </li>
                                <li class="icon-love">
                                    <p><i class="far fa-heart"></i></p>
                                </li>
                            </ul>
                        </div>
                        <div class="article-sharing-content-view">
                            <div class="article-sharing-text">
                                <h2 class="title-article"><?php echo $articulos[$articuloI]['titulo'] ?></h2>
                                <p><?php echo $articulos[$articuloI]['texto'] ?></p>
                            </div>
                            <div class="image-article-sharing">
                                <img src="images/banner.png" alt="">
                            </div>
                        </div>
                    </article>
                    <?php endif ?>
                    <?php for($i = 0; $i < 2; $i++): ?> <!--Se dibujan dos a la vez-->
                        <?php if(isset($mascotas[$mascotaI])): ?>
                        <article class="type-adopt" data-aos="fade-left">
                            <div class="article-about-adopt">
                                <ul class="user-time">
                                    <li class="user-info-article">
                                        <div class="image-profile">
                                            <img src="resourses/usuario.png" alt="" width="40">
                                        </div>
                                        <p class="user-name"><?php echo obtener_NombreUsuario($mascotas[$mascotaI]['id_user'], $conexion) ?></p>
                                    </li>
                                    <li class="article-time">
                                        <?php echo '<p>'.fecha($mascotas[$mascotaI]['fecha']).'</p>' ?>
                                    </li>
                                </ul>
                                <ul class="buttons-comment-love">
                                    <li class="icon-comment">
                                        <p><i class="far fa-comment-dots"></i></p>
                                    </li>
                                    <li class="icon-love">
                                        <p><i class="far fa-heart"></i></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="article-adop-content-view">
                                <div class="about-pet">
                                    <h4 class="name-pet"><?php echo $mascotas[$mascotaI]['nombre'] ?></h4>
                                    <p class="about-pet"><?php echo $mascotas[$mascotaI]['info'] ?></p>
                                </div>
                                <div class="image-reasons">
                                    <div class="image-pet">
                                        <img src="images/banner1.png" alt="">
                                    </div>
                                    <div class="reasons">
                                        <h5>En adopcion: </h5>
                                        <p><?php echo $mascotas[$mascotaI]['motivos'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="get-pet">
                                <a href="pet.php?pet=<?php echo $mascotas[$mascotaI]['id_mascota'] ?>"><i class="far fa-handshake"></i> Hazlo mio!!</a>
                            </div>
                        </article>
                        <?php endif ?>
                        <?php $mascotaI++; ?>
                    <?php endfor ?>
                </div>
                <?php 
                    $articuloI++;
                ?>
                <?php endfor ?>
                <?php include "paginacion.view.php"; ?>
            </div>
        </section>
    </main>
    <?php include_once "navegacionMovil.view.php"; ?>

    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>
</body>

</html>