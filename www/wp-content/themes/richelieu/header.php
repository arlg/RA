<?php
/**
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Richelieu
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="<?php pll_e("Description"); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="http://richelieuadvisors.com/favicon.ico" />

        <title>Richelieu Advisors</title>
        <?php wp_head(); ?>
    </head>
    <body>

<header id="header">
    <div class="grid_container">
        <div class="row">
            <div class="col_4">
                <a href="/<?php echo pll_current_language();?>">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo-richelieu-advisors.png" id="site_logo" alt="">
                </a>
            </div>
            <div class="col_8">
                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo ( pll_home_url()."#".pll__("services") ); ?>" data-scroll><?php pll_e("Services"); ?></a>
                        </li>
                        <li>
                            <a href="<?php pll_e("training"); ?>"><?php pll_e("Training"); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo ( pll_home_url()."#".pll__("about-us") ); ?>" data-scroll><?php pll_e("About Us"); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo ( pll_home_url()."#".pll__("contact") ); ?>" data-scroll><?php pll_e("Contact"); ?></a>
                        </li>
                        <li>
                            <a href="/<?php echo pll_current_language();?>/blog"><?php pll_e("Blog"); ?></a>
                        </li>
                        <li class="lang">
                            <a href="/en" class="<?php echo pll_current_language() == "en" ? "active" : "" ;?>">EN</a>
                            <span>|</span>
                            <a href="/fr" class="<?php echo pll_current_language() == "fr" ? "active" : "" ;?>">FR</a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>
    </div>
</header>