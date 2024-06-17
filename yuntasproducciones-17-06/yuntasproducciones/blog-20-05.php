<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yuntas Producciones Blog</title>
  <!-- ESTILOS GLOBALES -->
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/blog.css">

  <!--=============== REMIXICONS ===============-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <link rel="stylesheet" href="./css/productos-cards.css">
</head>

<body>
  <?php include './includes/navbar.php' ?>

  <main class="main">

    <div class="container_image_main">
      <figure>
        <img src="./assets/blog/main_image.webp" alt="main_image">
      </figure>

      <div class="float_container">

        <div class="float_container__item">
          <figure>
            <img src="./assets/blog/float_image_01.webp" alt="float_image">
          </figure>
          <div class="float_container__info">
            <p>Sostenibilidad Empresarial con PVC:</p>
            <p>El camino al Éxito</p>
            <a href="blog_second.php" class="float_container__info__link">Leer artículo</a>
          </div>
        </div>

        <div class="float_container__item">
          <figure>
            <img src="./assets/blog/float_image_02.webp" alt="float_image">
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
            <img src="./assets/blog/article_image_01.webp" alt="image_interiores">
          </figure>
          <div class="articles_container__info">
            <p>El minimalismo como una filosofia</p>
            <p>de vida y diseño</p>
            <a href="blog_second.php" class="articles_container__info__link">Leer artículo</a>
          </div>
        </div>

        <div class="articles_container__item">
          <figure>
            <img src="./assets/blog/article_image_02.webp" alt="image_interiores">
          </figure>
          <div class="articles_container__info">
            <p>El minimalismo como una filosofia</p>
            <p>de vida y diseño</p>
            <a href="blog_second.php" class="articles_container__info__link">Leer artículo</a>
          </div>
        </div>


        <div class="articles_container__item">
          <figure>
            <img src="./assets/blog/article_image_03.webp" alt="image_interiores">
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
          <img src="./assets/blog/logo.webp" alt="image_logo">
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
                <img src="./assets/blog/facebook_icon.svg" alt="fb_icon">
              </figure>
              <figure>
                <img src="./assets/blog/ig_icon.svg" alt="ig_icon">
              </figure>
            </div>

            <div class="description__social_media__item">
              <figure>
                <img src="./assets/blog/tiktok_icon.svg" alt="tiktok_icon">
              </figure>
              <figure style="position: relative;">
                <img src="./assets/blog/linkedin_icon.svg" alt="linkedin_icon">
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

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script src="./js/carrusel-productos-cards.js"></script>
  <script src="js/menu-script.js"></script>
</body>

</html>