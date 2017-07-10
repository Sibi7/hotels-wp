<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<div class="contacts-page">
    <div class="container">
        <div class="contacts-page__wrap">
            <div class="contacts-page__wrap__img">
                <img src="<?= $atts['contacts']['0']['img']['url'];?>" alt="">
            </div>
            <div class="contacts-page__wrap__text">
                <div class="about__wrapper">
                    <h1><?= $atts['contacts']['0']['title'];?></h1>
                    <address>
                        <span>Адрес:</span>
                        <?= $atts['contacts']['0']['address'];?>
                    </address>
                    <div class="about__wrapper__contacts">
                        <span>Телефон:</span>
                        <a href="tel:<?= $atts['contacts']['0']['phone'];?>"><?= $atts['contacts']['0']['phone'];?></a>
                        <a href="tel:<?= $atts['contacts']['0']['phone_two'];?>"><?= $atts['contacts']['0']['phone_two'];?></a>
                        <p>
                            <span>Режим работы:</span>
                            <?= $atts['contacts']['0']['operating'];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A678f5072eeb04befa7a8b57d24137bac6b2d814a8becbc65359b3fd730058601&amp;width=100%25&amp;height=350&amp;lang=ru_UA&amp;scroll=true"></script>
        </div>
    </div>
</div>