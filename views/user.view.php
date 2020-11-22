<!DOCTYPE html>
<html lang="es">
<?php include_once "head.view.php"; ?>

<body>
    <?php include_once "header.view.php" ?>
    <main>
        <?php include_once "userInfo.view.php"; ?>
        <section class="main-of-page">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <?php if(!empty($errores)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores ?>
                        </ul>
                    </div>
                <?php endif ?>
                <label for="name">Nombre de Usuario:</label>
                <input type="text" name="name" id="name" value="<?php echo $user[0]['username'] ?>">
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" value="<?php echo $user[0]['edad'] ?>">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $user[0]['email'] ?>">
                <div class="cuenta">
                    <label for="cuenta">¿Cual es tu causa?</label>
                    <select name="cuenta" id="cuenta" required>
                        <option value="Individual">Individual</option>
                        <option value="Fundacion">Fundacion</option>
                    </select>
                </div>
                <p>
                    <--Domicilio-->
                </p>
                <label for="estado">Estado de la republica:</label>
                <input type="text" name="estado" id="estado" value="<?php echo $user[0]['estado'] ?>">
                <label for="ciudad">Ciudad o municipio:</label>
                <input type="text" name="ciudad" id="ciudad" value="<?php echo $user[0]['ciudad'] ?>">
                <label for="calle">Calle:</label>
                <input type="text" name="calle" id="calle" value="<?php echo $user[0]['calle'] ?>">
                <label for="numero">Numero Ext:</label>
                <input type="text" name="numero" id="numero" value="<?php echo $user[0]['numero'] ?>">
                <input type="submit" value="Actualizar datos">
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

    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>
</body>

</html>