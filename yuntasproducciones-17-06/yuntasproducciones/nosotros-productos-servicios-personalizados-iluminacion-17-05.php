<?php
header("Cache-Control: public, max-age=31536000, immutable");
header("Expires: " . gmdate("D, d M Y H:i:s", strtotime("+1 year")) . " GMT");
?>
<?php include './includes/head.php' ?>
<?php include './includes/navbar.php' ?>

<section class="hero__container">
  <picture>
    <img src="./assets/Portada_Image.webp" class="hero__bg lazyload" alt="Image_Portada" />
  </picture>

  <div class="hero__content">
    <div class="hero__text1">
      <p><i>Yuntas es</i></p>
    </div>
    <div class="hero__gota">
      <span class="icon-gota"></span>
    </div>
    <div class="hero__text2">
      <h1>TU ALIADO <br />PARA PERZONALIZAR <br />TU NEGOCIO</h1>
    </div>
    <div class="hero__gota">
      <span class="icon-gota"></span>
    </div>
    <div class="hero__text3">
      <p><i>Ofreciendo variedad de productos de iluminación LED,<br />proyeccciones en 3D y mucho más...</i></p>
    </div>
    <a href="#nosotros-somos">
            <p><i>Conócenos más</i></p>
            <img src="./assets/svg/arrow-down.svg" width="30px" height="30px" alt="" class="arrow-down" >
        </a>
  </div>
</section>

<section id="nosotros-somos" class="nosotros__container">
    <h1 class="nosotros__title">SOBRE NOSOTROS</h1>
    <div class="about_container">
        <h3 id="title_nosotros" class="about_container__title" style="font-weight: bold;">Conócenos</h3>
        <h3 id="title_mision" class="about_container__title">Misión</h3>
        <h3 id="title_vision" class="about_container__title">Visión</h3>
        <h3 id="title_valores" class="about_container__title">Valores</h3>
    </div>

    <div class="nosotros__content">
        <div class="nosotros__text">
            <div id="text_nosotros" class="">
                    <img id="image_container" src="./assets/nosotros.webp" alt="image_nosotros">
                <p>
                Somos una empresa líder en el mercado de productos y servicios tecnológicos innovadores para iluminación y 
                diseño de interiores. Desde nuestra fundación, nos hemos destacado por ofrecer soluciones vanguardistas y 
                de alta calidad que transforman los espacios en experiencias inolvidables. Nuestro compromiso con la 
                excelencia nos ha permitido mantenernos a la vanguardia y satisfacer las necesidades de nuestros clientes 
                de manera eficiente y confiable.
                </p>
            </div>

            <div id="text_mision" class="hide_text">
                <img src="./assets/mision.webp" alt="image_nosotros" loading="lazy">
                <p>Transformar espacios y generar experiencias inolvidables mediante productos y servicios de
                    iluminación y diseño innovadores, superando expectativas y satisfaciendo a los clientes.</p>
            </div>

            <div id="text_vision" class="hide_text">
                <img id="image_container" src="./assets/vision.webp" alt="image_nosotros" loading="lazy">
                <p>Transformar espacios y generar experiencias inolvidables mediante productos y 
                    servicios de iluminación y diseño innovadores, superando expectativas y satisfaciendo 
                    a los clientes..</p>
            </div>

            <div id="text_valores" class="hide_text">

                <div class="container_valores">
                    <div class="container_valores__item">
                        <figure>
                            <img src="./assets/Innovación_Image.webp" alt="image_innovación" loading="lazy">
                        </figure>

                        <div class="card_valores__info">
                            <h3>INNOVACIÓN</h3>
                            <p>Fomentamos un espíritu creativo y abrazamos la innovación como parte esencial de nuestro
                                ADN empresarial.</p>
                        </div>
                    </div>

                    <div class="container_valores__item">
                        <figure>
                            <img src="./assets/Calidad_Image.webp" alt="image_calidad">
                        </figure>
                        <div class="card_valores__info">
                            <h3>CALIDAD</h3>
                            <p>Nos comprometemos a ofrecer productos y servicios de la más alta calidad para asegurar
                                la satisfacción de nuestros clientes.</p>
                        </div>
                    </div>

                    <div class="container_valores__item">
                        <figure>
                            <img src="./assets/Confianza_Image01.webp" alt="" loading="lazy">
                        </figure>
                        <div class="card_valores__info">
                            <h3>CONFIANZA</h3>
                            <p>Construimos relaciones duraderas basadas en la confianza, la transparencia y el respeto
                                mutuo.2</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="noticias__container">
        <div class="noticas__text">
            <h1>CADA VEZ MÁS <br> CERCA DE TI</h1>
        </div>
    </div>
</section>

<section class="sede__container">
    <div class="sede__title">
            <h1>PRESENCIA NACIONAL</h1>
            
        </div>
    <div class="sede__mapa">
        <div class="sede__img">
            <iframe title="mapa_sede" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7804.518494627168!2d-76.942007!3d-12.025665!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c97c8934a213%3A0x7f6ccb249e86b5e6!2sYuntas%20Producciones!5e0!3m2!1ses-419!2spe!4v1710417144990!5m2!1ses-419!2spe" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="sede__img__text">
        <p>La sede principal se encuentra en el distrito de Ate, Lima. <br>
            Sin embargo, no necesitas residir en la capital para poder <br>
            adquirir los mejores productos para tu negocio o evento.</p>
        <h2>Envíos 100% seguros<br>
            ¡Llegamos a todas las provincias!</h2>
        </div>
    </div>
    
</section>

<section class="redes__container">

    <div class="sede__title">
        <h2>Siguenos en nuestras redes sociales</h2>
    </div>
    <div class="social_media_icons">
			<a href="https://www.facebook.com/YuntasProducciones" target="_blank">
				<img src="./assets/redes_sociales/facebook2.webp" alt="social_icon" class="facebook-svg icon">
			</a>
			<a href="https://www.instagram.com/yuntasproducciones/?hl=es" target="_blank">
				<img src="./assets/redes_sociales/instagram2.webp" alt="social_icon" class="instagram-svg icon">
			</a>
			<a href="https://www.tiktok.com/@yuntasproducciones" target="_blank">
				<img src="./assets/redes_sociales/tiktok2.webp" alt="social_icon" class="tiktok-svg icon">
			</a>
			<a href="https://www.linkedin.com/company/yuntasproducciones/about/?viewAsMember=true" target="_blank">
				<img src="./assets/redes_sociales/linkedin2.webp" alt="social_icon" class="linkedin-svg icon">
			</a>
	</div>
</section>

<?php include './includes/button-wsp.php' ?>
<?php include './includes/button-form.php' ?>
<?php include './includes/footer.php' ?>
<script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script defer src="js/redes.js" ></script>
<script defer src="js/menu-script.js"></script>
<script src="js/lazysizes.min.js" async></script>
<script>
    const elements = document.querySelectorAll('.about_container h3');
    const images = document.querySelector('#image_container');
    const nosotros__content = document.querySelector('.nosotros__content');
    const arrows = document.querySelectorAll('span[id^="arrow_"]');
    const card_valores__image = document.querySelectorAll('.card_valores__image');
    arrows.forEach(arrow => {
        arrow.addEventListener('click', (event) => {
            let identificador = event.target.parentNode.getAttribute('id').split('_').pop();
            if (identificador == 'right') {
                let arrow_left = document.getElementById('arrow_left');
                arrow_left.classList.remove('hide_element');
                arrow.classList.add('hide_element');
                card_valores__image[1].classList.remove('hide_element');
                card_valores__image[0].classList.add('hide_element');
            } else {
                let arrow_left = document.getElementById('arrow_right');
                arrow_left.classList.remove('hide_element');
                arrow.classList.add('hide_element');
                card_valores__image[1].classList.add('hide_element');
                card_valores__image[0].classList.remove('hide_element');
            }

        });
    });

    elements.forEach(element => {

        element.addEventListener('click', (event) => {
            elements.forEach(item => {
                item.style.fontWeight = 'normal';
            });
            element.style.fontWeight = 'bold';
            let childs = document.querySelectorAll('div[id^=text_]');
            let identificador = event.target.getAttribute('id').split('_').pop();
            let contenido = document.getElementById(`text_${identificador}`)
            if (identificador != 'valores') {
                images.classList.remove('hide_text');
                nosotros__content.style.backgroundColor = '#203565';
            } else {
                nosotros__content.style.backgroundColor = 'transparent';
                images.classList.add('hide_text');
            }
            childs.forEach(child => {
                let id_child = child.getAttribute('id');
                child.classList.add('hide_text');
                if (contenido === child) {
                    child.classList.remove('hide_text');
                }
            });

        })

    });
</script>
