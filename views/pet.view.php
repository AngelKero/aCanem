<!DOCTYPE html>
<html lang="es">
<?php include_once "head.view.php"; ?>
<body>
    <?php include_once "header.view.php" ?>
    <main>
        <?php include_once "userInfo.view.php"; ?>
        <section class="main-of-page">
            <div class="articles">
                <div class="group-articles">
                    <article class="type-adopt">
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
                    </article>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "navegacionMovil.view.php"; ?>
</body>
</html>