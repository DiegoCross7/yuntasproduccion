<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyectores-3d-holografico-reproductor-ventilador-3d</title>
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
  <link rel="preload" im as="image" href="./assets/productos-cards/PORTADA_PROYECTOR_3D.webp" type="image/webp">

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
      border: 1px;
    }
    .section_01{
        width: 100%;
        height: 510px;
    }
    .section_02{
        width: 100%;
        height: 610px;
    }
    .section_03{
        width: 100%;
        height: 610px;
    }
    .section_04{
        width: 100%;
        height: 710px;
    }

    .section_01 .container_subtitles img {
      height: 70%;
    }

    .section_01 .content {
      height: 400px;
    }

    .section_01 .paragraph {
      width: 25%;
      translate: 10% -25%;
    }

    .section_02 .container_subtitles img {
      height: 65%;
    }

    .section_02 .content_info {
      height: 90%;
    }

    .first_col {
      width: 35px;
      height: 100%;
    }

    .line {
      background-position: 65% 60%;
      width: 100%;
    }

    .sec_col {
      width: 358px;
      gap: 0.5rem 0;
    }

    .content_info p {
      font-size: 2rem;
    }

    .section_03 .container_subtitles img {
      height: 45%;
    }

    .context-text {
      width: 36%;
      height: 85%;
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

    .content_img::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"%3E%3Crect x="0" y="0" width="100" height="100" fill="%23f3f3f3" /%3E%3C/svg%3E');
      /* Fondo de carga mientras se carga la imagen real */
      background-size: cover;
    }

    .content_img.loaded::after {
      background-image: none;
      /* Elimina el fondo de carga cuando la imagen real está cargada */
    }

    @media (max-width: 1175px) {
      .sec_col {
        width: 100%;
        justify-content: space-between;
      }

      .section_03 .context-text p {
        font-size: 2rem;
      }
    }

    @media (max-width: 1075px) {
      .section_03 .context-text p {
        font-size: 1.5rem;
        padding-right: 0;
      }

      .section_01 .paragraph {
        font-size: 1.9rem;
      }
    }

    @media (max-width: 575px) {
    .section_01{
        height: auto;
    }
    .section_02{
        height: auto;
    }
    .section_03{
        height: auto;
    }
    .section_04{
        height: auto;
    }
      .section_02 .content_info {
        height: 80%;
        margin: 0;
      }

      .sec_col {
        font-size: 1.1rem;
        gap: 0;
      }

      .section_02 .content_info p {
        font-size: 1.1rem;
      }

      .context-text {
        width: 40% !important;
        gap: 2rem 0;
        translate: 5% -50%;
      }

      .section_03 .context-text p {
        font-size: 1.2rem;
      }

      .section_03 .context-text span {
        font-size: 2rem;
        margin-top: 0;
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
    }

    @media (max-width: 425px) {
        
    
      .section_01 .paragraph {
        font-size: 1.35rem;
        width: 44%;
        transform: translate(-29%, 10%);
      }

      .sec_col {
        transform: translate(5%, -5%);
      }

      h1 {
        width: 45%;
        font-size: 45px;
        top: 4rem;
        right: -2rem;
      }
    }

    @media (max-width: 330px) {
      .section_03 .context-text {
        gap: 5rem 0;
        translate: 10% -55%;
      }

      .section_03 .content .context-text p {
        font-size: 1.2rem;
      }
    }

    .section_04 {
      background-color: #FEFAF5;
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
    <img fetchpriority="high" src="./assets/productos-cards/PORTADA_PROYECTOR_3D.webp" alt="Imagen portada principal" class="principal-img" width="100%" height="100%">
    <!-- <img src="./assets/productos-cards/DESCUENTO.webp" alt="" class="descuento-img"> -->
    <h1>PROYECTOR 3D</h1>
    <div id="formulario-portada">
      <span id="cerrar-modal">&times;</span>
      <label class="titulo-form">¡NO ESPERES MÁS!</label>
      <form id="formMain" method="post">
        <input class="form-input" type="text" name="name" id="name" placeholder="Nombre:" required>
        <input class="form-input" type="email" name="email" id="email" placeholder="Correo:" required>
        <input class="form-input" type="text" name="phone" id="phone" placeholder="Móvil:" required>
        <input type="hidden" value="2" name="id_ser" id="id_ser" hidden />
        <!-- <input type="text" value="1" name="id_ser" hidden /> -->
        <button type="submit" class="btn-formulario" name="submit" value="Enviar formulario">Obtener Descuento</button>
        <!-- <input type="submit" value="Obtener Descuento"> -->
      </form>
    </div>
  </div>



  <!--<div class="main-carousel">
    <div class="carousel_text">
      <img src="./assets/productos-cards/BACKGROUND_RADIUS_PAGE07.webp" alt="">
    </div>
    <div class="bxslider">
      <img src="./assets/productos-cards/CARUSEL_IMAGE01_PAGE07.webp" alt="carousel_image_01">
      <img src="./assets/productos-cards/CARUSEL_IMAGE02_PAGE07.webp" alt="carousel_image_02">
      <img src="./assets/productos-cards/CARUSEL_IMAGE03_PAGE07.webp" alt="carousel_image_03">
      <img src="./assets/productos-cards/CARUSEL_IMAGE04_PAGE07.webp" alt="carousel_image_04">
      <img src="./assets/productos-cards/CARUSEL_IMAGE05_PAGE07.webp" alt="carousel_image_05">
      <img src="./assets/productos-cards/CARUSEL_IMAGE06_PAGE07.webp" alt="carousel_image_06">
    </div>
  </div>-->
  <!-- 
  <div class="container-carrusel">
        <div class="carrusel">
            <div class="item">
                <p class="text-carrusel">Proyector 3D con <br> WIFI </p>
                <img src="./assets/productos-cards/CARRUSEL_PROYECTOR_3D01.webp" class="img-piso">
            </div>

            <div class="item">
                <p class="text-carrusel">Proyector 3D con <br>video de alta resolucion</p>
                <img src="./assets/productos-cards/CARRUSEL_PROYECTOR_3D02.webp" class="img-piso">
            </div>

            <div class="item">
                <p class="text-carrusel">Proyector 3D<br> reproductor de hologramas 3D</p>
                <img src="./assets/productos-cards/CARRUSEL_PROYECTOR_3D03.webp" class="img-piso">
            </div>
        </div>
        <button type="button" class="btn_cotizar">COTIZAR</button>
  </div> -->

  <div class="container-carrusel">
    <div class="swiper-container carrusel">
      <div class="swiper-wrapper">
        <div class="swiper-slide item">
          <p class="text-carrusel">Proyector 3D con WI-FI</p>
          <img loading="lazy" src="./assets/productos-cards/CARRUSEL_PROYECTOR_3D01.webp" class="img-piso" alt="carousel_image_01">
        </div>
        <div class="swiper-slide item">
          <p class="text-carrusel">Proyector 3D con video de alta resolución</p>
          <img loading="lazy" src="./assets/productos-cards/CARRUSEL_PROYECTOR_3D02.webp" class="img-piso" alt="carousel_image_02">
        </div>
        <div class="swiper-slide item">
          <p class="text-carrusel">Proyector 3D Reproductor de hologramas 3D</p>
          <img loading="lazy" src="./assets/productos-cards/CARRUSEL_PROYECTOR_3D03.webp" class="img-piso" alt="carousel_image_03">
        </div>
        <div class="swiper-slide item">
          <p class="text-carrusel">Proyector 3D Reproductor de video holográfico</p>
          <img loading="lazy" src="./assets/productos-cards/CARRUSEL_PROYECTOR_3D04.webp" class="img-piso" alt="carousel_image_04">
        </div>
        <div class="swiper-slide item">
          <p class="text-carrusel">Proyector 3D Hologramas HD</p>
          <img loading="lazy" src="./assets/productos-cards/CARRUSEL_PROYECTOR_3D05.webp" class="img-piso" alt="carousel_image_05">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <a href="https://api.whatsapp.com/send?phone=51912849782">
      <button type="button" class="btn_cotizar">COTIZAR</button>
    </a>
  </div>

  <div class="section_01">
    <div class="container_subtitles">
      <!-- <div class="subtitulo1">
        <h1>PROYECTA TU IMAGINACIÓN</h1>
      </div> -->
      <div class="subtitulos">
        <h2>PROYECTA TU IMAGINACIÓN</h2>
      </div>
      <!-- <img src="./assets/productos-cards/SUBTITLE_01_PAGE06.webp" alt="section01_image_subtitle"> -->

    </div>
    <div class="content">
      <p class="paragraph">
        Los geniales proyectos 3D son dispositivos que crean y proyectan una ilusión virtual de un holograma flotante en
        el aire. La ilusión virtual hace que las imágenes, videos y gif tengan una apariencia más real, haciendo que
        estén más cerca de nosotros físicamente.</p>
      <!-- <div class="content_img" style="background-image: url(assets/productos-cards/BACKGROUND_SECTION01_PAGE06.webp);"> -->
      <div class="content_img lazy-background" data-src="assets/productos-cards/BACKGROUND_SECTION01_PAGE06.webp">
      </div>
    </div>
  </div>

  <div class="section_02">
    <div class="container_subtitles">
      <div class="subtitulos">
        <h2>CARACTERISTICAS</h2>
      </div>
    </div>
    <div class="content">
      <!-- <div class="content_img" style="background-image: url(./assets/productos-cards/BACKGROUND_SECTION02_PAGE06.webp);"> -->
      <div class="content_img lazy-background" data-src="assets/productos-cards/BACKGROUND_SECTION02_PAGE06.webp">
      </div>
      <div class="content_info">
        <div class="first_col">
          <div class="line"></div>
        </div>
        <div class="sec_col">
          <p>Diseño mejorado Version 2,0 version Wifi / computadora.</p>
          <p>Software compatible con iOS y Android.</p>
          <p>El aspa gira a una velocidad de 750 revoluciones / min.</p>
          <p>La imagen que se proyecta no tiene borders ni fondos.</p>
          <p>Las cuerdas LED permite darle vida a las imágenes.</p>
          <p>Sin restricciones lumínicas.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section_03">
    <div class="container_subtitles">
      <div class="subtitulos">
        <h2>BENEFÍCIOS</h2>
      </div>
    </div>
    <div class="content">
      <!-- <div class="content_img" style="background-image: url('./assets/productos-cards/BACKGROUND_SECTION03_PAGE06.webp');"></div> -->
      <div class="content_img lazy-background" data-src="assets/productos-cards/BACKGROUND_SECTION03_PAGE06.webp"></div>
      <div class="context-text">
        <p><span>01</span> Atrae la atención del público debido a lo innovador de los proyectores 3D.</p>
        <p><span>02</span> Genera un gran impacto visual mostrando imágenes y mensajes en 3D.</p>
        <p><span>03</span> Ahorra la energía gracias a la tecnología 3D.</p>
      </div>
    </div>
  </div>

  <div class="section_04">
    <div class="container_subtitles">
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
                <img loading="lazy" src="./assets/productos-cards/IMAGE01_SLIDER-3D_PAGE06.webp" alt="tranding_image_slide">
                <!-- <p class="car">TIENDAS Y NEGOCIOS</p> -->
              </div>
            </div>

            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img loading="lazy" src="./assets/productos-cards/IMAGE02_SLIDER-3D_PAGE06.webp" alt="tranding_image_slide">
                <!-- <p class="car">CENTROS COMERCIALES</p>   -->
              </div>
            </div>

            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img loading="lazy" src="./assets/productos-cards/IMAGE03_SLIDER-3D_PAGE06.webp" alt="tranding_image_slide">
              </div>
            </div>

            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img loading="lazy" src="./assets/productos-cards/IMAGE04_SLIDER-3D_PAGE06.webp" alt="tranding_image_slide">
              </div>
            </div>

            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img loading="lazy" src="./assets/productos-cards/IMAGE05_SLIDER-3D_PAGE06.webp" alt="tranding_image_slide">
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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script src="./js/mensajes-wsp.js"></script>
  <script src="./js/carrusel-productos-cards.js"></script>
  <script src="./js/productos.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
  const lazyBackgrounds = document.querySelectorAll(".lazy-background");
  
  lazyBackgrounds.forEach(function(bg) {
    const imageSrc = bg.getAttribute("data-src");
    const img = new Image();
    img.src = imageSrc;
    
    img.onload = function() {
      bg.style.backgroundImage = `url('${imageSrc}')`;
      bg.classList.add("loaded");
    }
  });
});
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
        sendWsApi(mensajesWtsp[1][index], imagenesWtsp[1][index], phone);
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
        console.warn(
          "Número de teléfono no válido o ya se han enviado los mensajes."
        );
      }
    };

    // function enviarEmailAjax() {
    //     var queryString = window.location.search;
    //     var parametros = new URLSearchParams(queryString);
    //     const id_ser = parametros.get('id');

    //     const email = document.getElementById('email').value;

    //     var datos = new FormData();
    //     datos.append("id_ser", id_ser);
    //     datos.append("email", email);

    //     $.ajax({
    //         url: "./public/message/Controller/process.php",
    //         method: "POST",
    //         data: datos,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: function(respuesta) {
    //             console.log("Respuesta", respuesta);
    //             if (respuesta.trim().toLowerCase() === "correctocorrectocorrecto") {
    //                 alert("Email Enviado");

    //             } else {
    //                 alert("ocurrio un error " + respuesta);
    //             }
    //         }
    //     })
    // }
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
            // window.location.href = "./public/message/Controller/process.php";

          } else {
            alert("ocurrio un error " + respuesta);
          }
        }
      })
    }
  </script>
</body>

</html>