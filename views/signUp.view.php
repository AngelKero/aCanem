<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Registro Cuenta | aCanem</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<!-- /login-section -->

	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<h1>Registrate para adoptar</h1>
				<!-- <a class="logo" href="index.php">
					<img src="resourses/favicon.svg" alt="Your logo" title="Your logo" style="height:50px;" />
				</a> -->
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one">aCanem</h6>
							<div class="speci-login first-look">
								<a href="index.php">
									<img src="resourses/favicon.svg" alt="" class="img-responsive" height="37px">
								</a>
							</div>
						</div>
						<div class="bottom-content">
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
								<input type="email" name="email" class="input-form" placeholder="Correo Electronico"
									required="required" />
								<input type="text" name="name" class="input-form" placeholder="Nombre Usuario"
									required="required" />
								<input type="number" name="date" class="input-form" placeholder="Edad"
									required="required" />
								<input type="password" name="password" class="input-form" placeholder="Nueva contraseña"
									required="required" />
								<input type="password" name="password-repeat" class="input-form"
									placeholder="Repite tu contraseña" required="required" />

								<!-- Si hay errores se imprimen -->
								<?php if(!empty($errores)): ?>
								<div class="error">
									<ul>
										<?php echo $errores ?>
									</ul>
								</div>
								<?php endif ?>
								
								<button type="submit" class="loginhny-btn btn">Registrarse</button>
							</form>
							<p>¿Ya tienes una cuenta? <a href="login.php">Entra ahora mismo!</a></p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //login-section -->
</body>

</html>