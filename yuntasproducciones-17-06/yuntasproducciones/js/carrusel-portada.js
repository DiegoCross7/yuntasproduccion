window.addEventListener('DOMContentLoaded', function() {
    let sliderInner = document.querySelector(".slider--inner");
    let images = sliderInner.querySelectorAll("img");
    let index = 0;

    const coloresTextShadowH1 = ["#ff008a", "#9100ff", "#ff008a"];
    const coloresTextShadow = ["#9100ff", "#ff008a","#9100ff"];

    function cambiarTextoDebajo() {
        let texto = images[index].getAttribute("data-texto");
        
        document.getElementById("texto-debajo-h1").textContent = texto;
        document.querySelector("#texto-debajo-h1").style.textShadow = "2px -4px 15px " + coloresTextShadow[index];
        document.querySelector("h1").style.textShadow = "2px -4px 15px " + coloresTextShadowH1[index];
        
    }

    cambiarTextoDebajo(); // Cambiar el texto debajo del h1 al cargar la página

    setInterval(function () {
        let percentage = index * -100;
        sliderInner.style.transform = "translateX(" + percentage + "%)";
        cambiarTextoDebajo(); // Cambia el texto debajo del h1 
        index++;
        if (index >= images.length) {
            index = 0; // Reinicia el índice cuando alcanza el final del array
        }
    }, 5000);
});
