<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title('');?> <?php bloginfo('name') ?> </title>
  <link rel='stylesheet' href="<?php bloginfo('template_directory');?>/css/testCss.css" />
  <?php wp_head(); ?>
</head>
<body>
<header class='header'>
  <div class="logo">
    <a href="<?php echo get_home_url(); ?>">
      <img class="logo_img" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
    </a>
  </div>
  <h1>Header</h1>
  <nav>
  <?php wp_nav_menu( array('menu' => 'menu1' )); ?>
  </nav>
</header>
