<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disenio-interiores-remodelacion-decoracion-exteriores-iluminacion</title>
    <!-- ESTILOS GLOBALES -->
    <link rel="stylesheet" href="css/global.css" integrity="your-integrity-hash" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" integrity="your-integrity-hash" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/venta-online.css"> -->
    <link rel="stylesheet" href="css/ventana.css" integrity="your-integrity-hash" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/form-products.css" integrity="your-integrity-hash" crossorigin="anonymous"> -->
    <!-- =============== REMIXICONS =============== -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" integrity="your-integrity-hash" crossorigin="anonymous"/>
    
    <link rel="preload" fetchpriority="high" as="image" href="./assets/disenio-interiores/Disenio_Portada_01.webp" type="image/webp"> 
    <!-- =============== BOOTSTRAP =============== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        
    <meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate">

    <!-- <link rel="stylesheet" href="./css/productos-cards.css"> -->
<style>
  a{
    color: inherit;
    text-decoration: none;
  }
  .nav__link1{
    padding: 7.4rem 6rem 0rem 0rem;
  }
  @media screen and (max-width: 768px){
    .nav__link1{
      padding: 1.25rem 27rem 1.25rem 1.5rem;
    }
  }
</style>
</head>

<body>
    <?php include './includes/navbar.php' ?>
    <div id="main-portada">
        <img fetchpriority="high" src="./assets/disenio-interiores/Disenio_Portada_01.webp" alt="Imagen P01" class="principal-img"> 
        <h1 class="portada_h1">OBTEN ASESORIA</h1>
        <h1 class="portada_h12">GRATUITA</h1>
        <h1 class="portada_h13">&nbsp;&nbsp;&nbsp;&nbsp;Diseño decoración y remodelacion de interiores</h1>
        <div id="formulario-portada">
          <span id="cerrar-modal">&times;</span>
          <label class="titulo-form">¡Suscríbete y obtén un</label>
          <label class="titulo-form1">DESCUENTO</label>
          <label class="titulo-form2">del 10% en tu primera compra! <br>No te lo pierdas!</label>
          <label class="titulo-form3">¡Únete ahora y descubre las tendencias en diseño!</label>
          <form id="formMain" method="post">
            <input class="form-input" type="text" name="name" id="name" placeholder="Apellidos y Nombre:" required>
            <input class="form-input" type="email" name="email" id="email" placeholder="Correo Electrónico:" required>
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Número de contacto:" required>
            <input type="hidden" value="2" name="id_ser" id="id_ser" hidden />
            <!-- <input type="text" value="1" name="id_ser" hidden /> -->
            <button type="submit" class="btn-formulario" name="submit" value="Enviar formulario" onclick="redireccionar()">¡DESCUBRE MÁS AQUÍ!</button>
            <!-- <input type="submit" value="Obtener Descuento"> -->
          </form>
        </div>
    </div>

    <script>
    function redireccionar() {
        // Cambia "nueva_pagina.html" por la URL de la página a la que deseas dirigir al usuario
        window.location.href = "tendencias-en-diseños.php";
    }
    </script>

    <section class="header_disenio">
        <div class="disenio_titulo2">
            <h1>NUESTROS PROYECTOS</h1>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <img fetchpriority="low" src="./assets/disenio-interiores/Disenio_01.webp" alt="disenio-interiores01" width="100%" height="100%">
            </div>
            <div class="grid-item">
                <img loading="lazy" src="./assets/disenio-interiores/Disenio_02.webp" alt="disenio-interiores02" width="100%" height="100%">
            </div>
            <div class="grid-item">
                <img loading="lazy" src="./assets/disenio-interiores/Disenio_03.webp" alt="disenio-interiores03" width="100%" height="100%">
            </div>
            <div class="grid-item">
                <img loading="lazy" src="./assets/disenio-interiores/Disenio_04.webp" alt="disenio-interiores04" width="100%" height="100%">
            </div>
            <div class="grid-item">
                <img loading="lazy" src="./assets/disenio-interiores/Disenio_05.webp" alt="disenio-interiores05" width="100%" height="100%">
            </div>
            <div class="grid-item">
                <img loading="lazy" src="./assets/disenio-interiores/Disenio_06.webp" alt="disenio-interiores06" width="100%" height="100%">
            </div>
            <div class="grid-item">
                <img loading="lazy" src="./assets/disenio-interiores/Disenio_07.webp" alt="disenio-interiores07" width="100%" height="100%">
            </div>
            <div class="grid-item">
                <img loading="lazy" src="./assets/disenio-interiores/Disenio_08.webp" alt="disenio-interiores08" width="100%" height="100%">
            </div>
            <div class="grid-item">
                <img loading="lazy" src="./assets/disenio-interiores/Disenio_09.webp" alt="disenio-interiores09" width="100%" height="100%">
            </div>
            <div class="grid-item">
                
            </div>
            <div class="grid-item">
                <img loading="lazy" src="./assets/disenio-interiores/Disenio_10.webp" alt="disenio-interiores10" width="100%" height="100%">
            </div>
        </div>
    </section> 

    <section class="header_disenio">
        <div class="servicios-personalizados">
                <p>Diseño decoración y remodelación de interiores Diseño decoración y remodelación de interiores Diseño decoración y remodelación de interiores</p>
        </div>
    </section>
    <section class="header_disenio">
        <div class="Disenio_global">
            <div class="grid-global">
                <img loading="lazy" src="./assets/disenio-interiores/Discotecas.webp" alt="Imagen" width="100%" height="100%">
            </div>
            <div class="grid-global">
                <img loading="lazy" src="./assets/disenio-interiores/Restaurantes.webp" alt="Imagen" width="100%" height="100%">
            </div>
            <div class="grid-global">
                <img loading="lazy" src="./assets/disenio-interiores/Bares.webp" alt="Imagen" width="100%" height="100%">
            </div>
            <div class="grid-global">
                <img loading="lazy" src="./assets/disenio-interiores/Tiendas.webp" alt="Imagen" width="100%" height="100%">
            </div>
        </div>
    </section>
    <section class="header_disenio">
        <div class="disenio_titulo3">
            <h2>Y más</h2>
            <p>Diseño decoración y remodelación de interiores Diseño decoración y remodelación de interiores Diseño decoración y remodelación de interiores</p>
        </div>
   </section>
        <div class="contacto-container">
            <img loading="lazy" src="./assets/disenio-interiores/Disenio_3.webp" alt="Contactanos">
            <div class="container">
              <span>Construyamos un negocio juntos</span><br><br><br>
            <!-- Button acción modal -->
              <button type="button"
                class="btn btn-primary border-4 border-primary w-45 mx-auto mt-5 fs-1 rounded-5 fw-bold py-2"
                data-bs-toggle="modal" while="1" data-bs-target="#exampleModal">
                ¡Contáctanos!
              </button>
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark">
                            <div class="modal-header">
                            <h2 class="modal-title m-2 fw-bold fs-1" id="exampleModalLabel">Contáctanos</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body fs-4 mx-4 my-4">
                                <form action="#" method="post">
                                    <div class="mb-4 text-start">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control py-2 fs-5" id="nombre"
                                            placeholder="Ingrese su nombre" required>
                                    </div>
                                    <div class="mb-4 text-start pt-2">
                                        <label for="celular" class="form-label">Celular</label>
                                        <input type="tel" class="form-control py-2 fs-5" id="celular"
                                            placeholder="Ingrese su telefono" maxlength="9" required>
                                    </div>
                                    <div class="mb-5 text-start pt-2">
                                        <label for="email" class="form-label">Correo</label>
                                        <input type="email" class="form-control py-2 fs-5" id="email"
                                            placeholder="Ingrese su corrreo" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary fw-bold py-2 px-5"
                                        style="font-size: 14px;">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    <style>
    .portada_h1 {
    border: 2px solid red;
    width: 50%;
    position: relative;
    font-size: 80px;
    top: 12rem;
    right: 5rem;
    font-style: italic;
    text-align: right;
    color: #FEFAF5;
    text-shadow: 2px 3px 15px #244587;
    border: 1px;
    }
    .portada_h12 {
    width: 30%;
    position: relative;
    font-size: 80px;
    top: 12rem;
    right: -10rem;
    font-style: italic;
    text-align: right;
    color: #FEFAF5;
    text-shadow: 2px 3px 15px #244587;
    border: 1px;
    }
    .portada_h13 {
    position: relative;
    width: 100%;
    height: 10%;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 7px;
    box-sizing: border-box;
    margin: 0px auto;
    display: flex;
    margin-top: 118px;
    color: #ffff;
    font-size: 30px;
    text-align:center;
    font-family: Arial;
    }
    /*Responsivo de main portada*/
    @media (max-width: 500px){
    .portada_h1 {
    width: 74%;
    position: relative;
    font-size: 29px;
    top: 8rem;
    right: 5rem;
    font-style: italic;
    text-align: right;
    color: #FEFAF5;
    text-shadow: 2px 3px 15px #244587;
    border: 1px;
    }
    .portada_h12 {
    width: 25%;
    position: relative;
    font-size: 29px;
    top: 9rem;
    right: -8rem;
    font-style: italic;
    text-align: right;
    color: #FEFAF5;
    text-shadow: 2px 3px 15px #244587;
    }
    .portada_h13 {
    position: relative;
    width: 100%;
    height: 10%;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 5px;
    box-sizing: border-box;
    margin: 0px auto;
    display: flex;
    margin-top: 34px;
    color: #ffff;
    font-size: 17px;
    text-align:center;
    font-family: Arial;
    }
    .servicios-personalizados {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 0px;
    background: #345bab;
    color: #ffff;
    }
    } 
    /*Container*/
    .grid-container {
    width: 80%;
    display: grid;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
    grid-template-columns: repeat(3, 3fr);
    gap: 10px;
    }
    .grid-container img {
    width: 80%;
    height: 187px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
    margin-bottom: 20px; 
    border-radius: 5px;
    }

    .grid-item {
    width: 100%;
    text-align: center;
    }
    /* responsive de container*/
    @media (max-width: 500px){
    .grid-container {
    width: 95%;
    gap: 5px;
    display: block;
    overflow-x: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch; /* Añadir desplazamiento suave en iOS */
    }
    .grid-item {
    width: 67%;
    display: inline-block;
    vertical-align: top;
    white-space: normal; /* Restaurar la envoltura de palabras */
    padding-right: 3px;
    }
    .grid-container img {
    width: 100%;
    height: 239px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
    margin-bottom: 20px; 
    border-radius: 5px;
    }
    .grid-container .grid-item:nth-child(10) {
    /* Estilos que deseas aplicar al octavo grid item */
    display: none;
    }

    }
    /*servicios-personalizados*/ 
    .servicios-personalizados{
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 0px;
    background: #345bab;
    color:#ffff;
    }
    .servicios-personalizados p{
    font-size: 30px;
    }
    /*Responsivo de Servicios Personalizados*/
    @media (max-width: 500px){
    .servicios-personalizados {
    width: 100%;
    }
    .servicios-personalizados p{
    font-size: 15px;
    }
    } 
    /*Disenio_global*/ 
    .Disenio_global{
    width: 100%;
    margin-top: 20px;
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
    margin: 0 auto;
    } 
    .Disenio_global img{
    width: 100%;
    height: auto;
    } 
    /*disenio_global responsivo*/ 
    @media (max-width: 500px){
    .Disenio_global {
    width: 95%;
    gap: 5px;
    display: block;
    overflow-x: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    }
    .grid-global {
    width: 67%;
    display: inline-block;
    vertical-align: top;
    white-space: normal;
    padding-right: 0px;
    margin-top: 10px;
    }
    .grid-global img {
    width: 101%;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
    margin-bottom: 20px;
    border-radius: 0px;
    } 
    }
    /*disenio_titulo3*/ 
    .disenio_titulo3{
    padding-top: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-bottom: 250px;
    } 
    .disenio_titulo3 h2 {
    text-align: center;
    font-size: 35px;
    font-family: "Arial Black", sans-serif;
    color: #203565; 
    padding-bottom: 20px; 
    }
    .disenio_titulo3 p {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 0px;
    background: #fcfbf7;
    color: #0D5C7D;
    font-size: 30px;
    } 
    /*disenio_titulo3 responsive*/ 
    @media (max-width: 500px){
    .header_disenio{
    width: 100%;
    padding: 0px;
    }
    .header_disenio .disenio_titulo3{
    text-align: center;
    justify-content: center;
    margin: 0 auto;
    padding-top: 0px;
    }
    .disenio_titulo3 h2 {
    text-align: center;
    font-size: 20px;
    font-family: "Arial Black", sans-serif;
    color: #203565; 
    } 
    .disenio_titulo3 p{
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 0px;
    background: #fcfbf7;
    color: #0D5C7D;
    font-size: 18px;
    }
    }

    
/*Formulario en Portada */
#main-portada {
    position: relative;
    /* background-color: #f8e9e9; */
    background-color: #013de7;
    overflow: hidden;
    height: 530px;
}

#formulario-portada {
    position: absolute;
    width: 400px;
    height: auto;
    top: 60%;
    left: 80%;
    transform: translate(-50%, -50%);
    /* background-color: #f3f3f3; */
    background-color: #073267;
    padding: 20px;
    border-radius: 25px;
    /* background: rgba(255, 255, 255, 0.9); */
    box-shadow: 0px 10px 14px;
    display: none;
}

#cerrar-modal {
    position: absolute;
    /* top: 10px; */
    right: 20px;
    cursor: pointer;
    font-size: 30px;
    color: #c9c9c9;
}

.form-input {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 10px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    /* background-color: #b7b7b7; */
    /*background-color: #013de7;*/
    background-color:#0138D5;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.form-input::placeholder {
    color: #fff;
    /* Color del placeholder */
    font-size: 1.5rem;
    text-indent: 10px;
    /* Ajusta el valor según sea necesario para mover el placeholder a la derecha */
}

.btn-formulario {
    width: 70%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 20px;
    border: unset;
    background-color: #0539e3;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    margin-inline: auto;
    display: block;
    font-size: 2rem;
    font-family: "Roboto", sans-serif;
    transition: color 0.3s ease;
}

.btn-formulario:hover {
    background-color: #6ec7e2;
}

.principal-img {
    width: 100%;
    height: 100%;
    top: 0%;
    position: absolute;
}

.titulo-form {
    color: #fff;
    /* text-transform: uppercase; */
    line-height: 1;
    /* height: 60px; */
    /* margin-bottom: 10px; */
    font-size: 25px;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
.titulo-form1 {
    color: #74d8e1;
    /* text-transform: uppercase; */
    line-height: 1;
    /* height: 60px; */
    /* margin-bottom: 10px; */
    font-size: 25px;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.titulo-form2 {
    color: #fff;
    /* text-transform: uppercase; */
    line-height: 1;
    /* height: 60px; */
    /* margin-bottom: 10px; */
    font-size: 20px;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.titulo-form3 {
    color: #fff;
    /* text-transform: uppercase; */
    line-height: 1;
    /* height: 60px; */
    margin-top: 15px;
    margin-bottom: 10px;
    font-size: 18px;
    font-family: "Roboto", sans-serif;
    /* font-weight: 700; */
    /* letter-spacing: 1px; */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

@media (max-width: 500px) {
    #main-portada {
        height: 300px;
    }

    #formulario-portada {
        padding: 10px;
        width: 240px;
        height: 245px;
        left: 69%;
        top: 58%;
        box-shadow: 0px 2px 14px;
    }

    .form-input {
        margin-bottom: 8px;
        padding: 3px;
        width: 90%;
    }

    .btn-formulario {
        padding: 6px;
        font-size: 11px;
    }

    .principal-img {
        height: 100%;
    }

    .titulo-form {
        font-size: 13px;
        margin-bottom: 3px;
    }
    .titulo-form1 {
        font-size: 14px;
        margin-bottom: 5px;
    }
    .titulo-form2 {
        font-size: 13px;
        margin-bottom: 5px;
    }
    .titulo-form3 {
        font-size: 12px;
        margin-bottom: 5px;
    }
}
    </style>
    <?php include './includes/button-wsp.php' ?>
    <?php include './includes/button-form.php' ?>
    <script src="js/menu-script.js"></script>
    <div class="footer_social_media">
		<div class="social_media_icons">
			<a href="https://www.facebook.com/YuntasProducciones" target="_blank">
				<img src="./assets/redes_sociales/facebook.webp" alt="social_icon" class="facebook-svg icon">
			</a>
			<a href="https://www.instagram.com/yuntasproducciones/?hl=es" target="_blank">
				<img src="./assets/redes_sociales/instagram.webp" alt="social_icon" class="instagram-svg icon">
			</a>
			<a href="https://www.tiktok.com/@yuntasproducciones" target="_blank">
				<img src="./assets/redes_sociales/tiktok.webp" alt="social_icon" class="tiktok-svg icon">
			</a>
			<a href="https://www.linkedin.com/company/yuntasproducciones/about/?viewAsMember=true" target="_blank">
				<img src="./assets/redes_sociales/linkedin.webp" alt="social_icon" class="linkedin-svg icon">
			</a>
		</div>
	</div>
  <!-- =============== jQuery =============== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/mensajes-wsp.js"></script>
    <script>
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
      const tiemposEnMinutos = [0,0.5, 1];
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