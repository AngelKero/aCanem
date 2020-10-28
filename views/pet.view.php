<!DOCTYPE html>
<html lang="es">
<?php include_once "head.view.php"; ?>

<body>
    <?php include_once "header.view.php" ?>
    <main class="pet">
        <?php include_once "userInfo.view.php"; ?>
        <div class="container">
            <article class="pet-page type-adopt">
                <div class="article-adop-content-view">
                    <div class="about-pet">
                        <div class="pet-info">
                            <h4 class="name-pet">Dogger 3000</h4>
                            <p class="pet-talk">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore
                                nostrum corporis quo quas id quasi mollitia rerum iste ipsa accusantium expedita,
                                optio provident ipsam nobis maxime magni vel enim perspiciatis.</p>
                        </div>
                        <div class="reasons info-block">
                            <h5>En adopcion: </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt qui et
                                cupiditate placeat odit doloremque exercitationem sequi ad natus.</p>
                        </div>
                        <div class="reasons info-block">
                            <h5>Caracteristicas: <i class="fas fa-paw"></i></h5>
                            <p>
                                <span style="font-weight: bolder;">Tipo</span> | Canino --
                                <span style="font-weight: bolder;">Raza</span> | Meztiza --
                                <span style="font-weight: bolder;">Peso</span> | 1.3kg --
                                <span style="font-weight: bolder;">Tamaño</span> | Pequeño --
                                <span style="font-weight: bolder;">Edad</span> | 4 años <br><br>
                                <span style="font-weight: bolder;">Sociable con Perros</span> | Si <br><br>
                                <span style="font-weight: bolder;">Sociable con Niños</span> | Si <br><br>
                                <span style="font-weight: bolder;">Nivel de ejercicio</span> | Frecuente - Diario <br>
                                <br>
                                <span style="font-weight: bolder;">Energia</span> | Grande <br><br>
                                <span style="font-weight: bolder;">Espacio Requerido</span> | Mediano <br> <br>
                                <span style="font-weight: bolder;">Sexo</span> | Macho --
                                <span style="font-weight: bolder;">Esterilizado</span> | No --
                                <span style="font-weight: bolder;">Desparasitado</span> | Si <br><br>
                            </p>
                        </div>
                    </div>
                    <div class="image-contact">
                        <div class="image-pet">
                            <img src="img/articles/pet1.jpg" alt="">
                        </div>
                    </div>
                    <div class="contacto info-block">
                        <h5>Mi dueño: <i class="fas fa-user"></i></h5>
                        <p>
                            <span style="font-weight: bolder;">Nombre</span> | Don mamerto <br><br>
                            <span style="font-weight: bolder;">Causa</span> | Ninguna <br><br>
                            <span style="font-weight: bolder;">Email</span> | don.mamas@outlook.com <br><br>
                            <span style="font-weight: bolder;">Telefono</span> | 3325094748 <br><br>
                            <span style="font-weight: bolder;">Facebook</span> |
                            https://www.facebook.com/angeladrian.zaragozarodriguez <br><br>
                        </p>
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
            <article class="pet-page type-adopt adopt-form">
                <h4 class="title-get">Hazlo tuyo</h4>
                <form action="" method="post" class="formulario">
                    <input type="text" name="" id="" placeholder="Ingresa tu nombre" maxlength="100" required><br>
                    <input type="email" name="" id="" placeholder="Ingresa tu email" maxlength="150" required><br>
                    <input type="tel" name="" id="" placeholder="Ingresa tu telefono" maxlength="20" required><br>
                    <textarea name="" id="" cols="30" rows="5"
                        placeholder="¿Cual es la razon por la que quieres adoptar?" required></textarea><br>

                    <div class="casa">
                        <label for="casa">Tipo de casa:</label>
                        <select name="" id="casa" required>
                            <option value="">Departamento</option>
                            <option value="">Unifamiliar</option>
                            <option value="">Plurifamiliar</option>
                            <option value="">Estudio</option>
                            <option value="">Duplex</option>
                        </select>
                    </div>

                    <div class="patio">
                        <label for="patio">¿Cuentas con patio?</label>
                        <div class="opciones">
                            <input type="radio" name="patio" value="si" id="si">
                            <label for="si">Si</label>
                            <input type="radio" name="patio" value="no" id="no" checked>
                            <label for="no">No</label>
                        </div>
                    </div>

                    <input type="number" name="" id="" placeholder="¿Cuantas personas viven en tu casa" required>

                    <div class="animales">
                        <label for="animales">¿Tienes otros animales en tu casa?</label>
                        <div class="opciones">
                            <input type="radio" name="animales" value="si" id="si-ani">
                            <label for="si-ani">Si</label>
                            <input type="radio" name="animales" value="no" id="no-ani" checked>
                            <label for="no-ani">No</label>
                        </div>
                        <input type="text" name="" id="" placeholder="¿Cuales?">
                    </div>

                    <input type="text" name="" id="" placeholder="¿Donde dormira tu nueva mascota?">

                    <input type="text" name="" id="" placeholder="¿Cuanto tiempo pasara solo la nueva mascota?">

                    <div class="ninos">
                        <label for="niños">¿Tienes niños?</label>
                        <div class="opciones">
                            <input type="radio" name="niños" value="si" id="si-ni">
                            <label for="si-ni">Si</label>
                            <input type="radio" name="niños" value="no" id="no-ni" checked>
                            <label for="no-ni">No</label>
                        </div>
                        <input type="number" name="" id="" placeholder="¿Cuantos?">
                    </div>

                    <div class="renta">
                        <label for="renta">¿Tienes casa propia?</label>
                        <select name="" id="renta" required>
                            <option value="">Rentada</option>
                            <option value="">Casa Propia</option>
                        </select>
                    </div>

                    <div class="foto">
                        <label for="foto">Sube una foto de un documento que te valide como persona:</label>
                        <input type="file" name="" id="foto" required>
                    </div>

                    <div class="nacimiento">
                        <label for="nacimiento">Fecha de nacimiento</label>
                        <input type="date" name="" id="nacimiento" required>
                    </div>

                    <div class="terminos">
                        <input type="checkbox" name="terminos" value="terminos" id="terminos">
                        <label for="terminos">Acepto terminos y condiciones</label>
                    </div>

                    <input type="submit" value="Enviar Formulario">
                </form>
            </article>
        </div>
    </main>
    <?php include_once "navegacionMovil.view.php"; ?>
</body>

</html>