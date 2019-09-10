<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" />

   <?php wp_head();?>


</head>

<body>
    <?php get_template_part('preloader');?>

    <nav id="burger_nav">
        <div class="background"></div>
        <div id="menu">
            <p>menu</p>
        </div>
        
        
        <?php wp_nav_menu(array(
	
	'menu'            => 'page_menu',
	'container'       => 'ul', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
	'container_class' => 'navigation', // css-класс блока
	'menu_class'      => 'navigation', // css-класс меню
	
	'echo'            => true, // вывести или записать в переменную
	'fallback_cb'     => 'wp_page_menu', // какую функцию использовать если меню не существует, укажите false, чтобы не использовать ничего
	 // HTML-шаблон
    'depth'           => 0 // количество уровней вложенности
    
        )); ?>


       
    </nav>
    <div class="sidebar">
        <div id="nav_but">
            <i class="fas fa-bars" id="bars">
        
                
            </i>
            <i class="fas fa-times" id="cross">
        
                
            </i>
            <div class="bar-line">

                </div>
        </div>
        </div>
        <a href="<?php echo get_permalink(9); ?>"><img src="<?php bloginfo('template_directory');?>/app/img/apple_logo.png" alt="" class="logo"></a>