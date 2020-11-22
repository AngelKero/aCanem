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
            </div>
            <div class="articles">
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
                                        <img src="img/profile/profile1.png" alt="" width="40">
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
                                <img src="img/articles/image1.jpg" alt="">
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
                                            <img src="img/profile/profile1.png" alt="" width="40">
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
                                        <img src="img/articles/pet1.jpg" alt="">
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
                <!-- <div class="group-articles">
                    <article class="type-sharing" data-aos="fade-left">
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
                                <h2 class="title-article">Pequeñas guias de paseo</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel voluptas accusantium
                                    quis ratione ducimus? Velit ratione quae consequatur, sequi sunt delectus eveniet id
                                    repudiandae in necessitatibus eius optio perferendis ullam ex sint quaerat quis odit
                                    voluptatibus fugit. Nesciunt ullam ad modi alias totam adipisci exercitationem
                                    officia doloremque ducimus! Fugiat tempore sit, aspernatur consequuntur vitae
                                    laudantium dolores quo culpa suscipit voluptates sed, maxime exercitationem modi
                                    illo temporibus aliquid perferendis magnam minus earum accusamus, nihil corrupti
                                    mollitia. Reprehenderit iure et voluptatibus natus, odio aut. Eligendi reiciendis
                                    numquam praesentium, omnis enim quis, nostrum tenetur provident aperiam doloremque
                                    ipsa voluptate minus, explicabo maiores sapiente!</p>
                            </div>
                            <div class="image-article-sharing">
                                <img src="img/articles/image1.jpg" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="type-adopt" data-aos="fade-left">
                        <div class="article-about-adopt">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Agustin</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>7</span> horas</p>
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
                                <h4 class="name-pet">Dogger 3000</h4>
                                <p class="about-pet">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore
                                    nostrum corporis quo quas id quasi mollitia rerum iste ipsa accusantium expedita,
                                    optio provident ipsam nobis maxime magni vel enim perspiciatis.</p>
                            </div>
                            <div class="image-reasons">
                                <div class="image-pet">
                                    <img src="img/articles/pet1.jpg" alt="">
                                </div>
                                <div class="reasons">
                                    <h5>En adopcion: </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt qui et
                                        cupiditate placeat odit doloremque exercitationem sequi ad natus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="get-pet">
                            <a href="pet.php"><i class="far fa-handshake"></i> Hazlo mio!!</a>
                        </div>
                    </article>
                    <article class="type-adopt" data-aos="fade-left">
                        <div class="article-about-adopt">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Sherk</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>4</span> dias</p>
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
                                <h4 class="name-pet">Michufa</h4>
                                <p class="about-pet">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore
                                    nostrum corporis quo quas id quasi mollitia rerum iste ipsa accusantium expedita,
                                    optio provident ipsam nobis maxime magni vel enim perspiciatis.</p>
                            </div>
                            <div class="image-reasons">
                                <div class="image-pet">
                                    <img src="img/articles/pet3.jpg" alt="">
                                </div>
                                <div class="reasons">
                                    <h5>En adopcion por:</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt qui et
                                        cupiditate placeat odit doloremque exercitationem sequi ad natus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="get-pet">
                            <a href="pet.php"><i class="far fa-handshake"></i> Hazlo mio!!</a>
                        </div>
                    </article>
                </div>
                <div class="group-articles">
                    <article class="type-sharing" data-aos="fade-left">
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
                                <h2 class="title-article">Pequeñas guias de paseo</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel voluptas accusantium
                                    quis ratione ducimus? Velit ratione quae consequatur, sequi sunt delectus eveniet id
                                    repudiandae in necessitatibus eius optio perferendis ullam ex sint quaerat quis odit
                                    voluptatibus fugit. Nesciunt ullam ad modi alias totam adipisci exercitationem
                                    officia doloremque ducimus! Fugiat tempore sit, aspernatur consequuntur vitae
                                    laudantium dolores quo culpa suscipit voluptates sed, maxime exercitationem modi
                                    illo temporibus aliquid perferendis magnam minus earum accusamus, nihil corrupti
                                    mollitia. Reprehenderit iure et voluptatibus natus, odio aut. Eligendi reiciendis
                                    numquam praesentium, omnis enim quis, nostrum tenetur provident aperiam doloremque
                                    ipsa voluptate minus, explicabo maiores sapiente!</p>
                            </div>
                            <div class="image-article-sharing">
                                <img src="img/articles/image1.jpg" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="type-adopt" data-aos="fade-left">
                        <div class="article-about-adopt">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Agustin</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>7</span> horas</p>
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
                                <h4 class="name-pet">Dogger 3000</h4>
                                <p class="about-pet">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore
                                    nostrum corporis quo quas id quasi mollitia rerum iste ipsa accusantium expedita,
                                    optio provident ipsam nobis maxime magni vel enim perspiciatis.</p>
                            </div>
                            <div class="image-reasons">
                                <div class="image-pet">
                                    <img src="img/articles/pet1.jpg" alt="">
                                </div>
                                <div class="reasons">
                                    <h5>En adopcion: </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt qui et
                                        cupiditate placeat odit doloremque exercitationem sequi ad natus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="get-pet">
                            <a href="pet.php"><i class="far fa-handshake"></i> Hazlo mio!!</a>
                        </div>
                    </article>
                    <article class="type-adopt" data-aos="fade-left">
                        <div class="article-about-adopt">
                            <ul class="user-time">
                                <li class="user-info-article">
                                    <div class="image-profile">
                                        <img src="img/profile/profile1.png" alt="" width="40">
                                    </div>
                                    <p class="user-name">Sherk</p>
                                </li>
                                <li class="article-time">
                                    <p>Hace <span>4</span> dias</p>
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
                                <h4 class="name-pet">Michufa</h4>
                                <p class="about-pet">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore
                                    nostrum corporis quo quas id quasi mollitia rerum iste ipsa accusantium expedita,
                                    optio provident ipsam nobis maxime magni vel enim perspiciatis.</p>
                            </div>
                            <div class="image-reasons">
                                <div class="image-pet">
                                    <img src="img/articles/pet3.jpg" alt="">
                                </div>
                                <div class="reasons">
                                    <h5>En adopcion por:</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt qui et
                                        cupiditate placeat odit doloremque exercitationem sequi ad natus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="get-pet">
                            <a href="pet.php"><i class="far fa-handshake"></i> Hazlo mio!!</a>
                        </div>
                    </article>
                </div> -->
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