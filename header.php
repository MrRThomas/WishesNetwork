<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="Website for WishesNetwork">
<meta name="keywords" content="WishesNetwork, EAS, Youtube, Toxic Spill/Zombies">
<meta name="author" content="Robbie Thomas">
         <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Cute+Font|Iceland|Press+Start+2P|Share+Tech+Mono" rel="stylesheet">

         <title><?php bloginfo('name'); ?></title>
         
    <?php wp_head(); ?>
         
</head>
<body>
	<header>
  <!-- Header Container -->
    <div class="container">
      <!-- Title and Nav -->
		    <h1><?php bloginfo('name'); ?></h1>
      <nav>
          <?php
          
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu' => 'ul'
          );
          
          wp_nav_menu( $defaults );
          
          ?>
<!---      
      <ul>
          <li><a href="index.html" class="selected">&#9654; News &#9664;</a></li>
          <li><a href="https://www.youtube.com/user/WishesNetwork">&#9654; Vids &#9664;</a></li>
          <li><a href="about.html">&#9654; About &#9664;</a></li>
          <li><a href="archives.html">&#9654; Archives &#9664;</a></li>
      </ul>
--->
    </nav>
  </div>
  <!-- End Header and All Said Contents -->
</header>	