<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mls Finance
 * @subpackage Mls Finance
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title>Mls Finance</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/owl.theme.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/jquery.fancybox.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>">

</head>


<body>
    <?php wp_body_open(); ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light " id="mainNav">
            <a class="navbar-brand top js-scroll-trigger pl-0 pl-md-3 " href="<?php echo site_url('/')?>">
                <img class="img-responsive" src="<?php echo get_theme_file_uri('./images/logo 1.svg'); ?>" alt="logo">      
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse navb" id="navbarResponsive">
                <ul class="navbar-nav first-item my-2 my-lg-0 ">
                    <li class="nav-item  "> 
                        <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/')?>">Partner Up </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/projects')?>">Work at MLS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/green-building')?>"> Articles </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/green-building')?>">  Get in touch </a>
                    </li> 
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/green-building')?>">  MLS Soultions </a>
                    </li> 
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/green-building')?>">  About Us </a>
                    </li> 

                </ul> 
            </div>

            <div class="collapse navbar-collapse order-lg-3 navb" id="navbarResponsive"> 
            
                <ul class="navbar-nav second-item ml-auto socials mt-0 mb-3 my-md-4 ">
                    <li class="nav-item "> 
                        <a class="nav-link js-scroll-trigger" href="" target="blank" class="btn-floating btn-gplus mr-2">
                            <i class="fa fa-facebook "> </i>
                        </a>
                    </li>
                    <li class="nav-item "> 
                        <a class="nav-link js-scroll-trigger" href="" target="blank" class="btn-floating btn-gplus mr-2">
                            <i class="fa fa-instagram "> </i>
                        </a>
                    </li>
                    <li class="nav-item "> 
                        <a class="nav-link js-scroll-trigger" href="" target="blank" class="btn-floating btn-gplus mr-2">
                            <i class="fa fa-linkedin"> </i>
                        </a>
                    </li>
                    
                </ul>
            </div> 

        </nav>
  



