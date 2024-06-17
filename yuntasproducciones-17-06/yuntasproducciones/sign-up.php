<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuntas Producciones sign-up</title>
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

        <div class="sign-up-container">
            <div class="sign-up-header">
                <h3>Bienvenido a la familia <br> Yuntas</h3>
                <p>Ingresa tus datos personales y disfruta de una increible experiencia, compra de manera rápida y eficaz.
                </p>
            </div>
            <div class="form-container">
                <form>
                    <div class="input-field">
                        <span>Nombre</span>
                        <input type="text" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="input-field">
                        <span>Apellido</span>
                        <input type="text" placeholder="Ingresa tu apellido">
                    </div>
                    <div class="input-field">
                        <span>No de Documento</span>
                        <input type="text" placeholder="Ingresa tu DNI">
                    </div>
                    <div class="input-field">
                        <span>Celular</span>
                        <div class="phone-code">
                            <p>+51</p>
                            <input class="phone-input" type="text" placeholder="Ingresa tu número de celular">
                        </div>
                    </div>
                    <div class="input-field">
                        <span>Correo eletrónico</span>
                        <input type="text" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <div class="input-field">
                        <span>Contraseña</span>
                        <input type="text" placeholder="Ingresa una contraseña">
                    </div>
                    <div class="findings">
                        <p>Te recomendamos usar por lo menos:</p>
                        <div>
                            <p>-8 caracteres</p>
                            <p>-1 mayúscula</p>
                        </div>
                        <div>
                            <p>-ningun espacio</p>
                            <p>-1 minúscula</p>
                        </div>
                        <div>
                            <p>-1 número</p>
                        </div>
                    </div>
                    <div class="terms-conditions">
                        <label for="terms">
                            <input type="radio" id="terms">
                            <p>Acepto los <strong>términos y condiciones</strong> y autorizo la política de
                                privacidad.</p>
                        </label>
                    </div>
                    <div class="form-buttons">
                        <a href="#" class="btn-primary ">Registrarme</a>
                        <p>¿Ya tienes una cuenta?</p>
                        <a href="./sign-in.php" class="btn-secondary ">Iniciar sesión</a>
                    </div>
                </form>
            </div>
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