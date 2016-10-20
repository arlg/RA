<?php
/**
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Richelieu
 */
?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <title>Richelieu Advisors</title>
        <?php wp_head(); ?>
    </head>
    <body>
        

<header>
    <div class="grid_container">
        <div class="row">
            <div class="col_4">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo-richelieu-advisors.png" id="site_logo" alt="">
            </div>
            <div class="col_8">
                <nav>
                    <ul>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Training</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li class="lang">
                            <a href="/en">EN</a>
                            <span>|</span>
                            <a href="/fr" class="active">FR</a>
                        </li>                        
                    </ul>
                </nav>

            </div>
            
        </div>
    </div>
</header>