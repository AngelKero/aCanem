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
                            <h4 class="name-pet"><?php echo $articulo['nombre'] ?></h4>
                            <p class="pet-talk"><?php echo $articulo['info'] ?></p>
                        </div>
                        <div class="reasons info-block">
                            <h5>En adopcion: </h5>
                            <p><?php echo $articulo['motivos'] ?></p>
                        </div>
                        <div class="reasons info-block">
                            <h5>Caracteristicas: <i class="fas fa-paw"></i></h5>
                            <p>
                                <span style="font-weight: bolder;">Tipo</span> | <?php echo $articulo['tipo'] ?> <br>
                                <span style="font-weight: bolder;">Raza</span> | <?php echo $articulo['raza'] ?> <br>
                                <span style="font-weight: bolder;">Peso</span> | <?php echo $articulo['peso'] ?> <br>
                                <span style="font-weight: bolder;">Tamaño</span> | <?php echo $articulo['tamano'] ?>
                                <br>
                                <span style="font-weight: bolder;">Edad</span> | <?php echo $articulo['edad'] ?>
                                <br><br>
                                <span style="font-weight: bolder;">Sociable con Perros</span> |
                                <?php echo $articulo['mascotas'] ?> <br>
                                <span style="font-weight: bolder;">Sociable con Niños</span> |
                                <?php echo $articulo['ninos'] ?> <br><br>
                                <span style="font-weight: bolder;">Nivel de ejercicio</span> |
                                <?php echo $articulo['ejercicio'] ?> <br>
                                <span style="font-weight: bolder;">Energia</span> | <?php echo $articulo['energia'] ?>
                                <br>
                                <span style="font-weight: bolder;">Espacio Requerido</span> |
                                <?php echo $articulo['raza'] ?> <br><br>
                                <span style="font-weight: bolder;">Sexo</span> | <?php echo $articulo['sexo'] ?> <br>
                                <span style="font-weight: bolder;">Esterilizado</span> |
                                <?php echo $articulo['esterelizado'] ?> <br>
                                <span style="font-weight: bolder;">Desparasitado</span> |
                                <?php echo $articulo['desparazitado'] ?>
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
                            <span style="font-weight: bolder;">Nombre</span> | <?php echo $dueño['username'] ?> <br><br>
                            <span style="font-weight: bolder;">Causa</span> | <?php echo $dueño['tipoCuenta'] ?>
                            <br><br>
                            <span style="font-weight: bolder;">Email</span> | <?php echo $dueño['email'] ?> <br><br>
                        </p>
                    </div>
                </div>
                <div class="article-about-adopt">
                    <ul class="user-time">
                        <li class="user-info-article">
                            <div class="image-profile">
                                <img src="img/profile/profile1.png" alt="" width="40">
                            </div>
                            <p class="user-name"><?php echo obtener_NombreUsuario($dueño['id_user'], $conexion) ?></p>
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
                <form action="<?php echo htmlspecialchars('solicitud.php') ?>" method="POST" class="formulario">
                    <?php if(!empty($errores)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores ?>
                        </ul>
                    </div>
                    <?php endif ?>
                    <input type="text" name="nombre" id="" placeholder="Ingresa tu nombre" maxlength="100" required><br>
                    <input type="email" name="email" id="" placeholder="Ingresa tu email" maxlength="150" required><br>
                    <input type="tel" name="telefono" id="" placeholder="Ingresa tu telefono" maxlength="20"
                        required><br>
                    <textarea name="razones" id="" cols="30" rows="5"
                        placeholder="¿Cual es la razon por la que quieres adoptar?" required></textarea><br>

                    <div class="casa">
                        <label for="casa">Tipo de casa:</label>
                        <select name="casa" id="casa" required>
                            <option value="Departamento">Departamento</option>
                            <option value="Unifamiliar">Unifamiliar</option>
                            <option value="Plurifamiliar">Plurifamiliar</option>
                            <option value="Estudio">Estudio</option>
                            <option value="Duplex">Duplex</option>
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

                    <input type="number" name="personas" id="" placeholder="¿Cuantas personas viven en tu casa"
                        required>

                    <div class="animales">
                        <label for="animales">¿Tienes otros animales en tu casa?</label>
                        <div class="opciones">
                            <input type="radio" name="animales" value="si" id="si-ani">
                            <label for="si-ani">Si</label>
                            <input type="radio" name="animales" value="no" id="no-ani" checked>
                            <label for="no-ani">No</label>
                        </div>
                        <input type="text" name="who" id="" placeholder="¿Cuales?">
                    </div>

                    <input type="text" name="rincon" id="" placeholder="¿Donde dormira tu nueva mascota?">

                    <input type="text" name="soledad" id="" placeholder="¿Cuanto tiempo pasara solo la nueva mascota?">

                    <div class="ninos">
                        <label for="niños">¿Tienes niños?</label>
                        <div class="opciones">
                            <input type="radio" name="ninos" value="si" id="si-ni">
                            <label for="si-ni">Si</label>
                            <input type="radio" name="ninos" value="no" id="no-ni" checked>
                            <label for="no-ni">No</label>
                        </div>
                        <input type="number" name="howmuch" id="" placeholder="¿Cuantos?">
                    </div>

                    <div class="renta">
                        <label for="renta">¿Tienes casa propia?</label>
                        <select name="propiedad" id="renta" required>
                            <option value="Rentada">Rentada</option>
                            <option value="Casa Propia">Casa Propia</option>
                        </select>
                    </div>

                    <!-- No disponible -->
                    <!-- <div class="foto">
                        <label for="foto">Sube una foto de un documento que te valide como persona:</label>
                        <input type="file" name="" id="foto" required>
                    </div> -->

                    <div class="nacimiento">
                        <label for="nacimiento">Fecha de nacimiento</label>
                        <input type="date" name="date" id="nacimiento" required>
                    </div>

                    <div class="terminos">
                        <input type="checkbox" name="terminos" value="terminos" id="terminos">
                        <label for="terminos">Acepto terminos y condiciones</label>
                    </div>

                    <input type="hidden" name="solicitante" value="<?php echo $user[0]['id_user'] ?>">
                    <input type="hidden" name="dueno" value="<?php echo $dueño['id_user'] ?>">
                    <input type="hidden" name="mascota" value="<?php echo $articulo['id_mascota'] ?>">
                    <?php if(!empty($errores)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores ?>
                        </ul>
                    </div>
                    <?php endif ?>

                    <input type="submit" value="Enviar Formulario">
                </form>
            </article>
        </div>
    </main>
    <?php include_once "navegacionMovil.view.php"; ?>
</body>

</html>