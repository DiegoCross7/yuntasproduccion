/* CARRUSEL INICIO */

// Seleccionar todos los elementos con la clase imagen
let imagenes = document.querySelectorAll('.imagen-slide');
// Definir un índice para la imagen actual
let indice = 0;

// Definir una función para cambiar la imagen activa
function cambiarImagen() {
  // Remover la clase activa de todas las imágenes
  imagenes.forEach((imagen) => {
    imagen.classList.remove('activa');
  });

  // Incrementar el índice en uno, o volver a cero si se llega al final
  indice = (indice + 1) % imagenes.length;

  // Añadir la clase activa a la imagen correspondiente al índice
  imagenes[indice].classList.add('activa');
}

// Llamar a la función cada tres segundos
setInterval(cambiarImagen, 4000);

/* CARRUSEL FIN */
