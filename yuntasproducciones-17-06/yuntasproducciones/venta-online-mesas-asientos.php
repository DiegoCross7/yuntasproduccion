<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta Online Mesas y Asientos VIP</title>
    <!-- ESTILOS GLOBALES -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/venta-online.css">
    <link rel="stylesheet" href="css/ventana.css">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <?php include './includes/navbar.php' ?>

    <!-- NAVBAR TIENDA INICIO -->
    <?php include './includes/navbar-tienda.php' ?>
    <!-- NAVBAR TIENDA FIN -->

    <!-- SLIDE VENTA ONLINE PROYECTORES 3D INICIO -->
    <div class="carrusel carrusel2">
        <div class="imagen-slide activa" style="background-image: url('./assets/venta-online/slide-mesas-asientos-1.webp'); background-repeat: no-repeat; background-size: cover; ">
        </div>
        <div class="imagen-slide" style="background-image: url('./assets/venta-online/slide-mesas-asientos-2.webp'); background-repeat: no-repeat; background-size: cover; ">
        </div>
        <div class="imagen-slide" style="background-image: url('./assets/venta-online/slide-mesas-asientos-3.webp'); background-repeat: no-repeat; background-size: cover; ">
        </div>
    </div>
    <!-- SLIDE VENTA ONLINE PROYECTORES 3D FIN -->

    <!-- LISTA DE PROYECTORES 3D INICIO -->
    <main class="venta-online-main-container">
        <div class="products-container">
            <a class="product-card" href="./producto-detalle.php">
                <figure class="product-image">
                    <img src="./assets/venta-online/mesa-asiento-product-1.webp" alt="Imagen 01">
                </figure>
                <p class="product-name">PROYECTOR 3D CON WIFI</p>
                <p class="product-price">S/. PRECIO</p>
            </a>
            <a class="product-card" href="./producto-detalle.php">
                <figure class="product-image">
                    <img src="./assets/venta-online/mesa-asiento-product-2.webp" alt="Imagen 02">
                </figure>
                <p class="product-name">PROYECTOR 3D DE VIDEO DE ALTA RESOLUCIÓN</p>
                <p class="product-price">S/. PRECIO</p>
            </a>
            <a class="product-card" href="./producto-detalle.php">
                <figure class="product-image">
                    <img src="./assets/venta-online/mesa-asiento-product-3.webp" alt="Imagen 03">
                </figure>
                <p class="product-name">PROYECTOR 3D, REPRODUCCIÓN DE HOLOGRAMAS 3D</p>
                <p class="product-price">S/. PRECIO</p>
            </a>
            <a class="product-card" href="./producto-detalle.php">
                <figure class="product-image">
                    <img src="./assets/venta-online/mesa-asiento-product-4.webp" alt="Imagen 04">
                </figure>
                <p class="product-name">PROYECTOR 3D REPRODUCTOR DE VIDEO HOLOGRÁFICO</p>
                <p class="product-price">S/. PRECIO</p>
            </a>
            <a class="product-card" href="./producto-detalle.php">
                <figure class="product-image">
                    <img src="./assets/venta-online/mesa-asiento-product-5.webp" alt="Imagen 05">
                </figure>
                <p class="product-name">PROYECTOR 3D DE HOLOGRAMAS HD</p>
                <p class="product-price">S/. PRECIO</p>
            </a>
            <a class="product-card" href="./producto-detalle.php">
                <figure class="product-image">
                    <img src="./assets/venta-online/mesa-asiento-product-6.webp" alt="Imagen 06">
                </figure>
                <p class="product-name">PROYECTOR 3D, REPRODUCCIÓN DE HOLGRAMAS 3D</p>
                <p class="product-price">S/. PRECIO</p>
            </a>
        </div>
    </main>
    <!-- LISTA DE PROYECTORES 3D FIN -->

    <?php include './includes/button-wsp.php' ?>
    <?php include './includes/button-form.php' ?>
    <?php include './includes/footer.php' ?>

    <script>
        /*=============== SHOW MENU ===============*/
        const showMenu = (toggleId, navId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId);

            toggle.addEventListener('click', () => {
                // Add show-menu class to nav menu
                nav.classList.toggle('show-menu');

                // Add show-icon to show and hide the menu icon
                toggle.classList.toggle('show-icon');
            });
        };

        showMenu('nav-toggle', 'nav-menu');

        /*=============== SHOW MENU STORE ===============*/
        const iconMenu = document.getElementById("icon-menu")
        const sidebar = document.getElementById("sidebar")
        const sidebarAccount = document.getElementById("sidebarAccount")
        const sidebarToggle = document.getElementById("sidebarAccountToggle")

        function show() {
            sidebar.classList.toggle("noShow")
        }

        function showSidebarAccount() {
            sidebarToggle.classList.toggle("noShowAccount")
        }

        iconMenu.addEventListener("click", show)
        sidebarAccount.addEventListener("click", showSidebarAccount)
    </script>
    <script src="js/carrusel-hero.js"></script>
</body>

</html>