<!DOCTYPE html>

<html>

<head>
   <?php wp_head(); ?>
</head>

<body>

   <header>
      <h3 id="logo">FASHION<div id="logo-rectangle"></div></h3>
      <?php
      wp_nav_menu(
         array(
            'theme_location' => 'main-menu',
            'container' => '' 
         )
      );
      ?>
   </header>