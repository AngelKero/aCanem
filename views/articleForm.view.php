<!DOCTYPE html>
<html lang="es">
<?php include_once "head.view.php"; ?>

<body>
    <?php include_once "header.view.php" ?>
    <main>
        <?php include_once "userInfo.view.php"; ?>
        <section class="main-of-page">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="article-public">
                <h5>Comparte algo!</h5>
                <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores ?>
                    </ul>
                </div>
                <?php endif ?>
                <div class="pregunta">
                    <label for="titulo">Titulo de tu articulo:</label>
                    <input type="text" name="titulo" id="titulo" maxlength="50">
                </div>
                <div class="pregunta">
                    <label for="texto">Escribe tu articulo:</label>
                    <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
                </div>
                <div class="pregunta">
                    <p for="">Adjuntar foto: Proximamente</p>
                </div>
                <div class="pregunta">
                    <input type="submit" value="Compartir 🖌">
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