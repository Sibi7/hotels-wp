<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body>
<header>
    <!-- start header-nav.html-->
    <div class="header__nav">
        <div class="container">
            <div class="header__nav__logo">
                <a href="/">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
                </a>
            </div>
            <a href="#menu" class="menu-link">
                <span></span>
            </a>
            <div class="header__nav__menu">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/about">О хостеле</a></li>
                    <li><a href="/apartments">Наши апартаменты</a></li>
                    <li><a href="/gallery">Галерея</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </div>
            <div class="header__nav__contact">
                    <span>Россия, Ростов-на-Дону,
                      Ул. Петровская 34  | Металлургическая 94Б/1А
                    </span>
                <p>
                    +7 (952) 605 60 60
                </p>
            </div>
            <button id="send-message">Заказать звонок</button>

        </div>
        <div class="request-call__block">
            <h2>Закажите звонок и наш менеджер Вам перезвонит</h2>
            <form>
                <div class="input phone">
                    <label for="phone">Телефон</label>
                    <input type="text" name="phone">
                </div>
                <div class="input email">
                    <label for="email">E-mail</label>
                    <input type="text" name="email">
                </div>
            </form>
            <a href="#" >Отправить заявку</a>
        </div>
        <div id="overlay"></div>
    </div>
    <!-- end header-nav.html-->

</header>
