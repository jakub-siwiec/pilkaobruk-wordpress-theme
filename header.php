<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Pontano+Sans|Staatliches" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Piłką O Bruk - brukowiec w internetowym wydaniu</title>
  </head>
  <body>

    <div class="navbar">
      <div class="navbar-logo-space">
        <a href="<?php echo site_url(); ?>">
          <span class=navbar-logo>PIŁKĄ O BRUK</span>
        </a>
      </div>
      <div class="navbar-menu">
        <ul class="navbar-list">
          <li class="toggle-bar"><span class="toggle-bar-icon"><i class="fas fa-bars"></i></span></li>
          <li class="navbar-item"><a href="<?php echo site_url(); ?>">Strona główna</a></li>
          <li class="navbar-item"><a href="<?php echo get_post_type_archive_link('article'); ?>">Archiwum</a></li>
          <li class="navbar-item"><a href="<?php echo site_url('/o-nas'); ?>">O nas</a></li>
          <li class="navbar-item"><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>
          <li class="navbar-icon-section">
            <a href="https://www.facebook.com/pilkaobruk"><i class="fab fa-facebook navbar-icon"></i></a>
            <a href="https://twitter.com/PilkaOBruk"><i class="fab fa-twitter-square navbar-icon"></i></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="site-body">
