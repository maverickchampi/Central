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
</head>
<body>
	<?php include("structure/header.php")?>
	<script type="text/javascript">
		var elemento = document.getElementsByClassName("menu-link");
		elemento[0].className += " active";
	</script>
	<!-- Main -->
	<main class="main">
		<div class="main-container">
			<div class="main-container-title">
				<h2>
					Come Fresco <br> Come Sano
				</h2>
			</div>
			<div class="main-container-description">
				<p>No empieces una dieta que terminará algún día, comienza un
					estilo de vida que dure para siempre. Y no te preocupes, aquí
					estamos nosotros para ayudarte.</p>
			</div>
			<div class="main-container-link">
				<a href="menu.php">Visita Nuestro Menú</a>
			</div>
		</div>
	</main>
	<!-- //Main -->
	<!-- About -->
	<section class="about">
		<div class="about-container">
			<div class="about-container-img">
				<img src="assets/images/main.png" alt="Image de Platillo">
			</div>
			<div class="about-container-description">
				<h3>
					Bienvenido a <span>Central</span>
				</h3>
				<p>¿ Quieres tener un estilo de vida saludable ? Justo nosotros
					somos los indicados para ayudarte en ese cambio, o si solo quieres
					probar de la comida saludable, igualmente nuestros platos podrán
					deleitarte.</p>
				<p>Tenemos platillos variados e ideales para el desayuno,
					almuerzo y cena. No te preocupes que también contamos con delivery,
					y con soporte para el cliente, porque nos importas. Porque mas que
					un restaurante, nosotros somos familia, y la familia se cuida.</p>
				<br> <a href="about.php">Leer más</a>
			</div>
		</div>
	</section>
	<!-- //About -->
	<!-- Slogan -->
	<section class="slogan">
		<div class="slogan-container">
			<div class="slogan-container-text">
				<h2>Hola. Nuestra marca lleva presente 5 años. ¡ 5 años de dar
					siempre lo mejor !</h2>
			</div>
		</div>
	</section>
	<!-- //Slogan -->
	<!-- Notes -->
	<section class="notes">
		<div class="notes-container">
			<div class="notes-container-row_one">
				<div class="notes-container-row-item">
					<div class="notes-item-i">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
					</div>
					<p>Somos un gran restaurante con una idea innovadora, en el
						2020 fuimos valorados con 4 tenedores, y somos de los mejores
						restaurantes en el Perú.</p>
				</div>
				<div class="notes-container-row-item">
					<div class="notes-item-i">
						<i class="fa fa-coffee" aria-hidden="true"></i>
					</div>
					<p>Nuestra idea de ofrecer comida saludable nace de la
						necesidad de ayudar a las personas que deciden querer cambiar su
						estilo de vida a uno mejor.</p>
				</div>
			</div>
			<div class="notes-container-row_two">
				<div class=" notes-container-row-item">
					<div class="notes-item-i">
						<i class="fa fa-beer" aria-hidden="true"></i>
					</div>
					<p>Respetamos todos los protocolos y nuestro soporte al cliente
						siempre va en mejora. En el 2020 fuimos el restaurante con menos
						reclamaciones en el Perú.</p>
				</div>
				<div class="notes-container-row-item">
					<div class="notes-item-i">
						<i class="fa fa-apple" aria-hidden="true"></i>
					</div>
					<p>No solo somos un restaurante somos una familia. Y la familia
						se cuida. !Comer es una necesidad, pero comer de forma inteligente
						es un arte!</p>
				</div>
			</div>
		</div>
	</section>
	<!-- //Notes -->
	<!-- Contact -->
	<section class="contact">
		<div class="contact-container">
			<div class="contact-container-title">
				<h3>¡CONTÁCTANOS!</h3>
			</div>
			<div class="contact-container-description">
				<p>Para consultas en línea llame al siguiente número</p>
			</div>
			<div class="contact-container-buttons">
				<div class="phone">
					<i class="fa fa-volume-control-phone mr-1" aria-hidden="true"></i>
					<a href="tel: (51) 961835589">(51) 961835589</a>
				</div>
				<span>O</span> <a class="contact-container-buttons-btn"
					href="contact.php">Póngase en contacto</a>
			</div>
		</div>
	</section>
	<!-- //Contact -->
	<!-- Cards -->
	<section class="cards">
		<div class="cards-container">
			<div class="cards-container-item card-one">
				<i class="fa fa-motorcycle" aria-hidden="true"></i>
				<h5>
					<a href="contact.php">Delivery Rápido</a>
				</h5>
				<p>Reciba con total seguridad su pedido en hasta 30 minutos sino
					nosotros invitamos.</p>
			</div>
			<div class="cards-container-item card-two">
				<i class="fa fa-shopping-basket" aria-hidden="true"></i>
				<h5>
					<a href="about.php">Ingredientes Frescos</a>
				</h5>
				<p>Desde la mejor tierra hasta su mesa, trabajamos con
					ingredientes de primera calidad.</p>

			</div>
			<div class="cards-container-item card-three">
				<i class="fa fa-laptop" aria-hidden="true"></i>
				<h5>
					<a href="contact.php">Soporte Online 24/7</a>
				</h5>
				<p>Estamos aquí para ayudarte, ante cualquier consulta o
					reclamo, comunícate con nosotros vía online.</p>
			</div>
		</div>
	</section>
	<!-- //Cards -->
	<?php include("structure/promotion.php")?>
	<?php include("structure/footer.php");?>


	<!-- Js scripts -->
	<script src="https://kit.fontawesome.com/905fa6d085.js"></script>
	<!-- <script src="assets/js/function.js"></script> -->
	<!-- <script src="assets/js/function-login.js"></script> -->
	<!-- //Js scripts -->
</body>
</html>