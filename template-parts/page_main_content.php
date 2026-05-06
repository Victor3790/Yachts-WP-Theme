  <div class="hero hero--home hero-home">
    <h1 class="hero-home__text" style="margin: 0; margin-bottom: 100px;">ALQUILER DE YATES </br>EN IBIZA</h1>
  </div>
  <div class="section section__info section--white">
    <div class="section__picture section--right">
      <div  class="section__picture__img" 
            style="background-image: url(<?php echo THEME_URI; ?>/imgs/section1.jpg)">
      </div>
    </div>
    <div class="section__text__wrapper section--center">
      <div class="section__text section--right">
        <h2>ALQUILER DE YATES</h2>
        <p>
          Mauris volutpat, ligula et congue ultrices, sapien tortor tincidunt orci, id malesuada urna purus et eros. Suspendisse in quam a leo viverra condimentum eget eu justo. Vivamus lacinia lacus nulla, quis elementum turpis porttitor eget. Nunc quis lectus erat. Nulla facilisi. Nam non lorem vel justo fermentum gravida. Vestibulum a velit velit.
        </p>
        <br>
        <br>
        <p style="margin:0;">
          <a class="news-link" href="#news">Últimas novedades</a>
        </p>
      </div>
    </div>
  </div>
  <div class="section section__info section--dark">
    <div class="section__picture section--left">
      <div  class="section__picture__img" 
            style="background-image: url(<?php echo THEME_URI; ?>/imgs/section3.jpg)">
      </div>
    </div>
    <div class="section__text__wrapper section--center">
      <div class="section__text section--left">
        <h2>MÁS SOBRE NOSOTROS</h2>
        <p>
          Mauris volutpat, ligula et congue ultrices, sapien tortor tincidunt orci, id malesuada urna purus et eros. Suspendisse in quam a leo viverra condimentum eget eu justo. Vivamus lacinia lacus nulla, quis elementum turpis porttitor eget. Nunc quis lectus erat. Nulla facilisi. Nam non lorem vel justo fermentum gravida. Vestibulum a velit velit.
        </p>
      </div>
    </div>
  </div>
  <div class="section section__info section--white">
    <div class="section__picture section--right">
      <div  class="section__picture__img" 
            style="background-image: url(<?php echo THEME_URI; ?>/imgs/section4.jpg)">
      </div>
    </div>
    <div class="section__text__wrapper section--center">
      <div class="section__text section--right">
        <h2>ACTIVIDADES</h2>
        <p>
          Mauris volutpat, ligula et congue ultrices, sapien tortor tincidunt orci, id malesuada urna purus et eros. Suspendisse in quam a leo viverra condimentum eget eu justo. Vivamus lacinia lacus nulla, quis elementum turpis porttitor eget. Nunc quis lectus erat. Nulla facilisi. Nam non lorem vel justo fermentum gravida. Vestibulum a velit velit.  
        </p>
      </div>
    </div>
  </div>
  <div id="contact" class="section section--justified section--dark">
    <div class="section__form">
      <h2 style="text-transform:uppercase;">Envíenos su mensaje</h2>
    </div>
    <div class="section__contact">
      <h2 style="text-transform:uppercase;">Contacto</h2>
      <ul class="section__contact__info-group">
        <li>Teléfono:</li>
        <li>(00) 000000</li>
      </ul>
      <ul class="section__contact__info-group">
        <li>Mail:</li>
        <li><a href="mailto:info@barcosbarcelona.com">mail@example.com</a></li>
      </ul>
      <ul class="section__contact__info-group">
        <li>Dirección:</li>
        <li>Calle falsa</li>
        <li>123,</li>
        <li>Springfield</li>
      </ul>
    </div>
  </div>
  <div id="news" class="section section--justified section--white">
    <div class="section__ships">
      <div>
        <div class="section__ships__title">
          <h2>NOVEDADES</h2>
        </div>
        <div id="bb_news">
          <?php

          $posts = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>20));

          if ( $posts->have_posts() ) :
            
            while ( $posts->have_posts() ) :

              $posts->the_post();

              get_template_part( 'template-parts/cbt_result_posts_main' );

            endwhile;


          else :

            get_template_part( 'template-parts/content', 'none' );

          endif;

          wp_reset_postdata();

          ?>
        </div>
        <div id="bb_arrows" class="section__ships__arrows"></div>
      </div>
    </div>
  </div>
