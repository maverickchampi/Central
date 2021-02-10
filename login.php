<!DOCTYPE html>
<html lang="es">
<head>
<!-- Tags requeridos -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Central</title>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
	href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap"
	rel="stylesheet">
<!-- Css -->
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/central-estilo.css">
<link rel="shorcut icon" href="assets/images/logo.ico">
<link rel="stylesheet" href="assets/css/style-login.css" />
<!-- Alertify Css -->
<link href="assets/css/default.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/alertify.min.css" rel="stylesheet"
	type="text/css" />
</head>
<body>
    <?php include("structure/header.php")?>
	<script type="text/javascript">
		var elemento = document.getElementsByClassName("menu-link");
		elemento[4].className += " active";
	</script>
	<!-- Login -->
	<div class="container_login">
		<div class="forms-container_login">
			<div class="signin-signup">
				<!-- <form action="su" method="post" class="form sign-in-form" -->
				<form class="form sign-in-form"
					name="frmIngresar">
					<h2 class="title">Inicie Sesión</h2>
					<div class="input-field">
						<i class="fas fa-user"></i> <input type="text" name="txtUser"
							placeholder="Ingrese usuario" maxlength="10" required />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i> <input type="password"
							name="txtPassword" maxlength="10"
							placeholder="Ingrese contraseña" required />
					</div>
					<button type="submit" name="btn" value="login" class="button solid">Ingresar</button>
					<p class="social-text">Visítenos</p>
					<div class="social-media">
						<a href="https://www.instagram.com/central.restaurantesaludable\"
							class="social-icon"> <i class="fab fa-instagram"></i>
						</a> <a
							href="https://www.facebook.com/Restaurante-Central-106446624705369\"
							class="social-icon"> <i class="fab fa-facebook-f"></i>
						</a> <a href="https://twitter.com/Central31411012\"
							class="social-icon"> <i class="fab fa-twitter"></i>
						</a>
					</div>
				</form>
				<!-- <form action="su" method="post" class="form sign-up-form"> -->
				<form class="form sign-up-form">
					<h2 class="title">Regístrece</h2>
					<div class="input-field">
						<i class="fas fa-signature"></i> <input type="text" name="txtName"
							placeholder="Ingrese nombre" maxlength="20" required />
					</div>
					<div class="input-field">
						<i class="fas fa-signature"></i> <input type="text"
							name="txtLastName" placeholder="Ingrese apellido" maxlength="20"
							required />
					</div>
					<div class="input-field">
						<i class="fas fa-user"></i> <input type="text" name="txtUser"
							placeholder="Ingrese usuario" maxlength="10" required />
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i> <input type="email"
							name="txtEmail" placeholder="Ingrese correo" maxlength="30"
							required />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i> <input type="password"
							name="txtPassword" placeholder="Ingrese contraseña"
							maxlength="10" required />
					</div>
					<button type="submit" name="btn" value="register"
						class="button solid">Registrar</button>
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>¿ No tienes una cuenta ?</h3>
					<p>Entonces crea una cuenta gratiutamente.</p>
					<button class="button transparent" id="sign-up-btn">
						Regístrate</button>
				</div>
				<img src="assets/images/login.svg" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>¿ Ya te registraste ?</h3>
					<p>Entonces inicie sesión.</p>
					<button class="button transparent" id="sign-in-btn">
						Inicie sesión</button>
				</div>
				<img src="assets/images/register.svg" class="image" alt="" />
			</div>
		</div>
	</div>
	<!-- //Login -->


	<!-- Js scripts -->
	<script src="https://kit.fontawesome.com/905fa6d085.js"></script>
	<script src="assets/js/function.js"></script>
	<script src="assets/js/function-login.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/alertify.min.js" type="text/javascript"></script>
	<script src="assets/js/block.js"></script>
	<!-- //Js scripts -->
</body>
</html>