<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yuntas Producciones Blog</title>
  <meta name="description" content="Descubre en Yuntas Producciones Blog consejos, tendencias y soluciones innovadoras para tu negocio. Explora artículos sobre sostenibilidad empresarial, minimalismo en diseño y más. ¡Visítanos y destaca tu negocio con nosotros!">

  <!-- ESTILOS CRÍTICOS -->
  <style>
  :root{--swiper-theme-color:#007aff;--swiper-navigation-size:44px;--text-white:#e2e2e2;--text-black:#000;--bg-black:#000;--nav-select:#2c2f34;--bg-dropdown:#d9d9d9;--footer-bg:#263060}@import url('https://fonts.googleapis.com/css2?family=Monomaniac+One&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap');*{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth;font-size:62.5%}ul,li,ol{list-style-type:none}a{color:inherit;text-decoration:none}[class^="ri-"],[class*=" ri-"]{font-family:'remixicon' !important;font-style:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.ri-arrow-down-s-line:before,.ri-close-line:before,.ri-menu-line:before{content:'';display:inline-block;width:24px;height:24px;background-size:contain;background-repeat:no-repeat;vertical-align:middle}.ri-arrow-down-s-line:before{background-image:url('./assets/svg/arrow-down.svg')}.ri-close-line:before{background-image:url('./assets/svg/close-line.svg')}.ri-menu-line:before{background-image:url('./assets/svg/menu-line.svg')}.about_container{display:flex;width:60%;padding:50px 0;justify-content:space-between;margin:0 auto}.about_container__title{font-weight:400;font-size:24px;cursor:pointer;color:#263060}.about_container__title:hover{font-weight:700}.nosotros__text h2{font-size:3rem;padding:15px 0}.icon-whatsapp{display:block;background-color:#25d366;width:60px;height:60px;border-radius:50%;position:fixed;z-index:9999;bottom:1.5rem;right:1.8rem;transition:color .2s ease,background .2s ease}.icon-whatsapp div{display:flex;width:inherit;height:inherit;align-items:center;justify-content:center}.icon-whatsapp div i{font-size:3.5rem;color:#fff}.icon-whatsapp:hover i{color:#25d366}.icon-whatsapp:hover{background-color:#fff}@font-face{font-family:Montserrat;font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v26/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Ew-.ttf) format('truetype')}
  </style>

  <!-- ESTILOS GLOBALES -->
  <link disabled rel="stylesheet" href="css/global.css">
  <link rel="preload" href="css/estilo.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="css/blog.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

  <!-- Precarga de la imagen de mayor LCP -->
  <link rel="preload" fetchpriority="high" as="image" href="./assets/blog/float_image_02.webp">
  <link rel="preload" fetchpriority="high" as="image" href="./assets/blog/float_image_01.webp">

  <!--=============== REMIXICONS ===============-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" async>
  <link disabled href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

  <script defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <link disabled rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link disabled rel="stylesheet" href="css/productos-cards.css">
</head>

<body>
  <?php include './includes/navbar.php' ?>

  <main class="main">

    <div class="container_image_main">
      <figure>
        <img src="./assets/blog/main_image.webp" srcset="./assets/blog/main_image-480w.webp 480w,
                ./assets/blog/main_image-800w.webp 800w,
                ./assets/blog/main_image.webp 1400w" sizes="(max-width: 600px) 480px, (max-width: 800px) 800px, 1400w" fetchpriority="high" alt="main_image" width="1440px" height="810px">
      </figure>

      <div class="float_container">

        <div class="float_container__item">
          <figure>
            <img src="./assets/blog/float_image_01.webp" alt="float_image" width="571px" height="322px">
          </figure>
          <div class="float_container__info">
            <p>Sostenibilidad Empresarial con PVC:</p>
            <p>El camino al Éxito</p>
            <a href="blog_second.php" class="float_container__info__link">Leer artículo</a>
          </div>
        </div>

        <div class="float_container__item">
          <figure>
            <img src="./assets/blog/float_image_02.webp" fetchpriority="high" alt="float_image" width="571px" height="322px">
          </figure>
          <div class="float_container__info">
            <p>El minimalismo como una filosofia</p>
            <p>de vida y diseño</p>
            <a href="blog_second.php" class="float_container__info__link">Leer artículo</a>
          </div>
        </div>
      </div>
    </div>


    <div class="article_description_container">

      <div class="articles_container">

        <div class="articles_container__item">
          <figure>
            <img src="./assets/blog/article_image_01.webp" srcset="./assets/blog/article_image_01-480w.webp 480w,
                ./assets/blog/article_image_01.webp 600w" sizes="(max-width: 600px) 480px, 600w" alt="image_interiores_01" width="660px" height="372px">
          </figure>
          <div class="articles_container__info">
            <p>El minimalismo como una filosofia</p>
            <p>de vida y diseño</p>
            <a href="blog_second.php" class="articles_container__info__link">Leer artículo</a>
          </div>
        </div>

        <div class="articles_container__item">
          <figure>
            <img src="./assets/blog/article_image_02.webp" srcset="./assets/blog/article_image_02-480w.webp 480w,
                ./assets/blog/article_image_02.webp 600w" sizes="(max-width: 600px) 480px, 600w" alt="image_interiores_02" width="660px" height="372px">
          </figure>
          <div class="articles_container__info">
            <p>El minimalismo como una filosofia</p>
            <p>de vida y diseño</p>
            <a href="blog_second.php" class="articles_container__info__link">Leer artículo</a>
          </div>
        </div>


        <div class="articles_container__item">
          <figure>
            <img src="./assets/blog/article_image_03.webp" srcset="./assets/blog/article_image_03-480w.webp 480w,
                ./assets/blog/article_image_03.webp 600w" sizes="(max-width: 600px) 480px, 600w" alt="image_interiores_03" width="660px" height="372px">
          </figure>
          <div class="articles_container__info">
            <p>El minimalismo como una filosofia</p>
            <p>de vida y diseño</p>
            <a href="blog_second.php" class="articles_container__info__link">Leer artículo</a>
          </div>
        </div>

      </div>

      <!-- Descripcion -->
      <div class="description-info">
        <figure class="container_logo">
          <img src="./assets/blog/logo.webp" alt="image_logo" width="143px" height="141px" loading="lazy">
        </figure>

        <div class="description__text">
          <h3>Descripción</h3>
          <p>¡Explora todo lo que tenemos para ofrecerte en nuestras publicaciones!</p>
          <p>Descubre consejos, tendencias y soluciones innovadoras que te ayudarán a destacar tu negocio!</p>
        </div>

        <div class="description__social_media">
          <h3>Redes sociales</h3>
          <div class="description__social_media__images">
            <div class="description__social_media__item">
              <figure>
                <img src="./assets/blog/facebook_icon.svg" alt="fb_icon" width="63px" height="68px" loading="lazy">
              </figure>
              <figure>
                <img src="./assets/blog/ig_icon.svg" alt="ig_icon" width="63px" height="68px" loading="lazy">
              </figure>
            </div>

            <div class="description__social_media__item">
              <figure>
                <img src="./assets/blog/tiktok_icon.svg" alt="tiktok_icon" width="63px" height="68px" loading="lazy">
              </figure>
              <figure style="position: relative;">
                <img src="./assets/blog/linkedin_icon.svg" alt="linkedin_icon" width="63px" height="68px" loading="lazy">
                <div class="bg-black"></div>
              </figure>
            </div>

          </div>
        </div>

        <div class="description__categories">
          <h3>Categorias</h3>
          <div class="description__categories__title">
            <p>Comercial</p>
            <p>Remodelación</p>
            <p>Inspiración</p>
            <p>Curiosidades</p>
            <p>Residencial</p>
          </div>
        </div>

      </div>

    </div>

  </main>


  <?php include './includes/footer.php' ?>


  <link disabled rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script defer src="./js/carrusel-productos-cards.js"></script>
  <script defer src="./js/menu-script.js"></script>
</body>

</html>