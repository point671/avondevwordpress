<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>


<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <div class="header__menu menu">
                    <nav class="menu__body">
                        <button type="button" class="menu__icon icon-menu"><span></span></button>
                        <div class="icon-menu__box box-menu-icon">
                            <div class="menu__logo logo-menu">
                                <img class="logo-menu__img" src="img/header/main-logo.svg" alt="">
                                <div class="logo-menu__name"><?php the_field("logo"); ?></div>
                            </div>


                            <ul class="menu__list list-menu">
                                <li class="menu__item"><a href="" class="menu__link">
                                        НОВИНКИ И ХИТЫ
                                    </a></li>
                                <li class="menu__item"><a href="" class="menu__link">АКЦИИ</a></li>
                                <li class="menu__item"><a href="" class="menu__link">РАБОТА В AVON</a></li>
                                <li class="menu__item"><a href="" class="menu__link">КОМАНДА УСПЕХА</a></li>
                            </ul>

                        </div>
                    </nav>
                    <div class="menu__down-body body-down-menu" data-da=".list-menu, 768">
                        <div class="body-down-menu__item">Приз и скидка 30% </div>
                        <div class="body-down-menu__item">Стать представителем</div>
                        <div class="body-down-menu__item">Покупать для себя</div>
                        <div class="body-down-menu__item">Каталоги онлайн</div>
                    </div>
                </div>
            </div>
        </header>