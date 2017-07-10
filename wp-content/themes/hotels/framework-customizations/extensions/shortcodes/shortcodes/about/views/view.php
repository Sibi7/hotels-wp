<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="about">
    <div class="container">
        <div class="about__wrapper">
            <h1><?= $atts['title'];?></h1>
            <img src="<?= $atts['img']['url'];?>" alt="">
        </div>
        <div class="about__wrapper">
            <?= $atts['description'];?>
        </div>
        <div class="about__wrapper">
            <h1><?= $atts['contacts'];?></h1>
            <address>
                <span>Адрес:</span>
                <?= $atts['address'];?>
            </address>
            <div class="about__wrapper__contacts">
                <span>Телефон:</span>
                <?= $atts['phone'];?>
                <p>
                    <span>Режим работы:</span>
                    <?= $atts['operating'];?>
                </p>
            </div>
        </div>
        <div class="about__wrapper">
            <?= $atts['description_two'];?>
        </div>
        <div class="about__map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A678f5072eeb04befa7a8b57d24137bac6b2d814a8becbc65359b3fd730058601&amp;width=100%25&amp;height=350&amp;lang=ru_UA&amp;scroll=true"></script>
        </div>
    </div>
</section>