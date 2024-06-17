<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta Online</title>
    <!-- ESTILOS GLOBALES -->
    <link rel="preload" href="./assets/venta-online/principal/AnyConv2.webp" as="image">
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
        <div class="imagen-slide activa"
            style="background-image: url('./assets/venta-online/principal/venta-online-principal1.webp');  background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%; margin-top: -1px;">
        </div>
        <div class="imagen-slide"
            style="background-image: url('./assets/venta-online/principal/venta-online-principal2.webp'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%;">
        </div>
        <div class="imagen-slide"
            style="background-image: url('./assets/venta-online/principal/venta-online-principal3.webp'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%;">
        </div>
        <div class="imagen-slide"
            style="background-image: url('./assets/venta-online/principal/venta-online-principal4.webp'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%;">
        </div>
        <div class="imagen-slide"
            style="background-image: url('./assets/venta-online/principal/venta-online-principal5.webp'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%;">
        </div>
        <div class="imagen-slide"
            style="background-image: url('./assets/venta-online/principal/venta-online-principal6.webp'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%;">
        </div>
        <div class="imagen-slide"
            style="background-image: url('./assets/venta-online/principal/venta-online-principal7.webp'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%;">
        </div>
        <div class="imagen-slide"
            style="background-image: url('./assets/venta-online/principal/venta-online-principal8.webp'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%;">
        </div>
        <div class="imagen-slide"
            style="background-image: url('./assets/venta-online/principal/venta-online-principal9.webp'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%;">
        </div>
    </div>
    <!-- SLIDE VENTA ONLINE PROYECTORES 3D FIN -->


    <!-- DESCUBRE NUESTROS PRODUCTOS IMG INICIO -->
    <!-- <section class="descubre">
        <img fetchpriority="low" src="./assets/venta-online/principal/descubre.webp" alt="Descubre" width="100%" height="100%" loading="lazy">
    </section> -->

    <section class="descubre">
    <img fetchpriority="low" 
         src="./assets/venta-online/principal/descubre-480w.webp" 
         srcset="./assets/venta-online/principal/descubre-320w.webp 320w,
                 ./assets/venta-online/principal/descubre-480w.webp 480w,
                 ./assets/venta-online/principal/descubre-800w.webp 800w" 
         sizes="(max-width: 320px) 280px, 
                (max-width: 480px) 440px, 
                800px"
         alt="Descubre" 
         width="800" 
         height="600" 
         loading="lazy">
</section>

    <!-- DESCUBRE NUESTROS PRODUCTOS IMG FIN -->

    <!-- EXPLORAR INICIO -->
    <section class="explorar">
        <h4>Explora este nuevo mundo de oportunidades</h4>

        <div class="explorar-images">
            <div class="explorar-images-presentacion">
                <img fetchpriority="low" src="./assets/venta-online/principal/AnyConv2.webp" alt="explorar" width="100%" height="100%">
            </div>
            <div class="container-images">
                <a href="./venta-online-pisos-techos-led.php">
                    <div class="card-category">
                        <img loading="lazy" src="./assets/venta-online/principal/category1.webp" alt="category1" width="250px" height="180px">
                        <p>PISOS LED PARA FIESTAS, BODAS, ETC</p>
                    </div>
                </a>
                <a href="./venta-online-paneles-pvc.php">
                    <div class="card-category">
                        <img loading="lazy" src="./assets/venta-online/principal/category2.webp" alt="category2" width="250px" height="180px">
                        <p>PANEL ENMADERADO</p>
                    </div>
                </a>
                <a href="./venta-online-letreros-neon-led.php">
                    <div class="card-category">
                        <img loading="lazy" src="./assets/venta-online/principal/category3.webp" alt="category3" width="250px" height="180px">
                        <p>LETRERO NEÓN LED HAPPY BIRTHDAY</p>
                    </div>
                </a>
                <a href="./venta-online-pantallas-led.php">
                    <div class="card-category">
                        <img loading="lazy" src="./assets/venta-online/principal/category4.webp" alt="category4" width="250px" height="180px">
                        <p>PANTALLA LED HORIZONTAL PARA EVENTOS</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- EXPLORAR FIN -->

    <!-- ESTAS PREPARADO INICIO -->
    <section class="prepared">
        <a href="./sign-in.php">INICIAR SESIÓN</a>
    </section>
    <!-- ESTAS PREPARADO FIN -->

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