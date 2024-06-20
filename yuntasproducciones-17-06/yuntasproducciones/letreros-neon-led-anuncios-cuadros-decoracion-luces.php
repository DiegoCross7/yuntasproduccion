<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letreros-neon-led-anuncios-cuadros-decoracion-luces</title>
    
    <!-- ESTILOS GLOBALES -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/ventana.css"> 
    
    <!--=============== REMIXICONS ===============-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <!-- PRELOAD STYLESHEET -->
    <link rel="preload" href="./css/productos-cards.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="./css/productos-cards.css">
    </noscript>

    <!--=============== ESTILOS ===============-->
    <link rel="stylesheet" href="css/letreros-neon-led-anuncios-cuadros-decoracion-luces.css">
    
    <!-- VERIFICACIÓN GOOGLE -->
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
    <h1>LETREROS NEON LED</h1>
    <label id="texto-debajo-h1"></label>
    <label class="asesoria-gratis">ASESORIA GRATIS!!!</label>
    <img loading="lazy" src="./assets/productos-cards/IMAGE_SEMIAZUL.webp" id="semiazul" alt="Descuento">
    <div class="slider">
    <div class="slider--inner">
        <img fetchpriority="high" src="../assets/letreros-neon-led/PORTADA_LETREROS-NEON01.webp" alt="Imagen" data-texto="Transforma tus ambientes con la luminosidad y versatilidad de nuestros letreros neón LED"/>    
        <img loading="lazy" fetchpriority="low" src="../assets/productos-cards/PORTADA_LETRERO_NEON02.webp" alt="Imagen" data-texto="Imagina tus palabras favoritas o tu logotipo en un neón 3D brillante. Nuestros letreros de neón LED lo hacen posible."/>      
        <img loading="lazy" fetchpriority="low" src="../assets/letreros-neon-led/PORTADA_LETREROS-NEON03.webp" alt="Imagen" data-texto="Desde nombres hasta frases inspiradoras, nuestros letreros de neón LED añaden un toque moderno y vibrante." style="bottom:10px;"/>
    </div>
</div>


    <div id="formulario-portada">
        <span id="cerrar-modal">&times;</span>
        <label class="titulo-form">¡NO ESPERES MÁS!</label>
        <form id="formMain" method="post">
            <input class="form-input" type="text" name="name" id="name" placeholder="Nombre:" required>
            <input class="form-input" type="email" name="email" id="email" placeholder="Correo:" required>
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Móvil:" required>
            <input type="hidden" value="2" name="id_ser" id="id_ser" hidden />
            <button type="submit" class="btn-formulario" name="submit" value="Enviar formulario">Obtener Descuento</button>
        </form>
    </div>
</div>

    <div class="container-carrusel">
        <div class="swiper-container carrusel">
            <div class="swiper-wrapper">
                <div class="swiper-slide item">
                    <p class="text-carrusel">Letrero Led para restobares </p>
                    <img loading="lazy" src="./assets/productos-cards/CARRUSEL_LETRERO_NEON_LED01.webp" class="img-piso" alt="carousel_image_01">
                </div>
                <div class="swiper-slide item">
                    <p class="text-carrusel">Letrero Led como decoración</p>
                    <img loading="lazy" src="./assets/productos-cards/CARRUSEL_LETRERO_NEON_LED02.webp" class="img-piso" alt="carousel_image_02">
                </div>
                <div class="swiper-slide item">
                    <p class="text-carrusel">Letrero Led para restaurantes</p>
                    <img loading="lazy" src="./assets/productos-cards/CARRUSEL_LETRERO_NEON_LED03.webp" class="img-piso" alt="carousel_image_03">
                </div>
                <div class="swiper-slide item">
                    <p class="text-carrusel">Letrero Led para salon de bellesa</p>
                    <img loading="lazy" src="./assets/productos-cards/CARRUSEL_LETRERO_NEON_LED04.webp" class="img-piso" alt="carousel_image_04">
                </div>
                <div class="swiper-slide item">
                    <p class="text-carrusel">Letrero Led para bares</p>
                    <img loading="lazy" src="./assets/productos-cards/CARRUSEL_LETRERO_NEON_LED05.webp" class="img-piso" alt="carousel_image_05">
                </div>
                <div class="swiper-slide item">
                    <p class="text-carrusel">Letrero Led para negocios y más</p>
                    <img loading="lazy" src="./assets/productos-cards/CARRUSEL_LETRERO_NEON_LED06.webp" class="img-piso" alt="carousel_image_06">
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
            <div class="subtitulos">
                <h2>ILUMINA TUS ESPACIOS</h2>
            </div>
        </div>
        <div class="content">
            <div class="content_p">
                <p class="paragraph">
                En la actualidad se ha visto que estan evolucionando los diseños de decoración, dándole un toque de
                creatividad. Estamos hablando de los letreros neón led, que están teniendo acogida por sus diferentes
                modelos que tienen y porque poseen la opción de personalizarse.
                </p>
            </div>

            <div class="content_img" style="background-image: url(assets/productos-cards/BACKGROUND_SECTION01_PAGE01.webp);"></div>
        </div>
    </div>

    <div class="section_02">
        <div class="container_subtitles">
            <div class="subtitulos">
                <h2>CARACTERÍSTICAS</h2>
            </div>
        </div>
        <div class="content">
            <div class="content_img" style="background-image: url(assets/productos-cards/BACKGROUND_SECTION02_PAGE01.webp);"></div>
            <div class="content_p">
                <div class="content_info">
                    <div class="first_col">
                        <div class="line"></div>
                    </div>
                    <div class="sec_col">
                    <p>Hecho de material de acrílico (como panel de PVC).</p>
                    <p>Personalizable en colores, diseño, fuentes, frases, etc.</p>
                    <p>Resistente a golpes, polvo, agua, vibraciones, etc.</p>
                    <p>Iluminación con Neón LED Flexible RGB espesor 5mm.</p>
                    <p>No se puede recalentar ni emite algún ruido.</p>
                    <p>Consumo de energía: 30v.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section_03">
        <div class="container_subtitles">
            <div class="subtitulos">
                <h2>BENEFICIOS</h2>
            </div>
        </div>
        <div class="content">
            <div class="content_p">
                <div class="context-text">
                <p><span>01</span> Decoración perfecta para recrear e iluminar ambientes muy variados.</p>
                <p><span>02</span> Emana un brillo de alto impacto.</p>
                <p><span>03</span> Su eficiencia económica igual a la del neón convencional, le permite consumir menos luz.</p>
                </div>
            </div>
            <div class="content_img" style="background-image: url(assets/productos-cards/BACKGROUND_SECTION03_PAGE01.webp);"></div>

        </div>
    </div>

    <div class="section_04">
        <div class="container_subtitles">
            <div class="subtitulos">
                <h2>¿DONDÉ LO PUEDO USAR?</h2>
            </div>
        </div>
        <section id="tranding">
            <div class="container-carousel">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <picture>
                                    <source srcset="./assets/productos-cards/IMAGE01_SLIDER-3D_PAGE01.webp" type="image/webp">
                                    <source srcset="./assets/productos-cards/IMAGE01_SLIDER-3D_PAGE01.jpg" type="image/jpeg">
                                    <img loading="lazy" src="./assets/productos-cards/IMAGE01_SLIDER-3D_PAGE01.jpg" alt="tranding_image_slide" width="800" height="600">
                                </picture>
                            </div>
                        </div>

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <picture>
                                    <source srcset="./assets/productos-cards/IMAGE02_SLIDER-3D_PAGE01.webp" type="image/webp">
                                    <source srcset="./assets/productos-cards/IMAGE02_SLIDER-3D_PAGE01.jpg" type="image/jpeg">
                                    <img loading="lazy" src="./assets/productos-cards/IMAGE02_SLIDER-3D_PAGE01.jpg" alt="tranding_image_slide" width="800" height="600">
                                </picture>
                            </div>
                        </div>

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <picture>
                                    <source srcset="./assets/productos-cards/IMAGE03_SLIDER-3D_PAGE01.webp" type="image/webp">
                                    <source srcset="./assets/productos-cards/IMAGE03_SLIDER-3D_PAGE01.jpg" type="image/jpeg">
                                    <img loading="lazy" src="./assets/productos-cards/IMAGE03_SLIDER-3D_PAGE01.jpg" alt="tranding_image_slide" width="800" height="600">
                                </picture>
                            </div>
                        </div>

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <picture>
                                    <source srcset="./assets/productos-cards/IMAGE04_SLIDER-3D_PAGE01.webp" type="image/webp">
                                    <source srcset="./assets/productos-cards/IMAGE04_SLIDER-3D_PAGE01.jpg" type="image/jpeg">
                                    <img loading="lazy" src="./assets/productos-cards/IMAGE04_SLIDER-3D_PAGE01.jpg" alt="tranding_image_slide" width="800" height="600">
                                </picture>
                            </div>
                        </div>

                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <picture>
                                    <source srcset="./assets/productos-cards/IMAGE05_SLIDER-3D_PAGE01.webp" type="image/webp">
                                    <source srcset="./assets/productos-cards/IMAGE05_SLIDER-3D_PAGE01.jpg" type="image/jpeg">
                                    <img loading="lazy" src="./assets/productos-cards/IMAGE05_SLIDER-3D_PAGE01.jpg" alt="tranding_image_slide" width="800" height="600">
                                </picture>
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

    <?php include './includes/button-wsp.php'; ?>
    <?php include './includes/button-form.php'; ?>
    <?php include './includes/footer.php'; ?>

<!-- Cargar scripts externamente con defer o async para optimizar el rendimiento -->
            <script type="module" async src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule defer src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script defer src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
            <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script defer src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

            <script defer src="./js/mensajes-wsp.js"></script>
            <script defer src="./js/carrusel-productos-cards.js"></script>
            <script defer src="./js/productos.js"></script>
            <script defer src="./js/carrusel-portada.js"></script>

            <script>
            // Función para guardar datos en localStorage
            function guardarDatosEnLocalStorage(data) {
                localStorage.setItem("whatsappData", JSON.stringify(data));
            }

            // Función para obtener datos de localStorage
            function obtenerDatosDelLocalStorage() {
                const data = localStorage.getItem("whatsappData");
                return data ? JSON.parse(data) : null;
            }

            // Función para obtener el número de teléfono del localStorage
            function obtenerNumeroTelefonoDelLocalStorage() {
                const data = obtenerDatosDelLocalStorage();
                return data ? data.phoneNumber : null;
            }

            // Función para enviar los mensajes de WhatsApp
            function envioDatosWhatsApp(num) {
                const phone = "51" + num;
                console.log("Iniciando envío de mensajes de WhatsApp para el número:", phone);

                const tiemposEnMinutos = [0, 2, 5];
                const intervalos = tiemposEnMinutos.map(tiempo => tiempo * 60000);

                function enviarMensaje(index) {
                    sendWsApi(mensajesWtsp[0][index], imagenesWtsp[0][index], phone);
                    console.log("Mensaje", index + 1, "enviado.");
                    sentMessages.push({ index, time: new Date().getTime() });
                    guardarDatosEnLocalStorage({ phoneNumber: num, sentMessages });

                    if (index === 2) {
                        console.log("Eliminando localStorage después de enviar todos los mensajes.");
                        localStorage.removeItem("whatsappData");
                    }
                }

                function enviarSiguienteMensaje() {
                    if (messageIndex < mensajesWtsp[0].length) {
                        enviarMensaje(messageIndex);
                        messageIndex++;
                        setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
                    }
                }

                const storedData = obtenerDatosDelLocalStorage();
                const sentMessages = storedData ? storedData.sentMessages || [] : [];
                let messageIndex = sentMessages.length;

                if (messageIndex === 0) {
                    enviarSiguienteMensaje();
                } else {
                    setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
                }
            }

            // Evento para controlar el envío del formulario
            document.getElementById("formMain").addEventListener("submit", function(event) {
                event.preventDefault();

                const storedData = obtenerDatosDelLocalStorage();
                const sentMessages = storedData ? storedData.sentMessages || [] : [];

                if (sentMessages.length >= 1 && sentMessages.length < 3) {
                    alert("Debes esperar a que se completen los mensajes de WhatsApp antes de enviar otro formulario.");
                    return;
                }

                this.submit();
            });

            // Enviar mensajes de WhatsApp cuando se cargue la página
            window.onload = function() {
                console.log(localStorage.getItem("formulario-portada"));
                const storedPhoneNumber = obtenerNumeroTelefonoDelLocalStorage();
                const sentMessages = obtenerDatosDelLocalStorage() ? obtenerDatosDelLocalStorage().sentMessages || [] : [];
                
                if (storedPhoneNumber && storedPhoneNumber.trim() !== "" && sentMessages.length < 3) {
                    envioDatosWhatsApp(storedPhoneNumber);
                } else {
                    console.warn("Número de teléfono no válido o ya se han enviado los mensajes.");
                }
            };

            function enviarEmailAjax() {
                const id_ser = document.getElementById('id_ser').value;
                const email = document.getElementById('email').value;
                const datos = new FormData();
                datos.append("id_ser", id_ser);
                datos.append("email", email);

                $.ajax({
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
                            alert("Ocurrió un error " + respuesta);
                        }
                    }
                });
            }
            </script>

</body>

</html>