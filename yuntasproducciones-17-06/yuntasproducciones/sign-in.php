<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuntas Producciones sign-in</title>
    <!-- ESTILOS GLOBALES -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/venta-online.css">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <?php include './includes/navbar.php' ?>
    <!-- NAVBAR TIENDA INICIO -->
    <?php include './includes/navbar-tienda.php' ?>
    <!-- NAVBAR TIENDA FIN -->

    <div class="sign-in-container">
        <form>
            <h3>Bienvenido <br> Yunter@</h3>

            <label for="email">Correo electrónico</label>
            <input type="text" id="email">

            <label for="password">Contraseña</label>
            <input type="password" id="password">

            <a class="password-forgot" href="#">Olvidé mi contraseña</a>

            <div class="form-buttons">
                <a href="#" class="btn-primary btn-ingresar">Ingresar</a>
                <p>¿No tienes una cuenta?</p>
                <a href="./sign-up.php" class="btn-secondary btn-registrarse">Registrate</a>
            </div>
        </form>
    </div>

    <?php include './includes/button-wsp.php' ?>
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