<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Kien Truc</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>assets/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>assets/img/apple-touch-icon-114x114.png">

    <?php wp_head(); ?>

    <style>
        .pswp__share--download,
        .pswp__share--pinterest {
            display: none !important;
        }

        .inner-header img {
            width: 100%;
        }

        .widget iframe {
            color: #fff !important;
        }

        .social-icons-round>li>a {
            border-radius: 50% !important;
        }

        @media only screen and (max-width: 1100px) {
            #portfolio {
                margin-bottom: 100px !important;
            }
        }

        @media only screen and (max-width: 600px) {
            #portfolio {
                margin-bottom: 50px !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .flex-active-slide .hero-caption .hero-text h1 {
                font-size: 20px !important;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- PRELOADER -->
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- END PRELOADER -->

    <!-- HEADER -->
    <header class="header header-fixed header-transparent">
        <div class="container">
            <!-- YOUR LOGO HERE -->
            <div class="inner-header">
                <a class="inner-brand" href="index.html">
					<img class="brand-light" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-light.png" width="100" alt="">
					<img class="brand-dark" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dark.png" width="100" alt="">
				</a>
                    <!-- <?php 
                        if(is_home()) {
                            printf('
                                    <h1>
                                        <a style="font-size: 24px; color: #fff" href="%1$s">%2$s</a>
                                    </h1>
                                ', esc_url(home_url()), get_bloginfo('sitename'));
                        } else {
                            printf('
                                    <p>
                                        <a style="font-size: 24px; color: #fff" href="%1$s">%2$s</a>
                                    </p>
                                ', esc_url(home_url()), get_bloginfo('sitename'));
                        }
                    ?> -->
            </div>

            <!-- OPEN MOBILE MENU -->
            <div class="main-nav-toggle">
                <div class="nav-icon-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
            </div>

            <!-- MAIN MENU -->
            <nav id="custom-collapse" class="main-nav collapse clearfix">
                <ul class="inner-nav onepage-nav pull-right">

                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav>

        </div>
    </header>
    <!-- END HEADER -->