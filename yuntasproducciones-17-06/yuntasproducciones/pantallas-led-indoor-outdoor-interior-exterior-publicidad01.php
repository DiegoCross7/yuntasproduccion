<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantallas-led-indoor-outdoor-interior-exterior-publicidad</title>
    <!-- ESTILOS GLOBALES -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/ventana.css">

    <!--=============== REMIXICONS ===============-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="preload" href="./css/productos-cards.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="./css/productos-cards.css">
    </noscript>

    <style>
        h1 {
            width: 30%;
            position: relative;
            font-size: 80px;
            top: 12rem;
            right: -22rem;
            font-style: italic;
            text-align: right;
            color: #FEFAF5;
            text-shadow: -4px -4px 0 #253060, 6px -4px 0 #253060, -6px 4px 0 #253060, 4px 4px 0 #253060;
        }
        h2 {
            color: rgb(57, 54, 232);
            font-family: system-ui;
            font-size: 45px;
            margin-block-start: 1rem;
            margin-block-end: 1rem;
        }
        .section_01 .container_subtitles img,
        .section_02 .container_subtitles img {
            height: 60%;
        }
        .section_01 .content {
            height: 400px;
        }
        .section_01 .paragraph {
            width: 27%;
            translate: 10% -25%;
        }
        .section_03 .container_subtitles img {
            height: 50%;
        }
        .section_04 .container_subtitles img {
            height: 85%;
        }
        .context-text {
            width: 36%;
            height: 90%;
            translate: 10% -50%;
        }
        .section_03 .context-text p {
            font-size: 2.2rem;
        }
        .section_03 .context-text span {
            font-size: 2.5em;
            min-width: 20%;
            margin-top: -10px;
        }
        .first_col {
            width: 35px;
            height: 100%;
        }
        .line {
            background-position: 65% 60%;
            width: 100%;
        }
        .section_02 .content_info {
            height: 90%;
        }
        .content_info p {
            font-size: 2rem;
        }
        .sec_col {
            width: 358px;
            gap: 0rem 0;
        }
        .section_04 {
            background-color: #FEFAF5;
        }
        @media (max-width: 1350px) {
            .section_03 .context-text p {
                font-size: 2rem;
                padding-right: 0;
            }
        }
        @media (max-width: 1075px) {
            .section_03 .context-text p {
                font-size: 1.5rem;
                padding-right: 0;
            }
            .sec_col {
                width: 100%;
                justify-content: space-between;
            }
            .line {
                width: 35px;
            }
            .section_01 .paragraph {
                font-size: 2rem;
            }
            .sec_col p {
                font-size: 1.37em;
            }
            .section_03 .context-text span {
                margin-top: -5px;
            }
        }
        @media (max-width: 575px) {
            .section_01 .content .content_img{
                width: 120%;
            }
            .section_02 .content_info {
                height: 80%;
                margin: 0;
            }
            .sec_col {
                font-size: 1.1rem;
                gap: 0;
                top: 0;
            }
            .section_01 .paragraph {
                font-size: 1.75rem;
            }
            .section_02 .content_info p {
                font-size: 1.1rem;
            }
            .context-text {
                width: 40% !important;
            }
            .section_03 .context-text p {
                font-size: 1.2rem;
            }
            .section_03 .context-text span {
                font-size: 2rem;
                margin-top: 0;
            }
        }
        @media (max-width: 465px) {
            .section_01 .content {
                height: 350px;
            }
            .section_03 .context-text {
                gap: 1rem 0;
                width: 40% !important;
                translate: 5% -50%;
            }
            .section_01 .paragraph {
                width: 49%;
                font-size: 1.33rem;
                transform: translate(-25%, 2%);
            }
            .content {
                height: 350px !important;
            }
            h1 {
                width: 45%;
                font-size: 45px;
                top: 4rem;
                right: -2rem;
            }
            h2 {
                font-size: 25px;
            }
        }
    </style>
    <meta name="google-site-verification" content="W_l4sQOITnTO1rpKtYsth1y89RXuhQ3aIkt4A9VTJgs" />
</head>

<body>
    <?php include './includes/navbar.php' ?>

    <div id="header">
        <div id="menu-container">
            <div id="logo-menu">
                <i id="menu-icon" class="ri-menu-line"></i>
                <span id="menu-text">Menú</span>
            </div>
            <ul id="menu-list">
                <li class="product-link" data-product="proyectores-3d-holografico-reproductor-ventilador-3d">Proyectores 3D</li>
                <li class="product-link" data-product="relojes-digitales-pantallas-panel-marcador-estadio-cronometro-buses-gallero-multideportivo">Relojes Dijitales</li>
                <li class="product-link" data-product="letreros-led-pantallas-programables-publicitarios-rgb-paneles">Letreros Led</li>
                <li class="product-link" data-product="pisos-led-programables-pixel-eventos-fiestas-pista-baile">Pisos Led</li>
                <li class="product-link" data-product="letreros-neon-led-anuncios-cuadros-decoracion-luces">Letreros Neón Led</li>
                <li class="product-link" data-product="pantallas-led-indoor-outdoor-interior-exterior-publicidad">Pantallas Led</li>
                <li class="product-link" data-product="techos-led-decoracion-neonled-falso-cielo-luces-iluminacion">Techos Led</li>
                <li class="product-link" data-product="mesas-asientos-vip-led-neon-poof-sillas-rgb-luces-pixel-programable">Mesas y asientos VIP</li>
            </ul>
        </div>

        <div id="search-producto">
            <input class="search-input" type="text" placeholder="¿Qué estás buscando?">
        </div>
    </div>

    <div id="main-portada">
        <img src="./assets/productos-cards/PORTADA_PANTALLAS_LED.webp" alt="Imagen" class="principal-img">
        <h1>PANTALLAS LED</h1>
        <div id="formulario-portada">
            <span id="cerrar-modal">&times;</span>
            <label class="titulo-form">¡NO ESPERES MÁS!</label>
            <form id="formMain" method="post">
                <input class="form-input" type="text" name="name" id="name" placeholder="Nombre:" required>
                <input class="form-input" type="email" name="email" id="email" placeholder="Correo:" required>
                <input class="form-input" type="text" name="phone" id="phone" placeholder="Móvil:" required>
                <input type="hidden" value="1" name="id_ser" id="id_ser" hidden />
                <button type="submit" class="btn-formulario" name="submit" value="Enviar formulario">Obtener Descuento</button>
                <!-- <input type="submit" value="Obtener Descuento"> -->
            </form>
        </div>
    </div>
    <div class="container-carrusel">
        <div class="swiper-container carrusel">
            <div class="swiper-wrapper">
                <div class="swiper-slide item">
                    <p class="text-carrusel">Pantalla Led vertical para interiores</p>
                    <img src="./assets/productos-cards/CARRUSEL_PANTALLA_LED01.webp" class="img-piso">
                </div>
                <div class="swiper-slide item">
                    <p class="text-carrusel">Pantalla Led horizontal para eventos</p>
                    <img src="./assets/productos-cards/CARRUSEL_PANTALLA_LED02.webp" class="img-piso">
                </div>
                <div class="swiper-slide item">
                    <p class="text-carrusel">Pantalla Led para publicidad</p>
                    <img src="./assets/productos-cards/CARRUSEL_PANTALLA_LED03.webp" class="img-piso">
                </div>
                <div class="swiper-slide item">
                    <p class="text-carrusel">Pantalla Led para presentaciones</p>
                    <img src="./assets/productos-cards/CARRUSEL_PANTALLA_LED04.webp" class="img-piso">
                </div>
                <div class="swiper-slide item">
                    <p class="text-carrusel">Pantalla Led para vallas publicitarias</p>
                    <img src="./assets/productos-cards/CARRUSEL_PANTALLA_LED05.webp" class="img-piso">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=51912849782">
            <button type="button" class="btn_cotizar">COTIZAR</button>
        </a>

    </div>

    <div class="separation-line">
        <hr class="hr-centered">
    </div>

    <div class="section_01">
        <div class="container_subtitles">
            <!-- <img src="./assets/productos-cards/SUBTITLE_01_PAGE02.webp" alt="section01_image_subtitle"> -->
            <!-- <h2>RESOLUCIÓN DE CALIDAD</h2> -->
            <div class="subtitulos">
                <h2>RESOLUCIÓN DE CALIDAD</h2>
            </div>
        </div>
        <div class="content">
            <p class="paragraph">
                Las pantallas led son de suma importancia para la visibilidad y reproducción de diversos tipos de
                contenidos, como eventos institucionales, presentaciones, entrevistas, live cam, shows, anuncios
                publicitarios, por ello son herramientas necesarias con fines promocionales.</p>
            <div class="content_img" style="background-image: url(assets/productos-cards/BACKGROUND_SECTION01_PAGE02.webp);"></div>
        </div>
    </div>

    <div class="section_02">
        <div class="container_subtitles">
            <!-- <h2>CARACTERISTICAS</h2> -->
            <div class="subtitulos">
                <h2>CARACTERISTICAS</h2>
            </div>
        </div>
        <div class="content">
            <div class="content_img" style="background-image: url(assets/productos-cards/BACKGROUND_SECTION02_PAGE02.webp);"></div>
            <div class="content_info">
                <div class="first_col">
                    <div class="line"></div>
                </div>
                <div class="sec_col">
                    <p>Sistema de retroalimentación basado en leds.</p>

                    <p>Cuentan con LCD, pero usan tecnología LED.</p>

                    <p>Apta para mostrarse bajo la luz solar directa e interiores.</p>
                    <p>Compuesto por diodos que emiten luz led.</p>

                    <p>Con respecto al tamaño, se pueden personalizar.</p>

                    <p>Brillo de alto impacto.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section_03">
        <div class="container_subtitles">
            <!-- <img src="./assets/productos-cards/SUBTITLE_03_PAGE02.webp" alt="section03_image_subtitle"> -->
            <h2>BENEFÍCIOS</h2>
            <!-- <div class="subtitulos">
                <p>BENEFÍCIOS</p>
            </div> -->
        </div>

        <div class="content">
            <div class="content_img" style="background-image: url(assets/productos-cards/BACKGROUND_SECTION03_PAGE02.webp);"></div>
            <div class="context-text">
                <p><span>01</span> Se puede plasmar una variedad de contenidos al público.</p>
                <p><span>02</span> Los espectadores pueden ser partícipes de la experiencia audiovisual sin perderse
                    nada.</p>
                <p><span>03</span> Ofrece una buena calidad de videos y gran resolución de imágenes.</p>
            </div>
        </div>
    </div>

    <div class="section_04">
        <div class="container_subtitles">
            <!-- <img src="./assets/productos-cards/SUBTITLE_04_PAGE02.webp" alt="section04_image_subtitle"> -->
            <!-- <h2>¿Dónde los puedo usar?</h2> -->
            <div class="subtitulos">
                <h2>¿Dónde los puedo usar?</h2>
            </div>
        </div>
        <section id="tranding">
            <div class="container-carousel">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="./assets/productos-cards/IMAGE01_SLIDER-3D_PAGE02.webp" alt="tranding_image_slide">
                            </div>
                        </div>

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="./assets/productos-cards/IMAGE02_SLIDER-3D_PAGE02.webp" alt="tranding_image_slide">
                            </div>
                        </div>

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="./assets/productos-cards/IMAGE03_SLIDER-3D_PAGE02.webp" alt="tranding_image_slide">
                            </div>
                        </div>

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="./assets/productos-cards/IMAGE04_SLIDER-3D_PAGE02.webp" alt="tranding_image_slide">
                            </div>
                        </div>

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="./assets/productos-cards/IMAGE05_SLIDER-3D_PAGE02.webp" alt="tranding_image_slide">
                            </div>
                        </div>


                    </div>

                    <div class="tranding-slider-control">
                        <div class="swiper-button-prev slider-arrow">
                            <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div class="swiper-button-next slider-arrow">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <?php include './includes/button-wsp.php' ?>
    <?php include './includes/button-form.php' ?>
    <?php include './includes/footer.php' ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script src="./js/mensajes-wsp.js"></script>
    <script src="./js/carrusel-productos-cards.js"></script>
    <script src="./js/productos.js"></script>
    <script>
        // function agarrandoDatos(nombre, telefono, email) {
        //     const form = new FormData();
        //     form.append('nombre', nombre.value)
        //     form.append('telefono', telefono.value)
        //     form.append('email', email.value)

        //     enviandoDatosServer(form)
        // }

        // //Enviando datos al servidor:
        // function enviandoDatosServer(form) {
        //     fetch("./app/trigger/person2.php?action=ADD", {
        //             method: 'POST',
        //             body: form
        //         })
        //         .then(res => res.json())
        //         .then(console.log)
        //         .catch(err => console.log(err))
        // }

        // Función para guardar los datos en el localStorage
        function guardarDatosEnLocalStorage(data) {
            localStorage.setItem("whatsappData", JSON.stringify(data));
        }

        // Función para obtener el número de teléfono del localStorage
        function obtenerNumeroTelefonoDelLocalStorage() {
            const data = localStorage.getItem("whatsappData");
            return data ? JSON.parse(data).phoneNumber : null;
        }

        // Función para obtener los datos del localStorage
        function obtenerDatosDelLocalStorage() {
            const data = localStorage.getItem("whatsappData");
            return data ? JSON.parse(data) : null;
        }

        // Función para enviar los mensajes de WhatsApp
        function envioDatosWhatsApp(num) {
            const phone = "51" + num;
            console.log("Iniciando envío de mensajes de WhatsApp para el número:", phone);

            // Definir los intervalos de tiempo entre cada mensaje en milisegundos
            //   const tiemposEnMinutos = [0, 5000, 10000];
            const tiemposEnMinutos = [0, 2, 5];
            const intervalos = tiemposEnMinutos.map(tiempo => tiempo * 60000); // Intervalos entre el primer, segundo y tercer mensaje

            // Función para enviar un mensaje y actualizar el localStorage
            function enviarMensaje(index) {
                sendWsApi(mensajesWtsp[0][index], imagenesWtsp[0][index], phone);
                console.log("Mensaje", index + 1, "enviado.");
                sentMessages.push({
                    index,
                    time: new Date().getTime(),
                });
                guardarDatosEnLocalStorage({
                    phoneNumber: num,
                    sentMessages: sentMessages,
                });

                // Si se ha enviado el tercer mensaje, eliminar los datos del localStorage
                if (index === 2) {
                    console.log(
                        "Eliminando localStorage después de enviar todos los mensajes."
                    );
                    localStorage.removeItem("whatsappData");
                }
            }

            // Función para verificar y enviar el siguiente mensaje
            function enviarSiguienteMensaje() {
                if (messageIndex < mensajesWtsp[0].length) {
                    enviarMensaje(messageIndex);
                    messageIndex++;
                    setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
                }
            }

            // Verificar si hay mensajes pendientes en el localStorage y continuar enviándolos
            const storedData = obtenerDatosDelLocalStorage();
            const sentMessages = storedData ? storedData.sentMessages || [] : [];
            let messageIndex = sentMessages.length; // Indica el índice del siguiente mensaje a enviar

            // Si no hay mensajes pendientes, enviar el primer mensaje
            if (messageIndex === 0) {
                enviarSiguienteMensaje();
            } else {
                // Si hay mensajes pendientes, reanudar el envío desde el próximo mensaje
                setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
            }
        }

        // Evento para controlar el envío del formulario
        document
            .getElementById("formMain")
            .addEventListener("submit", function(event) {
                event.preventDefault(); // Evitar el envío del formulario por defecto

                // Verificar si hay mensajes pendientes en el localStorage
                const storedData = obtenerDatosDelLocalStorage();
                const sentMessages = storedData ? storedData.sentMessages || [] : [];

                if (sentMessages.length >= 1 && sentMessages.length < 3) {
                    alert(
                        "Debes esperar a que se completen los mensajes de WhatsApp antes de enviar otro formulario."
                    );
                    return;
                }

                // Si no hay mensajes pendientes, permitir el envío del formulario
                submit();
            });

        // Llamar a la función para enviar los mensajes de WhatsApp cuando se cargue la página
        window.onload = function() {
            console.log(localStorage.getItem("formulario-portada"));

            // Obtener el número de teléfono del formulario desde el LocalStorage
            const storedPhoneNumber = obtenerNumeroTelefonoDelLocalStorage();

            // Verificar si se recuperó un número de teléfono válido desde el LocalStorage
            const storedData = obtenerDatosDelLocalStorage();
            const sentMessages = storedData ? storedData.sentMessages || [] : [];
            if (
                storedPhoneNumber &&
                storedPhoneNumber.trim() !== "" &&
                sentMessages.length < 3
            ) {
                // Llamar a la función para enviar los mensajes de WhatsApp con el número recuperado
                envioDatosWhatsApp(storedPhoneNumber);
            } else {
                console.error(
                    "Número de teléfono no válido o ya se han enviado los mensajes."
                );
            }
        };

        function enviarEmailAjax() {
            // var queryString = window.location.search;
            // var parametros = new URLSearchParams(queryString);
            // const id_ser = parametros.get('id');

            const id_ser = document.getElementById('id_ser').value;
            const email = document.getElementById('email').value;

            var datos = new FormData();
            datos.append("id_ser", id_ser);
            datos.append("email", email);

            $.ajax({
                // url: "./public/message/Controller/process.php",
                url: "./message/Controller/process.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function(respuesta) {
                    console.log("Respuesta", respuesta);
                    if (respuesta.trim().toLowerCase() === "correctocorrectocorrecto") {
                        alert("Email Enviado");
                        window.location.href = "./public/message/Controller/process.php";

                    } else {
                        alert("ocurrio un error " + respuesta);
                    }
                }
            })
        }
    </script>

</body>

</html>