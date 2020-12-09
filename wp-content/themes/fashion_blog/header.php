<!DOCTYPE html>

<html>

<head>
   <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

   <header>
      <?php get_template_part('template-parts/logo');
      wp_nav_menu(
         array(
            'theme_location' => 'main-menu',
            'container' => ''
         )
      ); ?>
   </header>