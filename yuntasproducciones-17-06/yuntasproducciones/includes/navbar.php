<!-- NAVBAR INICIO -->
<header class="header">
    <link rel="preload" as="image" href="./assets/yuntas-logo.webp">
	<nav class="nav__container">
		<div class="nav__data">
				<!--	<a href="index.php" class="nav__logo"> -->
			<!--	<img src="./assets/yuntas-logo.webp" alt="Logo"> -->
				<!--<img src="./assets/yuntas-logo.webp" alt="Logo" width="100" height="auto" fetchpriority="high">
			</a>-->
			<a href="index.php" class="nav__logo">
				<img src="./assets/yuntas-logo.webp" 
				srcset="./assets/yuntas-logo.webp 374w,
				./assets/yuntas-logo.webp 768w,
				./assets/yuntas-logo.webp 1024w"
				sizes="(max-width: 375px) 374px, (max-width: 769px) 768px, 1024px" 
				alt="Logo" width="374px" height="174px">
			</a>

			<div class="nav__toggle" id="nav-toggle">
				<i class="ri-menu-line nav__burger"></i>
				<i class="ri-close-line nav__close"></i>
			</div>
		</div>

		<div class="nav__menu" id="nav-menu">
			<ul class="nav__list">
				<li><a href="index.php" class="nav__link">INICIO</a></li>

				<li><a href="nosotros-productos-servicios-personalizados-iluminacion.php" class="nav__link">NOSOTROS</a></li>

				<li><a href="disenio-interiores-remodelacion-decoracion-exteriores-iluminacion.php" class="nav__link">SERVICIOS DE INT.</a></li>

				
				<li class="dropdown__item">
					<div class="nav__link1">
						<a href="productos.php" class="nav__linkp">PRODUCTOS</a><i class="ri-arrow-down-s-line dropdown__arrow"></i>
					</div>

					<ul class="dropdown__menu">
						<li class="dropdown__subitem">
							
							<div class="dropdown__link">
								<a href="productos-led-3d.php" >PRODUCTOS LED Y 3D</a>
								
							</div>

							<div class="dropdown__link">
								<a href="pvc-paneles.php" >PVC Y PANELES</a>
								
							</div>
						</li>
					</ul>
				</li>
				<li><a href="contactanos.php" class="nav__link">CONTÁCTANOS</a></li>
				<li><a href="venta-online-principal.php" class="nav__link">VENTA ONLINE</a></li>
				<li><a href="blog.php" class="nav__link">BLOG</a></li>
			</ul>
		</div>
	</nav>
</header>
<!-- NAVBAR FIN -->