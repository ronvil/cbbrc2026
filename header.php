<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>

  <?php wp_head(  ); ?>

</head>

<body <?php body_class(); ?>>
  <div hidden>
    <!-- svg sprite here -->
  </div>

  <div id="sidr">
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus nulla labore facilis, eligendi optio modi dicta. Architecto in culpa fugit dolores quod, non nesciunt saepe eveniet, impedit omnis assumenda dolorem.</p>    
  </div>

  <header class="banner" role="banner">

    <div class="container banner__container">
      <div class="logo">
        <h1 class="screen-reader-text">Crispin B. Beltran Resource Center</h1>
        <a href="#" class="logo__anchor">
          <picture>
            <source media="(min-width:650px)" srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/images/cbbrc-logo-full.png">
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/cbbrc-logo-icon.png" alt="CBBRC Logo" style="width:auto;">
        </picture>
        </a>
      </div>

      <nav class="mainnav">
        <div class="mainnav__menu bannermenu">
          <?php get_template_part( 'inc/component', 'menu' ); ?>
        </div>
        <a id="search-toggle" href="#" class="search-toggle"><i class="fa-solid fa-magnifying-glass"></i></a>
        <a id="menu-toggle" href="#sidr" class="menu-toggle"><i class="fas fa-bars"></i></a>
      </nav>
    </div>

  </header>