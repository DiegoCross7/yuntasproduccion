/* MODAL */
//  $(document).ready(function() {
//     // Mostrar el formulario después de 10 segundos
//     setTimeout(function() {
//         $('#formulario-portada').fadeIn();
//         validarDatos();
//     }, 1000);

//     // Cerrar el modal al hacer clic en el botón de cierre
//     $('#cerrar-modal').click(function() {
//         $('#formulario-portada').fadeOut();
//     });
// });

/*========== MENU ==========*/
$(document).ready(function () {
  // Mostrar/ocultar lista de productos al hacer clic en el logo del menú
  $("#logo-menu").click(function (event) {
    event.stopPropagation(); // Evita que el evento se propague al documento
    $("#menu-list").stop(true, true).slideToggle(); // Alternar entre mostrar y ocultar con animación suave
  });

  // Ocultar el menú cuando se hace clic en cualquier otra parte de la pantalla
  $(document).click(function (event) {
    if (!$(event.target).closest("#menu-container").length) {
      $("#menu-list").slideUp(); // Oculta la lista con animación de despliegue suave
    }
  });

  // Manejar clic en un producto de la lista
  $(".product-link").click(function () {
    var product = $(this).data("product");
    // Redirigir a la página del producto correspondiente
    window.location.href = product + ".php";
  });
});
/*========== CARRUSEL PORTADA ==========*/
var swiper = new Swiper('.swiper-containerp', {
  // Configuración del carrusel
  autoplay: {
      delay: 5000, // Cambia la imagen cada 5 segundos
  },
  loop: true, // Repetir el carrusel continuamente
  allowTouchMove: false, // Deshabilitar el desplazamiento con el mouse
});


/*========== CARRUSEL INICIO ==========*/
var swiper = new Swiper(".carrusel", {
  slidesPerView: 3,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
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
    }, 10000); // 1000 milisegundos = 1 segundos
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


