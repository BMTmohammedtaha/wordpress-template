<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title') ?></title>
    <link rel="stylesheet" href=" <?php bloginfo('stylesheet_url') ?> ">
    <?php wp_head(); ?> 
</head>
<body>
    <div class="menu">
        <div class="logo"><a href="<?php echo get_home_url(); ?> "><img src="<?php echo get_bloginfo('template_directory'); ?>/logo.png" alt=""></a></div>
        <nav>
            <?php wp_nav_menu(); ?> 
        </nav>
    </div>
    <div class="banner"></div>
    <div class="container">