<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Yuntas Producciones</title>
	<!-- ESTILOS GLOBALES -->
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/ventana.css">

	<!--=============== REMIXICONS ===============-->
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
	<link rel="preload" fetchpriority="high" as="image" href="./assets/Slide-Portada-01.webp" type="image/webp">
	
	<meta name="google-site-verification" content="W_l4sQOITnTO1rpKtYsth1y89RXuhQ3aIkt4A9VTJgs" />
</head>

<body>
	<?php include './includes/navbar.php' ?>
	<!-- PORTADA INICIO -->
	<div class="carrusel">
		<div class="imagen-slide activa">
			<img fetchpriority="high" src="./assets/Slide-Portada-01.webp" alt="image_portada_01">
		</div>
		<div class="imagen-slide">
			<img loading="lazy" src="./assets/Slide-Portada-02.webp" alt="image_portada_02">
		</div>
		<div class="imagen-slide">
			<img loading="lazy" src="./assets/Slide-Portada-03.webp" alt="image_portada_03">
		</div>
	</div>

	<style>
		/* CARRUSEL INICIO */
		.carrusel {
		height: calc(100vh - 71px);
		position: relative;
		overflow: hidden;
		background-size: cover;
		display: flex;
		align-items: center;
		}

		.carrusel .imagen-slide {
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		opacity: 0;
		transition: opacity 0.5s ease-in-out;
		background-size: cover;
		background-repeat: no-repeat;
		}

		.imagen-slide img {
		display: block;
		width: 100%;
		height: 100%;
		}

		.carrusel .imagen-slide.activa {
		opacity: 1;
		}

		/*RESPONSIVO DE CARRUSEL INICIO*/
		@media (max-width: 500px){
		.carrusel {
			width: 100%;
			height: 300px;
		}
		align-items: center;
		.carrusel .imagen-slide {
			border: 2px solid red;
			width: 100%;
			height: 300px;
		}
		}
	</style>


	<!-- PORTADA FIN -->

	<div class="subTitle">
		<p>NUESTROS PRODUCTOS Y SERVICIOS</p>
	</div>
	<div class="services">
		<div class="imagen1 service">
			<img fetchpriority="low" src="./assets/diseno-interiores.webp" alt="image_service_01">
		</div>
		<div class="imagen2 service">
			<a href="productos-led-3d.php">
				<img loading="lazy" src="./assets/ilumincacion-led.webp" alt="image_service_02">
			</a>
		</div>
		<div class="imagen3 service">
			<a href="pvc-paneles.php">
				<img loading="lazy" src="./assets/pvc-paneles.webp" alt="image_service_03">
			</a>
		</div>
	</div>
	
	<?php include './includes/button-wsp.php' ?>
	<?php include './includes/button-form.php' ?>
	<?php include './includes/footer.php' ?>

	<script src="js/carrusel-hero.js"></script>
	<script src="js/menu-script.js"></script>
</body>

</html>