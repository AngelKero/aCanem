<!DOCTYPE html>
<html lang="es">
<?php include_once "head.view.php"; ?>

<body>
    <?php include_once "header.view.php" ?>
    <main>
        <?php include_once "userInfo.view.php"; ?>
        <section class="main-of-page">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"
                class="article-public pet-form">
                <h5>Dar en adopcion</h5>
                <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores ?>
                    </ul>
                </div>
                <?php endif ?>
                <div class="pregunta">
                    <label for="nombre">Nombre de la mascota:</label>
                    <input type="text" name="nombre" id="nombre" maxlength="50">
                </div>
                <div class="pregunta">
                    <label for="info">Descripcion de la mascota:</label>
                    <textarea name="info" id="info" cols="30" rows="10" maxlength="1500"></textarea>
                </div>
                <div class="pregunta">
                    <label for="motivos">¿Por que esta en adopcion?</label>
                    <textarea name="motivos" id="motivos" cols="30" rows="10" maxlength="1500"></textarea>
                </div>
                <div class="pregunta">
                    <label for="peso">Peso[Kilos]:</label>
                    <input type="number" name="peso" id="peso" maxlength="5">
                </div>
                <div class="pregunta">
                    <label for="edad">Edad[Años]:</label>
                    <input type="number" name="edad" id="edad" maxlength="2">
                </div>
                <div class="pregunta">
                    <label for="nombre">Raza:</label>
                    <input type="text" name="raza" id="nombre" maxlength="50">
                </div>
                <div class="pregunta radio">
                    <label for="">Sexo:</label>
                    <div class="respuestas">
                        <input type="radio" name="sexo" value="sexo-macho" id="sexo-macho">
                        <label for="sexo-macho">Macho</label>
                        <input type="radio" name="sexo" value="sexo-hembra" id="sexo-hembra" checked>
                        <label for="sexo-hembra">Hembra</label>
                    </div>
                </div>
                <div class="pregunta radio">
                    <label for="">¿Esta esterelizado?</label>
                    <div class="respuestas">
                        <input type="radio" name="estelizado" value="si-estelizado" id="si-estelizado">
                        <label for="si-estelizado">Si</label>
                        <input type="radio" name="estelizado" value="no-estelizado" id="no-estelizado" checked>
                        <label for="no-estelizado">No</label>
                    </div>
                </div>
                <div class="pregunta radio">
                    <label for="">¿Esta desparazitado?</label>
                    <div class="respuestas">
                        <input type="radio" name="desparazitado" value="si-desparazitado" id="si-desparazitado">
                        <label for="si-desparazitado">Si</label>
                        <input type="radio" name="desparazitado" value="no-desparazitado" id="no-desparazitado" checked>
                        <label for="no-desparazitado">No</label>
                    </div>
                </div>
                <div class="pregunta radio">
                    <label for="">¿Sociable con niños?</label>
                    <div class="respuestas">
                        <input type="radio" name="ninos" value="si-ninos" id="si-ninos">
                        <label for="si-ninos">Si</label>
                        <input type="radio" name="ninos" value="no-ninos" id="no-ninos" checked>
                        <label for="no-ninos">No</label>
                    </div>
                </div>
                <div class="pregunta radio">
                    <label for="">¿Sociable con otras mascotas?</label>
                    <div class="respuestas">
                        <input type="radio" name="mascotas" value="si-mascotas" id="si-mascotas">
                        <label for="si-mascotas">Si</label>
                        <input type="radio" name="mascotas" value="no-mascotas" id="no-mascotas" checked>
                        <label for="no-mascotas">No</label>
                    </div>
                </div>
                <div class="pregunta opciones">
                    <label for="tipo">Tipo de mascota</label>
                    <select name="tipo" id="tipo" required>
                        <option value="Canino">Canino</option>
                        <option value="Felino">Felino</option>
                        <option value="Conejo">Conejo</option>
                        <option value="Ave">Ave</option>
                        <option value="Reptil">Reptil</option>
                        <option value="Insecto">Insecto</option>
                    </select>
                </div>
                <div class="pregunta opciones">
                    <label for="tamano">Tamaño:</label>
                    <select name="tamano" id="tamano" required>
                        <option value="small">Pequeño</option>
                        <option value="medium">Mediano</option>
                        <option value="big">Grande</option>
                    </select>
                </div>
                <div class="pregunta opciones">
                    <label for="espacio">Espacio requerido:</label>
                    <select name="espacio" id="espacio" required>
                        <option value="small">Pequeño</option>
                        <option value="medium">Mediano</option>
                        <option value="big">Grande</option>
                    </select>
                </div>
                <div class="pregunta opciones">
                    <label for="energia">¿Cuanta energia tiene la mascota?</label>
                    <select name="energia" id="energia" required>
                        <option value="small">Poca</option>
                        <option value="medium">Mediana</option>
                        <option value="big">Mucha</option>
                    </select>
                </div>
                <div class="pregunta opciones">
                    <label for="ejercicio">¿Cuanto ejercicio requiere?</label>
                    <select name="ejercicio" id="ejercicio" required>
                        <option value="small">Nada</option>
                        <option value="medium">Un poco</option>
                        <option value="big">Mucho</option>
                    </select>
                </div>
                <div class="pregunta">
                    <p for="">Adjuntar foto: Proximamente</p>
                </div>
                <div class="pregunta">
                    <input type="submit" value="Publicar 🐾">
                </div>
                <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores ?>
                    </ul>
                </div>
                <?php endif ?>
            </form>
        </section>
    </main>
    <?php include_once "navegacionMovil.view.php"; ?>
</body>

</html>