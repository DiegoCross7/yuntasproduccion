<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pvc-paneles</title>
    <!-- ESTILOS GLOBALES -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/venta-online.css">
    <link rel="stylesheet" href="css/pvc-paneles.css">
    <link rel="stylesheet" href="css/ventana.css">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        #formulario-portada {
            position: absolute;
            width: 400px;
            height: auto;
            top: 77%;
            left: 83%;
            transform: translate(-50%, -50%);
            /* background-color: #f3f3f3; */
            background-color: #ffffff;
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

        .titulo-form {
            color: #203565;
            text-transform: uppercase;
            line-height: 1;
            height: 35px;
            margin-bottom: 10px;
            font-size: 2.2rem;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .form-input {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            /* background-color: #b7b7b7; */
            background-color: #0000004D;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .form-input::placeholder {
            color: white;
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
            background-color: #FFD749;
            box-sizing: border-box;
            color: #203565;
            cursor: pointer;
            margin-inline: auto;
            display: block;
            font-size: 2.0rem;
            font-family: 'Roboto', sans-serif;
            transition: color 0.3s ease;
        }

        .btn-formulario:hover {
            background-color: #f7de8c;
        }

        .btn_cotizar {
            width: 220px;
            height: 50px;
            background-color: #ff1b00;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-family: fantasy;
            display: block;
            margin: 0 auto;
            margin-top: -25px;
        }

        @media (max-width: 1200px) {
            #formulario-portada {
                width: 350px;
            }
        }

        @media (max-width: 1050px) {
            #formulario-portada {
                width: 300px;
                left: 80%;
                box-shadow: 0px 2px 14px;
            }

            .titulo-form {
                font-size: 1.8rem;
                margin-bottom: 5px;
            }

            .form-input {
                margin-bottom: 10px;
                padding: 9px;
            }

            .btn-formulario {
                padding: 9px;
                font-size: 1.5rem;
            }
        }

        @media (max-width: 800px) {
            .carrusel {
                height: 400px;
            }

            #formulario-portada {
                width: 270px;
                left: 70%;
                top: 35%;
                padding: 10px;
            }

            .titulo-form {
                font-size: 1.8rem;
                margin-bottom: 5px;
            }

            .form-input {
                margin-bottom: 10px;
                padding: 9px;
            }

            .btn-formulario {
                padding: 9px;
                font-size: 1.5rem;
            }
        }

        @media (max-width: 500px) {
            #formulario-portada {
                left: 64%;
                top: 37%;
                padding: 5px;
            }

            .principal-img {
                height: 70%;
                display: none;
                visibility: hidden;
            }

            #main-portada {
                height: 400px;
            }

            .slide-text-contain p {
                position: relative;
                top: -10%;
            }

        }

        @media (max-width: 400px) {
            #formulario-portada {
                left: 61%;
                top: 40%;
            }

            .btn_cotizar {
                width: 120px;
                height: 40px;
                background-color: #ff1b00;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 25px;
                cursor: pointer;
                font-family: fantasy;
                display: block;
                margin: 0 auto;
                margin-top: -20px;
            }
        }

        @media (max-width: 380px) {
            #formulario-portada {
                top: 46%;
            }
        }

        /* ventana emergente */
    </style>
</head>

<body>
    <?php include './includes/navbar.php' ?>
    <!-- SLIDE VENTA ONLINE PROYECTORES 3D INICIO -->

    <div class="carrusel">
        <div class="imagen-slide slide-text-contain activa" style="background-image: url('./assets/slider/slider1-pvc-paneles.webp'); background-repeat: no-repeat; background-size: cover; ">
            <p class="slide-text-title">PANELES <br>ENMADERADOS</p>
            <p class="slide-text-subtitle1">Ideales para revestir paredes interiores <br>con estilo y practicidad.</p>
            <p class="slide-text-subtitle2">
                <span class="circle">10% </BR>OFF</span>
            </p>
            
        </div>
        <div class="imagen-slide slide-text-contain" style="background-image: url('./assets/slider/slider2-pvc-paneles.webp'); background-repeat: no-repeat; background-size: cover; ">
            <p class="slide-text-title">MÁRMOL <br>PVC</p>
            <p class="slide-text-subtitle">Imita con realismo y elegancia el mármol natural a un costo más accesible.</p>
            <p class="slide-text-subtitle2">
                <span class="circle">10%</BR>OFF</span>
            </p>
           
        </div>
        <!-- <div class="imagen-slide slide-text-contain" style="background-image: url('./assets/slider/slider3-pvc-paneless.webp'); background-repeat: no-repeat; background-size: cover; ">
            <p class="slide-text-title">PVC y WALL PANELS</p>
            <p class="slide-text-subtitle">Te ofrecemos más alternativas para crear espacios únicos.</p>
        </div>
        <div class="imagen-slide slide-text-contain" style="background-image: url('./assets/slider/slider4-pvc-paneless.webp'); background-repeat: no-repeat; background-size: cover; ">
            <p class="slide-text-title">PVC y WALL PANELS</p>
            <p class="slide-text-subtitle">Te ofrecemos más alternativas para crear espacios únicos.</p>
        </div> -->
    </div>



    <!-- ventana emergente -->
    <!-- <div id="main-portada">
        <img src="./assets/productos-cards/PORTADA_PANTALLAS_LED.webp" alt="Imagen" class="principal-img">

        <div id="formulario-portada">
            <span id="cerrar-modal">&times;</span>
            <label class="titulo-form">¡NO ESPERES MÁS!</label>
            <form id="formMain" method="post">
                <input class="form-input" type="text" name="name" id="name" placeholder="Nombre:" required>
                <input class="form-input" type="email" name="email" id="email" placeholder="Correo:" required>
                <input class="form-input" type="text" name="phone" id="phone" placeholder="Móvil:" required>

                <button type="submit" class="btn-formulario" name="submit" value="Enviar formulario">Obtener Descuento</button>

            </form>
        </div>

    </div> -->

    <div id="formulario-portada">
        <span id="cerrar-modal">&times;</span>
        <label class="titulo-form">¡NO ESPERES MÁS!</label>
        <form id="formMain" method="post">
            <input class="form-input" type="text" name="name" id="name" placeholder="Nombre:" required>
            <input class="form-input" type="email" name="email" id="email" placeholder="Correo:" required>
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Móvil:" required>
            <input type="hidden" value="1" name="id_ser" id="id_ser" hidden />
            <button type="submit" class="btn-formulario" name="submit" value="Enviar formulario">Obtener Descuento</button>
        </form>
    </div>


    <!-- SLIDE VENTA ONLINE PROYECTORES 3D FIN -->

    <!-- SEPARADOR INICIO -->
    <!-- <div class="separador-container">
        <div class="separador-line"></div>
        <a href="https://api.whatsapp.com/send?phone=51912849782">
            <button type="button" class="btn_cotizar">COTIZAR</button>
        </a>
    </div> -->
    <!-- SEPARADOR FIN -->

    <!-- SUBTITLE INICIO -->
    <div class="sectionTitle">
        <p class="sectionTitle-text">VARIEDAD DE ESTILOS</p>
    </div>
    <!-- SUBTITLE FIN -->

    <!-- EJEMPLOS DE ESTILOS INICIO -->
    <!-- <div class="estilos-ejemplos">
        <div style="background-image: url('./assets/pvc-paneles/estilo-bg-1.webp'); background-size: cover;">
            <img src="./assets/pvc-paneles/estilo-ejemplo1.webp" alt="Estilo 01">
        </div>
        <div style="background-image: url('./assets/pvc-paneles/estilo-bg-2.webp'); background-size: cover;">
            <img src="./assets/pvc-paneles/estilo-ejemplo2.webp" alt="Estilo 02">
        </div>
        <div style="background-image: url('./assets/pvc-paneles/estilo-bg-3.webp'); background-size: cover;">
            <img src="./assets/pvc-paneles/estilo-ejemplo3.webp" alt="Estilo 03">
        </div>
        <div style="background-image: url('./assets/pvc-paneles/estilo-bg-4.webp'); background-size: cover;">
            <img src="./assets/pvc-paneles/estilo-ejemplo4.webp" alt="Estilo 04">
        </div>
    </div> -->
    <!-- EJEMPLOS DE ESTILOS FIN -->

    <!-- SEPARADOR INICIO -->
    <!-- <div class="separador-container">
        <div class="separador-line">
        </div>
    </div> -->
    <!-- SEPARADOR FIN -->

    <!-- SUBTITLE INICIO -->
    <!-- <div class="sectionTitle">
        <hr>
        <p class="sectionTitle-text">NUESTROS PRODUCTOS</p>
        <hr>
    </div> -->
    <!-- SUBTITLE FIN -->

    <!-- NUESTROS PRORUCTOS INICIO -->
    
<div id="productos-container">
    <div class="productos-cont">
        <div class="pvc-letras">
            <p>• Construye tus sueños sobre una base sólida y auténtica ¡Da vida a tus espacios con la calidez y el encanto eterno de los paneles enmaderados!</p>
        </div>
        <div class="pvc-imagen">
            <img src="./assets/pvc-paneles/producto2-hover.webp" alt="Producto 02">
        </div>
    </div>
    <div class="productos-cont1 " style="display:none">
        <div class="pvc-letras1">
            <p>• Descubre la elegancia y durabilidad del PVC con aspecto de mármol. Transporta tus espacios con belleza eterna.<br>
            <br>• Una opción popular por su capacidad de replicar la belleza del mármol sin el alto precio.</p>
        </div>
        <div class="pvc-imagen1">
            <img src="./assets/pvc-paneles/producto4-hover.webp" alt="Producto 04">
        </div>
    </div>
</div>
  
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const productosContainer = document.getElementById('productos-container');
    const productos = productosContainer.querySelector('.productos-cont');
    const productos1 = productosContainer.querySelector('.productos-cont1');

  
    function cambiarContenido() {
        if (window.getComputedStyle(productos).getPropertyValue("display")=="grid") {
            productos.style.display = 'none';
        }
        else{
            productos.style.display = 'grid';
        }
        if (window.getComputedStyle(productos1).getPropertyValue("display")=="grid") {
            productos1.style.display = 'none';
        }
        else{
            productos1.style.display = 'grid';
        }
        
    }

    setInterval(cambiarContenido, 10000);
    });
</script>  
    <!-- NUESTROS PRORUCTOS INICIO -->

    <!-- SEPARADOR INICIO -->
    <!-- <div class="separador-container">
        <div class="separador-line"></div>
    </div> -->
    <!-- SEPARADOR FIN -->

    <!-- SUBTITLE INICIO -->
<div class="sectionTitle">
    <p class="sectionTitle-text">CARACTERÍSTICAS</p>
</div>

<div id="caracteristicas-container">
    <div class="caracteristicas-cont">
        <div class="carac-imagen">
            <img src="./assets/pvc-paneles/producto9-hover.webp" alt="Producto 09">
        </div>
        <div class="carac-letras">
            <p><b>• Textura Tridimensional:</b> Los paneles 3D añaden profundidad y dimensión a las paredes con su textura única. <br>
            <br><b>• Variedad de Diseños:</b> Disponibles en una amplia gama de diseños y patrones, desde abstractos hasta geométricos, permitiendo personalizar el estilo decorativo. <br>
            <br><b>• Fácil Instalación y Versatilidad:</b> Los paneles 3D son versátiles y fáciles de instalar en diversas áreas como paredes interiores, techos o muebles, añadiendo un toque moderno y sofisticado.
            </p>
        </div>
    </div>
    <div class="caracteristicas-cont1" style="display:none">
        <div class="carac-imagen1">
            <img src="./assets/pvc-paneles/producto10-hover.webp" alt="Producto 10">
        </div>
        <div class="carac-letras1">
            <p><b>• Realismo:</b> El PVC con efecto mármol simula la apariencia auténtica del mármol, ofreciendo elegancia a un costo más accesible que el mármol natural. <br>
            <br><b>• Durabilidad:</b> Los paneles de PVC con diseño de mármol son resistentes al agua y duraderos, ideales para áreas como cocinas y baños donde se requiere una superficie fácil de limpiar y mantener. <br>
            <br><b>• Variedad de Estilos:</b> Este tipo de PVC está disponible en una amplia gama de estilos, patrones y colores que imitan diferentes tipos de mármol, permitiendo elegir la opción que mejor se adapte al estilo y la decoración del espacio.
            </p>
        </div>
       
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const caracteristicasContainer = document.getElementById('caracteristicas-container');
    const caracteristicas = caracteristicasContainer.querySelector('.caracteristicas-cont');
    const caracteristicas1 = caracteristicasContainer.querySelector('.caracteristicas-cont1');

  
    function cambiarContenido() {
        if (window.getComputedStyle(caracteristicas).getPropertyValue("display")=="grid") {
            caracteristicas.style.display = 'none';
        }
        else{
            caracteristicas.style.display = 'grid';
        }
        if (window.getComputedStyle(caracteristicas1).getPropertyValue("display")=="grid") {
            caracteristicas1.style.display = 'none';
        }
        else{
            caracteristicas1.style.display = 'grid';
        }
        
    }

    setInterval(cambiarContenido, 10000);
    });
</script> 

    <!-- SUBTITLE FIN -->

    <!-- SLIDER DE MUESTRAS INICIO -->
    <!-- <div class="carrusel-pvc-paneles"> -->
        <!-- Swiper 1 -->
        <!-- <div class="swiper mySwiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-1.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-2.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-3.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-4.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-5.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-6.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-7.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-1.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-2.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-3.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-4.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-5.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-6.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/3d-madera-7.webp" alt="Modelo"/>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="carrusel-pvc-paneles"> -->
        <!-- Swiper 2 -->
        <!-- <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-1.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-2.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-3.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-4.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-5.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-6.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-7.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-1.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-2.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-3.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-4.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-5.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-6.webp" alt="Modelo"/>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/pvc-paneles/carrusel-doble/madera-marmol-7.webp" alt="Modelo"/>
                </div>
            </div>
        </div>
    </div> -->
    <!-- SLIDER DE MUESTRAS FIN -->

    <!-- SEPARADOR INICIO -->
    <!-- <div class="separador-container">
        <div class="separador-line"></div>
    </div> -->
    <!-- SEPARADOR FIN -->

    <!-- BENEFICIOS INICIO -->
    <div class="sectionTitle">
        <p class="sectionTitle-text">BENEFICIOS</p>
    </div>

    <div id="beneficios-container">
        <div class="beneficios-cont">
            <div class="bene-letras">
                <p> <b>• Transformación Estética:</b> Añaden profundidad y textura, transformando el aspecto de una pared de manera atractiva. <br>
                    <br><b>• Aislamiento acústico:</b> Algunos paneles 3D de PVC reducen el ruido y mejoran la calidad del sonido en el ambiente. <br>
                    <br><b>• Durabilidad y Resistencia:</b> Son resistentes a la humedad y los impactos, lo que los hace ideales para áreas con alta exposición a condiciones adversas o uso intensivo.
                </p>
            </div>
            <div class="bene-imagen">
                <img src="./assets/pvc-paneles/producto11-hover.webp" alt="Producto 11">
            </div>
        </div>
        <div class="beneficios-cont1 " style="display:none">
            <div class="bene-letras1">
                <p>
                    <b>• Costo Accesible:</b> Ofrece un aspecto elegante y sofisticado a un costo más bajo que el mármol natural. <br>
                    <br><b>• Fácil Instalación y Mantenimiento:</b> No requiere los cuidados especiales del mármol natural, como sellado regular o pulido. <br>
                    <br><b>• Flexibilidad de Diseño:</b> El PVC de mármol se adapta fácilmente a diversas formas y dimensiones, permitiendo aplicaciones creativas en el diseño interior.
                </p>
            </div>
            <div class="bene-imagen1">
                <img src="./assets/pvc-paneles/producto12-hover.webp" alt="Producto 12">
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
    const beneficiosContainer = document.getElementById('beneficios-container');
    const beneficios = beneficiosContainer.querySelector('.beneficios-cont');
    const beneficios1 = beneficiosContainer.querySelector('.beneficios-cont1');

  
    function cambiarContenido() {
        if (window.getComputedStyle(beneficios).getPropertyValue("display")=="grid") {
            beneficios.style.display = 'none';
        }
        else{
            beneficios.style.display = 'grid';
        }
        if (window.getComputedStyle(beneficios1).getPropertyValue("display")=="grid") {
            beneficios1.style.display = 'none';
        }
        else{
            beneficios1.style.display = 'grid';
        }
        
    }

    setInterval(cambiarContenido, 10000);
    });
</script> 

    <!-- <div class="beneficios-section">
        <div class="beneficios-container">
            <p class="sectionTitle-text">BENEFICIOS</p>
            <div class="beneficio-list">
                <p class="beneficio-number">01</p>
                <p class="beneficio-description">Son fáciles y prácticos de instalar debido a su peso ligero. Además,
                    requieren poco mantenimiento y
                    son resistentes al moho y la putrefacción.</p>
            </div>
            <div class="beneficio-list">
                <p class="beneficio-number">02</p>
                <p class="beneficio-description">Es conocido por su durabilidad y resistencia a la intemperie, la
                    humedad, los productos químicos y la
                    abrasión. Material ideal tanto en interiores como en exteriores.</p>
            </div>
            <div class="beneficio-list">
                <p class="beneficio-number">03</p>
                <p class="beneficio-description">Los productos se pueden fabricar en una amplia variedad de colores y
                    acabados, lo que permite
                    opciones de diseño y personalización.</p>
            </div>
        </div>
    </div> -->
    <!-- BENEFICIOS FIN -->

    <?php include './includes/button-wsp.php' ?>
    <?php include './includes/button-form.php' ?>
    <?php include './includes/footer.php' ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- <style>
        #main-portada {
            position: relative;
            /* background-color: #f8e9e9; */
            background-color: #FEFAF5;
            overflow: hidden;
            height: 530px;
        }

        #cerrar-modal {
            position: absolute;
            /* top: 10px; */
            right: 20px;
            cursor: pointer;
            font-size: 30px;
            color: #c9c9c9;
        }

        .titulo-form {
            color: #203565;
            text-transform: uppercase;
            line-height: 1;
            height: 35px;
            margin-bottom: 10px;
            font-size: 2.2rem;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .form-input {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            /* background-color: #b7b7b7; */
            background-color: #0000004D;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .form-input::placeholder {
            color: white;
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
            background-color: #FFD749;
            box-sizing: border-box;
            color: #203565;
            cursor: pointer;
            margin-inline: auto;
            display: block;
            font-size: 2.0rem;
            font-family: 'Roboto', sans-serif;
            transition: color 0.3s ease;
        }

        .btn-formulario:hover {
            background-color: #f7de8c;
        }


        @media (min-width: 1200px) {
            .btn_cotizar {
                width: 220px;
                height: 50px;
                background-color: #ff1b00;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 25px;
                cursor: pointer;
                font-family: fantasy;
                display: block;
                margin: 0 auto;
                margin-top: -25px;
            }

            #formulario-portada {
                position: absolute;
                width: 400px;
                height: auto;
                top: 60%;
                left: 80%;
                transform: translate(-50%, -50%);
                /* background-color: #f3f3f3; */
                background-color: #ffffff;
                padding: 20px;
                border-radius: 25px;
                /* background: rgba(255, 255, 255, 0.9); */
                box-shadow: 0px 10px 14px;
                display: none;
            }
        }

        @media (max-width: 450px) {
            .btn_cotizar {
                width: 120px;
                height: 40px;
                background-color: #ff1b00;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 25px;
                cursor: pointer;
                font-family: fantasy;
                display: block;
                margin: 0 auto;
                margin-top: -20px;
            }
        }

        /* ventana emergente */

        @media (max-width: 500px) {
            #formulario-portada {
                padding: 15px;
                width: 300px;
                left: 60%;
                top: 66%;
                box-shadow: 0px 2px 14px;
            }

            .titulo-form {
                font-size: 1.8rem;
                margin-bottom: 5px;
            }

            .form-input {
                margin-bottom: 10px;
                padding: 9px;
            }

            .btn-formulario {
                padding: 9px;
                font-size: 1.5rem;
            }

            .principal-img {
                height: 70%;
                display: none;
                visibility: hidden;
            }

            #main-portada {
                height: 400px;
            }
        }
    </style> -->
    <?php include './includes/button-wsp.php' ?>
    <?php include './includes/button-form.php' ?>
    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script src="./js/mensajes-wsp.js"></script>
    <script src="./js/productos.js"></script>

    <script src="js/carrusel-hero.js"></script>
    <script src="js/carrusel-doble-pvc-paneles.js"></script>

    <script>
        /*=============== SHOW MENU INICIO ===============*/
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
        /*=============== SHOW MENU FIN ===============*/

        /*=============== MENSAJES WSP Y CORREO INICIO ===============*/

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