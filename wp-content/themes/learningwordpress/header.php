<!DOCTYPE html>
<html>
    <head> 
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title> <?php bloginfo('name'); ?> </title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
    <!--site-header-->
    <header class="site-header">
        <h1> <?php bloginfo('name'); ?><h1>
        <h5> <?php bloginfo('description'); ?><h5>

</header>