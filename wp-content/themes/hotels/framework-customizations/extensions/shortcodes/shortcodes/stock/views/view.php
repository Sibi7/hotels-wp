<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="stock">
    <div class="container">
        <div class="stock__absolute">
            <img src="<?php bloginfo('template_directory'); ?>/img/absolute-bg-2.png" alt="">
        </div>
        <div class="stock__text">
            <p>
                забронируй по
                акционной
                цене сейчас
            </p>
            <a href="#stock-scroll"> <button>350 руб <img src="<?php bloginfo('template_directory'); ?>/img/share.png" alt="#header-form"></button>
            </a>
        </div>
    </div>
</section>
