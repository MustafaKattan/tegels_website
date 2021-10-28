<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Tegels
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--<div id="page" class="site">-->
<!--	<a class="skip-link screen-reader-text" href="#primary">-->
<?php //esc_html_e( 'Skip to content', 'tegels' ); ?><!--</a>-->
<!---->
<!--	<header id="site_header" class="site-header">-->
<!--    <div class=" conatiner">-->
<!--        <div class="row site-header_small" >-->
<!--                <div class="col">-->
<!---->
<!--                    <i class="fa fa-phone" aria-hidden="true"></i>-->
<!--                    BEL: 085 235 3326-->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col">-->
<!--                    <i class="fa fa-clock-o" aria-hidden="true"></i>-->
<!--                    MA T/M ZA 10:00-17:00-->
<!---->
<!--                </div>-->
<!--                <div class="col">-->
<!--                    <i class="fa fa-question-circle" aria-hidden="true"></i>-->
<!--                    VRAAG & ANTWOORD-->
<!--                </div>-->
<!--                <div class="col">-->
<!--                    <i class="fa fa-home" aria-hidden="true"></i>-->
<!--                    GRATIS BEZORGING-->
<!---->
<!--                </div>-->
<!--        </div>-->
<!--        <div class="row search_row">-->
<!--            <div class="col"><div class="col_logo">Kattantegelzetters</div></div>-->
<!--            <div class="col">-->
<!--                <form role="search" method="get" class="search-form" action="-->
<?php //echo home_url( '/' ); ?><!--">-->
<!--                    <label class="site-header_serach_lable">-->
<!--                        <span class="screen-reader-text">-->
<?php //echo _x( 'Search for:', 'label' ) ?><!--</span>-->
<!--                        <input type="search" class="site-header_serach_lable_search-field"-->
<!--                               placeholder="--><?php //echo esc_attr_x( 'Search …', 'placeholder' ) ?><!--"-->
<!--                               value="--><?php //echo get_search_query() ?><!--" name="s"-->
<!--                               title="--><?php //echo esc_attr_x( 'Search for:', 'label' ) ?><!--" />-->
<!--                    </label>-->
<!--                    <div class="submit_box">-->
<!--                        <button class="search-submit"-->
<!--                                value="--><?php //echo esc_attr_x( 'Search', 'submit button' ) ?><!--">-->
<!--                            <i class="fa fa-search" aria-hidden="true"></i>-->
<!--                            search</button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--            <div class="col">-->
<!--                <div class="right_menu">-->
<!--                    <div class="right_menu_col">-->
<!--                        <spam>Account</spam>-->
<!--                    </div>-->
<!--                    <div class="right_menu_col">-->
<!--                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>-->
<!--                    </div>-->
<!--                    <div class="right_menu_col">-->
<!--                        <i class="fa fa-sign-in" aria-hidden="true"></i>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!---->
<!--            		<nav id="site-navigation" class="main-navigation">-->
<!--                        --><?php
//                        wp_nav_menu(
//                            array(
//                                'theme_location' => 'menu-1',
//                                'menu_id'        => 'primary-menu',
//                            )
//                        );
//                        ?>
<!--            		</nav>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--	</header>-->
<!--    <h1>tegels kopen</h1>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col">-->
<!--                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">-->
<!--                    <div class="carousel-inner">-->
<!--                        <div class="carousel-item active">-->
<!--                            <img src="https://isodeco.nl/wp-content/uploads/2021/07/Mozaiek-Voorkant.png" class="d-block w-100" alt="...">-->
<!--                        </div>-->
<!--                        <div class="carousel-item">-->
<!--                            <img src="https://isodeco.nl/wp-content/uploads/2021/07/Mozaiek-Voorkant.png" class="d-block w-100" alt="...">-->
<!--                        </div>-->
<!--                        <div class="carousel-item">-->
<!--                            <img src="https://isodeco.nl/wp-content/uploads/2021/07/Mozaiek-Voorkant.png" class="d-block w-100" alt="...">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">-->
<!--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                        <span class="visually-hidden">Previous</span>-->
<!--                    </button>-->
<!--                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">-->
<!--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                        <span class="visually-hidden">Next</span>-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col">-->
<!--                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">-->
<!--                    <div class="carousel-indicators">-->
<!--                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
<!--                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
<!--                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
<!--                    </div>-->
<!--                    <div class="carousel-inner">-->
<!--                        <div class="carousel-item active">-->
<!--                            <img src="https://isodeco.nl/wp-content/uploads/2021/07/Mozaiek-Voorkant.png" class="d-block w-100" alt="...">-->
<!--                        </div>-->
<!--                        <div class="carousel-item">-->
<!--                            <img src="https://isodeco.nl/wp-content/uploads/2021/07/Antraciet-aluminium-mozaiek-mat.jpg" class="d-block w-100" alt="...">-->
<!--                        </div>-->
<!--                        <div class="carousel-item">-->
<!--                            <img src="https://isodeco.nl/wp-content/uploads/2021/07/Antraciet-aluminium-mozaiek-mat.jpg" class="d-block w-100" alt="...">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">-->
<!--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                        <span class="visually-hidden">Previous</span>-->
<!--                    </button>-->
<!--                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">-->
<!--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                        <span class="visually-hidden">Next</span>-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    </div>-->

<div id="page" class="site">
<a class="skip-link screen-reader-text"
   href="#primary"><?php esc_html_e('Skip to content', 'katantegelzetters'); ?></a>

<header id="site_header" class="site-header">
    <table class="table_x">
        <tr class="remove_small_header">
            <td class="x_left"></td>
            <td class=""></td>
            <td class="x-middle">
                <div class="small_header">
                    <div class="x-menu-items">
                        <a>
                            <div>
                                <i class="fa fa-phone" aria-hidden="true"></i>BEL: 085 235 3326
                            </div>
                        </a>
                        <a>
                            <div>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                MA T/M ZA 10:00-17:00
                            </div>
                        </a>
                        <a>
                            <div>
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                VRAAG & ANTWOORD
                            </div>
                        </a>
                        <a>
                            <div>
                                <i class="fa fa-home" aria-hidden="true"></i>
                                GRATIS BEZORGING
                            </div>
                        </a>
                        <a>
                            <div class="x-menu-search">
                                <form class="search" action="" method="post">
                                    <label for="search-box">Search:</label>
                                    <input value="" id="search-box" type="text" name="search" maxlength="50">
                                </form>
                            </div>
                        </a>
                    </div>
                    <div class="x-menu-items">
                        <a>
                            <div>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Info@katantegelzetters.nl
                            </div>
                        </a>

                    </div>
                    <div class="x-menu-items">
                        <a>
                            <div>
                                <i class="fa fa-power-off" aria-hidden="true"></i>
                                <i style="    padding-left: 20px;" class="fa fa-user-circle-o"
                                   aria-hidden="true"></i>

                            </div>
                        </a>

                    </div>
                </div>
            </td>
            <td class="x_right"></td>

        </tr>
        <tr class="stickytypeheader">
            <td class="x_left"></td>
            <td class="logo_site">
                <div class="logo_box">
                    <img class="site_logo"
                         src="http://localhost:8888/Katantegelzetters/wp-content/uploads/2021/10/c7bf7901-16b3-4469-9331-eb521629393a-300x193-1.jpeg"
                         alt=""/>
                </div>
            </td>
            <td class="nav_items">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'my-custom-menu',
                    'container_class' => 'custom-menu-class'));
                ?>
                <div class="x_oferte_aanvragen">
                    <button class="x_oferte_action">Oferte aanvragen</button>
                </div>
            </td>
            <td class="x_right" rowspan="2"></td>
        </tr>

    </table>
</header>