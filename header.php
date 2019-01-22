<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="ContenedorSup">
    <header>
        <div class="hdSup">
            <div class="hd_RS">
                <p class="hd_correo"><img class="hd_element_image_RS1" src="<?php bloginfo('template_directory'); ?>/images/Logos/emailicon_128.png"></img>reciklarsa@gmail.com</p>
                <p class="hd_movil"><img class="hd_element_image_RS1" src="<?php bloginfo('template_directory'); ?>/images/Logos/Llamar_128.png"></img>+57 3182580578</p>
                <div class="hd_element" >
                    <a href="<?php echo('https://www.facebook.com/ReciklarSAS/'); ?>" target="1"><img class="hd_element_image_RS" alt="www.facebook.com/ReciklarSAS/" src="<?php bloginfo('template_directory'); ?>/images/Logos/Facebook-128.png"></a>
                </div>
                <div class="hd_element">
                    <a href="https://api.whatsapp.com/send?phone=573182580578" target="1"><img class="hd_element_image_RS" alt="+57 3182580578" src="<?php bloginfo('template_directory'); ?>/images/Logos/WhatsApp_128.png"></a>
                </div>
                <div class="hd_element">
                    <a href="<?php echo('https://instagram.com/'); ?>" target="1"><img class="hd_element_image_RS" alt="Instagram-icon" src="<?php bloginfo('template_directory'); ?>/images/Logos/Intagram_128.png"></a>
                </div>
                <div class="hd_element">
                    <a href="<?php echo('http://twitter.com'); ?>" target="1"><img class="hd_element_image_RS" alt="twitter-icon" src="<?php bloginfo('template_directory'); ?>/images/Logos/Twitter_128.png"></a>
                </div>
            </div>
            
            <div class="hd_logo">
                <img class="Imag_logo"src="<?php bloginfo('template_directory'); ?>/images/Logos/logo4-reciklar.png"/>
            </div>
            <nav>
                <ul class="main-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
                </ul>
            </nav>
        </div>
    </header>

