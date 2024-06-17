<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuntas Producciones carrito</title>
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

    <div class="empty-cart-container">
        <div class="empty-cart-content">
            <figure>
                <img src="./assets/venta-online/empty-cart.webp" alt="empty-cart">
            </figure>
            <div class="empty-cart-text">
                <h4>¡Tu carrito esta vacio!</h4>
                <p>Visita nuestra pagina principal y descubre todos los increibles productos que tenemos para ti</p>
            </div>
        </div>
    </div>
    
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
</body>

</html>