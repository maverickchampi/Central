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
		elemento[1].className += " active";
	</script>
	<!-- MiniBanner -->
	<section class="minibanner">
		<div class="minibanner-container">
			<div class="minibanner-container-content">
				<h2>Sobre Nosotros</h2>
				<div class="minibanner-group">
					<a href="index.php" class="active">Inicio</a> <i
						class="fa fa-chevron-right mx-2" aria-hidden="true"></i> <span>Sobre
						Nosotros</span>
				</div>
			</div>
		</div>
	</section>
	<!-- //MiniBanner -->
	<!-- About -->
	<section class="about">
		<div class="about-container">
			<div class="about-container-imgchef">
				<img src="assets/images/chef.png" alt="Image de Chef">
			</div>
			<div class="about-container-description">
				<h1>PRODUCTOS DE PRIMERA CALIDAD A TU MESA</h1>
				<p>¿ Quieres tener un estilo de vida saludable ? Justo nosotros
					somos los indicados para ayudarte en ese cambio, o si solo quieres
					probar de la comida saludable, igualmente nuestros platos podrán
					deleitarte.</p>
				<p>Tenemos platillos variados e ideales para el desayuno,
					almuerzo y cena. No te preocupes que también contamos con delivery,
					y con soporte para el cliente, porque nos importas. Porque mas que
					un restaurante, nosotros somos familia, y la familia se cuida.</p>
				<p>Llevamos desde el 2015 y vamos a por más, de Perú para el
					mundo.</p>
				<br>
				<ul class="about-points">
					<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>100%
						Calidad</li>
					<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Recién
						traídos del campo</li>
					<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Rigurosos
						protocolos de bioseguridad</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- //About -->
	<!-- Statistics -->
	<section class="statistics">
		<div class="statistics-container">
			<div class="statistics-container-group">
				<div class="statistics-container-item">
					<h2>1,200</h2>
					<span>CLIENTES FELICES</span>
				</div>
				<div class="statistics-container-item">
					<h2>345</h2>
					<span>CHEFS</span>
				</div>
			</div>
			<div class="statistics-container-group">
				<div class="statistics-container-item">
					<h2>1,200</h2>
					<span>PEDIDOS DIARIOS</span>
				</div>
				<div class="statistics-container-item">
					<h2>5</h2>
					<span>AÑOS DE EXPERIENCIA</span>
				</div>
			</div>
		</div>
	</section>
	<!-- //Statistic -->
	<!-- Team -->
	<section class="team">
		<div class="team-container">
			<div class="team-container-title">
				<h2>Hola. Nuestra marca lleva presente 5 años. ¡ 5 años de dar
					siempre lo mejor !</h2>
			</div>
			<div class="team-container-group">
				<img src="assets/images/team1.jpg" alt="Chef"> <img
					src="assets/images/team2.jpg" alt="Experto en alimento">
			</div>
		</div>
	</section>
	<!-- //Team -->
	<?php include("structure/promotion.php")?>
	<?php include("structure/footer.php");?>


	<!-- Js scripts -->
	<script src="https://kit.fontawesome.com/905fa6d085.js"></script>
	<script src="assets/js/function.js"></script>
	<script src="assets/js/function-login.js"></script>
	<!-- //Js scripts -->
</body>
</html>