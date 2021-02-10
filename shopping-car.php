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
<link rel="stylesheet" href="assets/css/table-design.css">
<!-- Alertify Css -->
<link href="assets/css/default.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/alertify.min.css" rel="stylesheet"
	type="text/css" />
</head>
<body>
    <?php include("structure/header.php")?>
	<script type="text/javascript">
		var elemento = document.getElementsByClassName("fa-shopping-cart");
		elemento[0].className += " active";
	</script>
	<!-- MiniBanner -->
	<section class="minibanner">
		<div class="minibanner-container">
			<div class="minibanner-container-content">
				<h2>Carrito de Compras</h2>
				<div class="minibanner-group">
					<a href="index.jsp" class="active">Inicio</a> <i
						class="fa fa-chevron-right mx-2" aria-hidden="true"></i> <span>Carrito de Compras</span>
				</div>
			</div>
		</div>
	</section>
	<!-- //MiniBanner -->
	<!-- Section ShoppingCar -->
	<main id="home" class="">
		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table-primary">
						<div class="table-row header-table">
							<div class="table-cell"></div>
							<div class="table-cell">Comida</div>
							<div class="table-cell">Cantidad</div>
							<div class="table-cell">Precio</div>
							<div class="table-cell"></div>
						</div>
						<div class="table-row">
							<div class="table-cell" data-title="">
								<img src="assets/images/FO001.jpg"
									alt="Imagen de FO001">
							</div>
							<div class="table-cell" data-title="Comida">"Tostada Ricotta"</div>
							<div class="table-cell" data-title="Cantidad">
								<!-- <form action="sb" method="post" class="cantidad"> -->
                                <div class="cantidad">
									<input value="<%=carro.get(i).getCodigo_food()%>" name="cod"
										class="hidden">
									<button name="btn"
										onclick="increase('100')">+</button>
									<input id="100" type="number"
										name=""
										value="1" min="1"
										max="99" readonly>
									<button name="btn" 
										onclick="decrease('100')">-</button>
                                        </div>
							</div>
							<div class="table-cell" data-title="Precio">
								S/.29.99</div>
							<div class="table-cell" data-title="">
							<!--	<a href="sb?btn=delete_shopping_car&cod=<%=carro.get(i).getCodigo_food()%>"-->
									<a href="#"
                                    class="delete">Eliminar</a>
							</div>
						</div>
					</div>
					<div class="ballot">
						<h2>Resumen de Pedido</h2>
						<label>Cantidad : 0</label><br> <label>Subtotal
							: S/.29.99</label><br> <label>IGV (18%) : S/.
							5.4</label><br> <label>Total : S/. 35.4 </label><br><br><br>
						<a href="#" class="btn btn-primary">Procesar</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- //Section ShoppingCar  -->
	<!-- Footer -->
	<footer class="footer">
		<div class="footer-container">
			<div class="footer-container-title">
				<a href="index.jsp"><i class="fa fa-cutlery" aria-hidden="true"></i>
					Central</a>
				<p>Estamos aquí para ayudarte a dar ese salto que siempre
					quisiste. No solo somos un restaurante somos mas que eso, somos
					familia.</p>
			</div>
			<div class="footer-container-pages">
				<div class="page-title">
					<h3>Páginas</h3>
				</div>
				<div class="page-item page-one">
					<ul>
						<li><a href="index.jsp"><i class="fa fa-angle-right"
								aria-hidden="true"></i>Inicio</a></li>
						<li><a href="about.jsp"><i class="fa fa-angle-right"
								aria-hidden="true"></i>Sobre Nosotros</a></li>
						<li><a href="contact.jsp"><i class="fa fa-angle-right"
								aria-hidden="true"></i>Contáctanos</a></li>
					</ul>
				</div>
				<div class="page-item page-two">
					<ul>
						<li><a href="sf?btn=menu"><i class="fa fa-angle-right"
								aria-hidden="true"></i>Menú</a></li>
						<li><a href="#privacy"><i class="fa fa-angle-right"
								aria-hidden="true"></i>Política de privacidad</a></li>
						<li><a href="#terms"><i class="fa fa-angle-right"
								aria-hidden="true"></i>Términos y Condiciones</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-container-ad">
				<div class="footer-ad-title">
					<h3>Boletín informativo</h3>
				</div>
				<div class="footer-ad-text">
					<h3>¡ Suscribete ahora mismo !</h3>
					<form action="#" class="form-ad" method="post">
						<div class="form-ad_input">
							<input type="email" name="txtEmail"
								placeholder="Correo electrónico" required>
						</div>
						<button value="subcribe">
							<span class="fa fa-paper-plane" aria-hidden="true"></span>
						</button>
					</form>
					<p>Sin importar si estas registrado recibe las últimas noticias
						sobre Central.</p>
				</div>
			</div>
			<div class="footer-container-info">
				<div class="info-title">
					<p>@ 2020. Todos los derechos reservados. Maverick Champi.</p>
				</div>
				<div class="info-social">
					<ul>
						<li><a
							href="https://www.instagram.com/central.restaurantesaludable"><i
								class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a
							href="https://www.facebook.com/Restaurante-Central-106446624705369"><i
								class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://twitter.com/Central31411012"><i
								class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- //Footer -->


	<!-- Js scripts -->
	<script src="https://kit.fontawesome.com/905fa6d085.js"></script>
	<script src="assets/js/function.js"></script>
	<script src="assets/js/function-login.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/alertify.min.js" type="text/javascript"></script>
	${mensaje}
	<script>
		function getid(id) {
			return document.getElementById(id);
		}
		function increase(id) {
			getid(id).value = parseInt(getid(id).value) + 1;
		}

		function decrease(id) {
			var counterValue = parseInt(getid(id).value);
			var newCounterValue = (counterValue) ? counterValue - 1 : 0;

			getid(id).value = newCounterValue;
		}
	</script>
	<!-- //Js scripts -->
</body>
</html>