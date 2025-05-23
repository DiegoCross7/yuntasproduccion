<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Cache-Control" content="max-age=31536000, must-revalidate">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactanos</title>
  <!-- ESTILOS GLOBALES -->
  <link rel="stylesheet" href="css/global.css" integrity="your-integrity-hash" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css" integrity="your-integrity-hash" crossorigin="anonymous">
  <link rel="preload" href="css/contactanos.css" integrity="your-integrity-hash" crossorigin="anonymous" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="css/ventana.css" integrity="your-integrity-hash" crossorigin="anonymous" as="style" onload="this.onload=null;this.rel='stylesheet'">

  <!-- Precarga de la imagen -->
  <link fetchpriority="high" rel="preload" href="assets/Portada-800w.webp" as="image">

  <!-- Estilos Remixicons | swiper -->
  <style>
  :root{--swiper-theme-color:#007aff;--swiper-navigation-size:44px;}[class^="ri-"],[class*=" ri-"]{font-family:'remixicon' !important;font-style:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.ri-arrow-down-s-line:before,.ri-close-line:before,.ri-menu-line:before{content:'';display:inline-block;width:24px;height:24px;background-size:contain;background-repeat:no-repeat;vertical-align:middle}.ri-message-2-line:before,.ri-whatsapp-line:before{content:'';display:inline-block;width:40px;height:40px;background-size:contain;background-repeat:no-repeat;vertical-align:middle}.ri-arrow-down-s-line:before{background-image:url('./assets/svg/arrow-down.svg')}.ri-close-line:before{background-image:url('./assets/svg/close-line.svg')}.ri-menu-line:before{background-image:url('./assets/svg/menu-line.svg')}.ri-message-2-line:before{background-image:url('./assets/svg/message-contactanos.svg')}.ri-whatsapp-line:before{background-image:url('./assets/svg/whatsapp-contactanos.svg')}:root{--text-white:#e2e2e2;--text-black:#000;--bg-black:#000;--nav-select:#2c2f34;--bg-dropdown:#d9d9d9;--footer-bg:#263060}*{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth;font-size:62.5%}ul,li,ol{list-style-type:none}a{color:inherit;text-decoration:none}:root{--swiper-theme-color:#007aff;--swiper-navigation-size:44px}
  </style>

  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"  integrity="your-integrity-hash" crossorigin="anonymous" async>

  <!--=============== REMIXICONS ===============-->
  <link disabled href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" integrity="your-integrity-hash" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/productos-cards.css" integrity="your-integrity-hash" crossorigin="anonymous">
</head>

<body>
  <?php include './includes/navbar.php' ?>

  <!-- PORTADA INICIO -->

  <div id="main-portada">
    <!-- <img fetchpriority="high" src="assets/Portada.webp" alt="Imagen Portada" class="principal-img" width="800" height="390" decoding="async" loading="lazy"> -->
    <img 
    src="assets/Portada-1200w.webp" 
    srcset="./assets/Portada-400w.webp 400w, ./assets/Portada-800w.webp 800w, ./assets/Portada-1200w.webp 1200w" 
    sizes="(max-width: 600px) 600w, (max-width: 800px) 800w, 1200w" 
    alt="Imagen Portada" 
    class="principal-img"
    width="1200"
    height="675">
    <h1 class="h1_portada">Contacta con nosotros</h1>
    <div id="formulario-portada">
      <span id="cerrar-modal">&times;</span>
      <label class="titulo-form">Complete el siguiente formulario para descubrir los BENEFICIOS!</label>
      <form id="formMain" method="post">
        <input class="form-input" type="text" name="name" id="name" placeholder="Nombre:" required>
        <input class="form-input" type="email" name="email" id="email" placeholder="Correo:" required>
        <input class="form-input" type="text" name="phone" id="phone" placeholder="Móvil:" required>
        <input type="hidden" value="2" name="id_ser" id="id_ser" hidden />
        <!-- <input type="text" value="1" name="id_ser" hidden /> -->
        <button type="submit" class="btn-formulario" name="submit" value="Enviar formulario">Enviar</button>
        <!-- <input type="submit" value="Obtener Descuento"> -->
      </form>
    </div>
  </div>
  <style>
    /*Formulario en Portada */
    #main-portada {
      position: relative;
      /* background-color: #f8e9e9; */
      background-color: #fefaf5;
      overflow: hidden;
      height: 530px;
      width: 100%;
    }

    #formulario-portada {
      position: absolute;
      width: 30vw;
      height: auto;
      top: 56%;
      left: 72%;
      transform: translate(-50%, -50%);
      background-color: #ffffff;
      padding: 20px;
      border-radius: 25px;
      box-shadow: 0px -5px 20px;
      display: none;
      z-index: 1;
    }

    #cerrar-modal {
      position: absolute;
      top: 6px;
      right: 11px;
      cursor: pointer;
      font-size: 30px;
      color: #c9c9c9;
    }

    .form-input {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 10px;
      border: 1px solid powderblue;
      box-sizing: border-box;
      background-color: lightblue;
      margin-left: auto;
      margin-right: auto;
      display: block;
      height: 30px;
      margin-bottom: 2.5rem;
    }

    .form-input::placeholder {
      color: gray;
      font-size: 1.5rem;
      text-indent: 10px;
    }

    .btn-formulario {
      width: 70%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 20px;
      border: unset;
      background-color: #ffd749;
      box-sizing: border-box;
      color: #203565;
      cursor: pointer;
      margin-inline: auto;
      display: block;
      font-size: 2rem;
      font-family: "Roboto", sans-serif;
      transition: color 0.3s ease;
    }

    .btn-formulario:hover {
      background-color: #f7de8c;
    }

    .principal-img {
      width: 100%;
      height: 100%;
      top: 0%;
      position: absolute;
    }

    .titulo-form {
      color: #203565;
      text-transform: uppercase;
      line-height: 1;
      height: 35px;
      margin-bottom: 10px;
      font-size: 2.2rem;
      font-family: "Roboto", sans-serif;
      font-weight: 700;
      letter-spacing: 1px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    
    @media (max-width: 900px) {
      #main-portada {
        height: 360px;
      }

      #formulario-portada {
        padding: 10px;
        width: 265px;
        height: 260px;
        left: 60%;
        top: 60%;
        box-shadow: 0px 2px 14px;
        z-index: 2;
      }

      .btn-formulario {
        padding: 9px;
        font-size: 1.3rem;
        height: 30px;
        position: relative;
        bottom: 3px;
      }

      .titulo-form {
        font-size: 1.3rem;
        margin-bottom: 5px;
      }

      .form-input {
        margin-bottom: 8px;
        padding: 8px;
        height: 30px;
      }

    }
  </style>

  <div id="grid-contactanos">
    <div id="contenedor-informacion">
      <div id="informacion-contactanos">
        <ul>
          <li class="contact-info"><span class="bold">Teléfono</span><br>
            <p>+51 912 849 782</p>
          </li>
          <li class="contact-info"><span class="bold">Dirección</span><br>
            <p>Urb. Alameda La Rivera Mz F Lt
              30<br>Ate 15001</p>
          </li>
          <li class="contact-info"><span class="bold">Correo</span><br>
            <p>yuntasproducciones@gmail.com</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <?php include './includes/button-wsp.php' ?>
  <?php include './includes/button-form.php' ?>
  <?php include './includes/footer.php' ?>

  <!-- =============== jQuery =============== -->
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- =============== Sweet Alert 2 =============== -->
  <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script defer src="js/menu-script.js"></script>
  <script defer src="./js/mensajes-wsp.js"></script>

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

    /*========== FUNCION MENSAJERIA WSP ===========*/
    const btnCerrar = document.getElementById("cerrar-modal");
    const modalContainer = document.getElementById("formulario-portada");
    const objRegex = {
      telefono: /^9\d{2}\d{3}\d{3}$/, //validar que tenga 9 caracteres y que esten todos juntos
      gmail: /^[\w\.-]+@(gmail|outlook|hotmail|ucsm|senati)\.(com|edu.pe|pe)$/, //validar la estructura de un correo electrónico
    };

    document.addEventListener("DOMContentLoaded", mostrarModalDespuesDe5Segundos);

    // Función para mostrar el modal después de 1 segundos
    function mostrarModalDespuesDe5Segundos() {
      if (localStorage.getItem("whatsappData")) {
        modalContainer.style.display = "none";
      } else {
        setTimeout(() => {
          modalContainer.style.display = "block";
          validarDatos();
        }, 1000); // 1000 milisegundos = 1 segundos
      }
    }

    // Agregar evento al botón de cerrar
    btnCerrar.addEventListener("click", () => {
      console.log("clickeaste");
      modalContainer.style.display = "none";
    });

    function validarDatos() {
      const formMain = document.querySelector("#formMain");
      formMain.addEventListener("submit", (e) => {
        e.preventDefault();
        datos();
      });
    }

    function datos() {
      const nombreInput = document.getElementById("name");
      const telefonoInput = document.getElementById("phone");
      const emailInput = document.getElementById("email");

      // Hacer que los 9 números esten juntos
      const telefono = telefonoInput.value.replace(/\s/g, "");
      const email = emailInput.value.trim();

      const telefonoValido = objRegex.telefono.test(telefono);
      const emailValido = objRegex.gmail.test(email);

      if (nombreInput.value === "") alert("El nombre no debe estar vacio");

      if (!telefonoValido) alert("El número de teléfono debe incluir 9 dígitos");

      if (!emailValido) alert("Debe de ingresar un correo valido.");

      /* Modificado */
      if (nombreInput.value != "" && telefonoValido && emailValido) {
        // alert("Todos los campos son correctos.")
        modalContainer.style.display = "none";
        // agarrandoDatos(nombreInput, telefonoInput, emailInput);
        envioDatosWhatsApp(telefono);
        enviarEmailAjax();
        limpiarDatos(nombreInput, telefonoInput, emailInput);
      }
    }

    function limpiarDatos(nombre, telefono, email) {
      nombre.value = "";
      telefono.value = "";
      email.value = "";
    }
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
      const tiemposEnMinutos = [0, 0.5, 1];
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
        console.error(
          "Número de teléfono no válido o ya se han enviado los mensajes."
        );
      }
    };

    function enviarEmailAjax() {
      const id_ser = document.getElementById('id_ser').value;
      const email = document.getElementById('email').value;

      var datos = new FormData();
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

          } else {
            alert("ocurrio un error " + respuesta);
          }
        }
      })
    }
  </script>
</body>

</html>