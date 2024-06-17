<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <!-- ESTILOS GLOBALES -->
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/ventana.css">
  <!--=============== REMIXICONS ===============-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

  <link rel="stylesheet" href="./css/productos-cards.css">
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
                <li class="product-link" data-product="pisos-led-programables-pixel-eventos-fiestas-pista-baile">Pisos</li>
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

  <div class="image-container">
  </div>

  <div class="center-image">
    <h1>¡Lo que tenemos para ti!</h1>
     <div class="conte1">
     <img src="assets/poligono-productos-led-3d-1.webp" alt="Innova"  width="628px" height="40px">
      </div>
    
  </div>
  
  <div>
    <div>
      <div>
        <div class="row">
          <div class="column">
            <a href="productos-led-3d.php">
              <img src="assets/Productosledy3d.webp" alt="" width="100%" height="100%">
              <div class="texto-bajo-imagen"><p>Productos led y 3D</p></div>
            </a>
          </div>
            <div class="column">
            <a href="pvc-paneles.php">
              <img src="assets/Paneles-pvc.webp" alt="" width="100%" height="100%">
              <div class="texto-bajo-imagen"><p>Paneles y PVC</p></div>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="contenedor-especial">
    <img src="assets/Rectangle-172.webp" alt="Imagen Especial">
    <div class="texto1">COMPRA DESDE LA COMODIDAD DE TU HOGAR</div>
    <div class="texto2">Escríbenos para cotizar y renovar tu espacio o negocio<br>¡Llévatelo al mejor precio en...</div>
    <img class="adicional yunta" src="assets/yuntas_letras_blancas_1.webp" alt="Yunta Letras">
    <a href="https://api.whatsapp.com/send?phone=51912849782">
        <button class="boton-contacto">¡Contáctanos!</button>
    </a>
  </div>

  <?php include './includes/button-wsp.php' ?>
  <?php include './includes/button-form.php' ?>
  <?php include './includes/footer.php' ?>
</div>

  <script>
    
  </script>

  <style>
    .boton-contacto {
    background-color: blue;
    color: white;
    border-radius: 60px;
    border: none;
    font-size: 35px;
    font-family: "Baskerville Old Face", serif;
    }
    .contenedor-especial .boton-contacto {
        width: 25%;
        height: 15%;
        position: absolute;
        bottom: 10px;
        left: 37%;
        transform: translateY(-20%);
    }
    @media (max-width: 768px) {
      .contenedor-especial .boton-contacto {
        width: 30%;
        height: 10%;
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
      }
      .boton-contacto {
        font-size: 1rem;
      }
    }
    h1 {
      color: #244ebc;
      font-size: 35px;
      top: 16rem;
      right: 0rem;
      margin-right: 0rem;
      font-family: fantasy;
    }
    /* Estilos del contenedor */
    .contenedor-especial {
      position: relative;
      width: 90%; 
      max-width: 1200px; 
      height: auto; 
      overflow: hidden;
      border-radius: 50px;
      margin: 0 auto;
      background-color: #F5F5F5; 
    }
    .contenedor-especial img {
      width: 100%;
      height: 100%;
      border-radius: 30px;
      position: relative;
      filter: brightness(0.5);
    }
    .texto1 {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -250%); 
      text-align: center;
      font-size: 40px;
      white-space: nowrap;
      font-weight: bold;
      color: white; 
    }
    .texto2 {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -80%);
      text-align: center;
      font-size: 22px;
      white-space: nowrap;
      color: white; 
    }
    .contenedor-especial img.yunta {
      position: absolute;
       top: 60%;
       left: 50%;
       transform: translate(-50%, 50px); 
       width: auto; 
      height: auto;
      border-radius: 60px;
      filter: contrast(1.5);
    }

    .contenedor-especial img.adicional {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translate(-50%, -10px);
      width: auto; 
      height: auto;
      border-radius: 60px; 
      filter: contrast(1.5);
    }
    @media (max-width: 768px) {
      .contenedor-especial {
        width: 80%;
        border-radius: 30px;
        margin-bottom: 25px;
      }

      .texto1 {
        font-size: 10px;
      }

      .texto2 {
       font-size: 6px;
      }

     .contenedor-especial img.yunta{
       width: 20%;
     }
     .contenedor-especial img.adicional {
       width: 20%;
       border-radius: 60px;
      }
    }
    
    /*Buscador*/
    #header {
            position: relative;
            width: 100%;
            padding: 18px;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #d9d9d9;
    }
    #menu-container {
      display: flex;
      align-items: center;
    }
    #logo-menu {
      display: inline-block;
      margin: 0 100px;
      text-align: center;
      width: 150px;
      cursor: pointer;
    }
    @media (max-width: 500px) {
      #logo-menu{
        margin: 0;
      }
    }
    @media (max-width: 450px) {
      #logo-menu {
        width: 120px;
      }
    }
    @media (max-width: 465px) {
      .search-input{
        width: 100% !important;
      }
    }
    #menu-icon {
      font-size: 24px;
      font-weight: 600;
    }
    #menu-text {
      margin-left: 10px;
      font-size: 24px;
      font-family: 'Roboto', sans-serif;
      font-weight: 600;
    }
    #search-producto {
            flex: 1;
            margin-left: 20px;
    }
    .search-input {
            width: 60%;
            padding: 10px;
            border-radius: 20px;
            font-size: 16px;
            color: #333;
            background-color: #fff;
    }
    /*Buscador*/

    .row1 {
      display: flex;
      justify-content: center;
      width: 100%;
    }
    
    
    .column img {
      border-radius: 20px;
    }
    .column img {
    width: 100%; 
    height: auto; 
    border-radius: 30px; 
  }

  @media (min-width: 1200px) {
    .texto-bajo-imagen p{
    text-align: center;
    font-size: 35px;
    margin-top: -40px;
    font-family: fantasy;
    text-shadow: 2px 2px 4px rgba(0, 0, 255, 0.5);
    }
    .texto-bajo-imagen {
      width: 150px;
    position: absolute;
    bottom: 170px;
    left: 47%;
    transform: translateX(-50%);
    padding: 10px;
    }
    .center-image {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 40vh;
      overflow: hidden;
    }
    .center-image h1 {
    margin-bottom: 28px;
    }
    .conte1 img {
      width: 100%;
      transform: scale(0.5);
      border-radius: 10px;
      display: block;
      margin: 0 auto;
      margin-top:-20px;
    }

  }

    body {
      background-color: #ffffff;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    h2 {
      font-size: 64px;
      font-weight: bold;
      color: #fff;
      margin: 0;
    }

    p {
      font-size: 20px;
      color: #F5F5F5;
      margin: 0;
    }

    .image-container {
      background-image: url(assets/portadaproductos.webp);
      background-size: 100% 100%;
      background-position: center;
      height: calc(100vh - 71px);
      position: relative;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .footer__container {
      margin-top: 70px;
    }

    /********************************/

    .row {
      display: flex;
      justify-content: center;
      width: 100%;
    }

    .column {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 1.2rem;
    }

    .column img {
      max-width: 100%;
      max-height: 100%;
    }

    .color-fondo {
      background-color: #F5F5F5;
    }

    .blue {
      background-color: #253060;
    }

    @media (max-width: 1200px) {
      .image-container {
        height: 459px;
      }

      h2 {
        font-size: 60px;
      }

      p {
        font-size: 19px;
      }
    }

    @media (max-width: 1000px) {
      .image-container {
        height: 400px;
      }

    }

    @media (max-width: 800px) {
      .image-container {
        height: 300px;
      }

      .text-container {
        margin-top: 40px;
        margin-left: 18px;
      }

      h2 {
        font-size: 48px;
      }

      p {
        font-size: 18px;
      }
    }

    @media (max-width: 650px) {
      .image-container {
        height: 270px;
      }

      .text-container {
        margin-top: 10px;
        margin-left: 0px;
      }

      h2 {
        font-size: 40px;
      }

      p {
        font-size: 17px;
      }
    }

    @media (max-width: 550px) {
      .image-container {
        height: 210px;
      }

      h2 {
        font-size: 28px;
        margin-bottom: 2px;
      }

      p {
        font-size: 16px;
      }
    }

    @media (max-width: 450px) {
      .texto-bajo-imagen p{
        text-align: center;
        font-size: 18px;
        margin-top: -30px;
        font-family: fantasy;
        text-shadow: 2px 2px 4px rgba(0, 0, 255, 0.5);
      }
      .texto-bajo-imagen {
        width: 100px;
        position: absolute;
        bottom: 65px;
        left: 50%;
        transform: translateX(-50%);
        padding: 10px;
      }
      .image-container {
        height: 170px;
      }

      h2 {
        font-size: 20px;
      }

      p {
        font-size: 1rem;
      }
      .center-image{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 10vh;
        overflow: hidden;
      }
      .center-image h1 {
        font-size: 16px;
      }
      .conte1 img {
        width: 100%;
        transform: scale(0.4);
        border-radius: 10px;
        display: block;
        margin: 0 auto;
      }
    }

    @media (max-width: 400px) {
      .image-container {
        height: 155px;
      }

      h2 {
        font-size: 19.5px;
      }

      p {
        font-size: 1rem;
      }
    }

  </style>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script src="js/menu-script.js"></script>
  <script src="./js/productos.js"></script>
</body>

</html>