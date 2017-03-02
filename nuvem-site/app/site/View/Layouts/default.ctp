<!DOCTYPE html>
<html>
    <head>
        <title>Nuvem </title>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="NUVEM Desenvolvimento Web">
        <meta name="robots" content="index,follow">
        <meta name="description" content="Desenvolvimento Criativo de Sites, One pages, hotsites, lojas virtuais, landing pages, teasers, com opções que atendem desde a autônomos e pequenos empreendedores até grandes empresas!" />
         <meta name="keywords" content="Desenvolvimento de websites, teasers, landing pages, one page, desenvolvimento de sites, hotsites, lojas virtuais, comunicação online, marketing digital, e-commerce, criação de website, websites, agência digital, blogs, blog, mobile site, mobile sites, redes sociais, midias sociais, campanha digital, campanhas digitais">
        <link rel="shortcut icon" href="<?php echo $this->request->base ?>/img/favicon.png" type="image/x-icon" />

    <?php
    echo $this->Html->css(array('bootstrap', '/fonts/stylesheet', 'style', 'animate', 'font-awesome', 'font-awesome.min', 'default', 'component', 'jquery.circular-carousel'));
    echo $this->Html->script(array('jquery','bootstrap.min', 'scrollReveal', 'scrollReveal.min', 'ScrollMagic', 'ScrollMagic.min', 'debug.addIndicators', 'modernizr.custom', 'jquery.circular-carousel', 'script', 'jquery.easing.min','scrolling-nav', 'js_contato', 'jquery.maskedinput.min'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->fetch('fonts');
    ?>
    </head>

    <body>
   
    <?php echo $this->Element('header'); ?>
    <?php echo $this->fetch('content'); ?>
    
    </body>

</html>
