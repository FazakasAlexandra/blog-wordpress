<!DOCTYPE html>

<html>

<head>
   <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

   <header>
      <?php
      get_template_part('template-parts/logo');
      get_template_part('template-parts/sidebars/menus/main')
      ?>
   </header>