añadir wp_head()!!!!!!!!!!!!!!!!

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php echo bloginfo('name'); ?></title> -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css">
  </head>
  <body>

      <!-- header#cabecera+main#principal+footer#pie-pagina -->
      <header id="cabecera" class="row">

         <!-- #logotipo.small-4.columns>a>img[http://fakeimg.pl/100x100] -->

         <div id="logotipo" class="small-4 columns">
            <a href="<?php echo site_url(); ?>">
               <img src="http://fakeimg.pl/100x100" alt="">
            </a>
         </div>

         <!-- nav#menu.small-8.columns -->

         <nav id="menu" class="small-8 columns">
            <?php
               $inicio = get_page_by_title( 'Inicio' );
               $paginasMenu = get_pages( array( 'child_of' => $inicio->ID ) );

               foreach( $paginasMenu as $pagina ) {

                  $id = $pagina->ID;
                  $link = get_the_permalink( $id );
                  $title = get_the_title( $id );

                  ?>

                  <!-- #menu_item_0.small-4.columns>a -->
                  <div id="menu_item_<?php echo $id; ?>" class="small-4 columns">
                     <a href="<?php echo $link; ?>">
                        <?php echo $title; ?>
                     </a>
                  </div>

                  <?php
               }
            ?>

         </nav>

      </header>
      <main id="principal" class="row">

         <?php
         if(have_posts()) {
            while(have_posts()) {
            the_post();

            ?>

               <!-- article.small-6.columns -->
               <article class="small-12 medium-6 large-4 columns callout">

                  <h2>
                     <?php echo get_the_title(); ?>
                  </h2>

                  <div class="fecha small-12 text-right">
                     <?php echo get_the_date(); ?>
                  </div>

                  <div class="contenido small-12">
                     <?php echo get_the_content(); ?>
                  </div>

               </article>

            <?php
            }
         }
 ?>


      </main>
      <footer id="pie-pagina"></footer>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/what-input.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/foundation.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
  </body>
</html>
