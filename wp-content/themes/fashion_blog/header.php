<!DOCTYPE html>

<html>

<head>
   <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

   <header>
      <?php
      if (function_exists('the_custom_logo')) {
         the_custom_logo();
      } else {
         echo '<h3 id="logo">FASHION<div id="logo-rectangle"></div></h3>';
      }
      get_template_part('template-parts/menus/main')
      ?>
   </header>