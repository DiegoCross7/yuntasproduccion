<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto-detalle</title>
    <!-- ESTILOS GLOBALES -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/venta-online.css">
    <link rel="stylesheet" href="css/detalle.css">
    <link rel="stylesheet" href="css/ventana.css">

    <!-- ESTILOS MODAL -->
    <link rel="stylesheet" href="css/modal.css">

    <!-- RemixIcons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php include './includes/navbar.php' ?>
    <!-- NAVBAR TIENDA INICIO -->
    <?php include './includes/navbar-tienda.php' ?>
    <!-- NAVBAR TIENDA FIN -->

    <main class="detail-container">
        <div class="content-product">
            <div class="content-image">
                <h1>PANTALLA LED VERTICAL PARA INTERIORES</h1>
                <div class="info-image">
                    <div class="image-left">
                        <img src="./assets/detalle-producto/Rectangle179.webp" alt="">
                        <img src="./assets/detalle-producto/Rectangle180.webp" alt="">
                    </div>
                    <div class="image-rigth">
                        <img src="./assets/detalle-producto/Group44.webp" alt="">
                    </div>
                </div>
            </div>

            <div class="price-quantity-card">
                <div class="price">
                    <span>s/.</span>
                    <strong>PRECIO</strong>
                </div>
                <div class="quantity">
                    <p>Cantidad</p>
                    <div class="quantity-options">
                        <button><i class="ri-subtract-fill"></i></button>
                        <span>0</span>
                        <button><i class="ri-add-fill"></i></button>
                    </div>
                    <?php include './includes/modal-producto.php' ?>
                    <!-- <button class="buy">AGREGAR AL CARRITO</button> -->
                </div>

                <div class="card-info">
                    <div class="">
                        <p class="title"><i class="ri-shield-check-line"></i> Pagos</p>
                        <img src="./assets/detalle-producto/visa-logo1.webp" alt="Visa">
                        <img src="./assets/detalle-producto/mastercard-logo1.webp" alt="Mastercard">
                        <p>Tus pagos siempre de manera segura y rapida</p>
                    </div>
                    <div class="">
                        <p class="title"><i class="ri-truck-line"></i> Despacho a domicilio</p>
                        <img src="./assets/detalle-producto/visa-logo1.webp" alt="Visa">
                        <img src="./assets/detalle-producto/mastercard-logo1.webp" alt="Mastercard">
                        <p>Disfruta del envio a tiempo</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-similar">
            <div class="content-card">
                <h3>Productos similares para ti</h3>
                <div class="cards">
                    <div class="card">
                        <img src="./assets/detalle-producto/Rectangle 71.webp" alt="">
                        <p>PANTALLA LED PARA VALLAS PUBLICITARIAS</p>
                        <span>s/.</span>
                        <strong>PRECIO</strong>
                    </div>
                    <div class="card">
                        <img src="./assets/detalle-producto/Rectangle 71 (1).webp" alt="">
                        <p>PANTALLA LED PARA PUBLICIDAD INTERIOR</p>
                        <span>s/.</span>
                        <strong>PRECIO</strong>
                    </div>
                    <div class="card">
                        <img src="./assets/detalle-producto/Rectangle 71 (2).webp" alt="">
                        <p>PANTALLA LED HORIZONTAL PARA PRESENTACIONES</p>
                        <span>s/.</span>
                        <strong>PRECIO</strong>
                    </div>
                    <div class="card">
                        <img src="./assets/detalle-producto/Rectangle 71 (3).webp" alt="">
                        <p>PANTALLA LED VERTICAL PARA PUBLICIDAD</p>
                        <span>s/.</span>
                        <strong>PRECIO</strong>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-info-product">

            <div class="info-left">
                <p class="title">Especificaciones</p>
                <table>
                    <tr>
                        <th>Color</th>
                        <td>RGB</td>
                    </tr>
                    <tr>
                        <th>Tipo de pantalla</th>
                        <td>Pantalla LED</td>
                    </tr>
                    <tr>
                        <th>Temperatura de trabajo</th>
                        <td>20 - 45 Cº</td>
                    </tr>
                    <tr>
                        <th>Brillo</th>
                        <td>1199 nit</td>
                    </tr>
                    <tr>
                        <th>Aplicacion</th>
                        <td>Publicidad, evento, marketing, exposición</td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>Full color</td>
                    </tr>
                </table>
            </div>
            <div class="info-rigth">
                <p class="title">Información adicional</p>
                <p>¡Las pantallas LED de YUNTAS son la mejor opción para tu negocio! Puede mostrar claramente el video
                    de la publicidad.</p>

            </div>
        </div>


        <div class="content-commets">
            <div class="title">Comentarios</div>
            <p>Calificación general</p>
            <div class="content-calification">
                <div class="stars">
                    <button><i class="ri-star-fill"></i></button>
                    <button><i class="ri-star-fill"></i></button>
                    <button><i class="ri-star-fill"></i></button>
                    <button><i class="ri-star-fill"></i></button>
                    <button><i class="ri-star-fill"></i></button>
                </div>
                <span>5 / 5</span>
            </div>
            <div class="content-options">
                <button>Todos</button>
                <button>Mas reciente</button>
                <button>Mas relevantes</button>
            </div>

            <div class="commets">
                <img src="./assets/detalle-producto/Ellipse38.webp" alt="">
                <input type="text" placeholder="Escribe tu comentario aqui">
            </div>
        </div>
    </main>



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