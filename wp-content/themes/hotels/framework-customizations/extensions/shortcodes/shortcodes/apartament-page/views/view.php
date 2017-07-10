<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
?>
<section class="our-apartments">
    <div class="container">
        <div class="our-apartments__head">
            <h2>Наши аппартаменты</h2>
            <p>Представляем Вашему вниманию несколько видов размещения в хостеле.</p>
            <div class="our-apartments__head__address">
                <div class="our-apartments__head__address__block">
                    <a href=".elit" class="for-yellow-string active">Элитный хостел</a>
                    <p>Ул. Петровская 34</p>
                </div>

                <div class="our-apartments__head__address__block">
                    <a href=".classic">Класический хостел</a>
                    <p>Ул. Металургическая 94б-1а</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="our-apartments__body elit">
            <ul class="our-apartments__body__tabs">
                <li class="our-apartments__body__tabs__tab"><a href="#elit_lux"
                                                               class="active"><?= $atts['elite_hostel']['0']['title']; ?></a>
                </li>
                <li class="our-apartments__body__tabs__tab"><a
                            href="#elit_for2"><?= $atts['elite_hostel']['1']['title']; ?></a></li>
                <li class="our-apartments__body__tabs__tab"><a
                            href="#elit_for4"><?= $atts['elite_hostel']['2']['title']; ?></a></li>
                <li class="our-apartments__body__tabs__tab"><a
                            href="#elit_rules"><?= $atts['elite_hostel']['3']['title']; ?></a></li>
            </ul>
            <div class="apartments__body__slider">
                <div id="elit_lux" class="our-apartments__body__slider__content">
                    <div class="our-apartments__body__slider__content__photo">
                        <div class="our-apartments__body__slider__content__photo__wrap flexslider">
                            <ul class="slides">
                                <?php if (is_array($atts['elite_hostel']['0']['img']['0']) && !empty($atts['elite_hostel']['0']['img']['0'])): ?>
                                    <?php foreach ($atts['elite_hostel']['0']['img']['0'] as $att): ?>
                                        <li data-thumb="<?= $att['url']; ?>">
                                            <img src="<?= $att['url']; ?>" alt="">
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="our-apartments__body__slider__content__text">
                        <?= $atts['elite_hostel']['0']['description']; ?>
                    </div>
                </div>

                <div id="elit_for2" class="our-apartments__body__slider__content">
                    <div class="our-apartments__body__slider__content__photo">
                        <div class="our-apartments__body__slider__content__photo__wrap flexslider">
                            <ul class="slides">
                                <?php if (is_array($atts['elite_hostel']['1']['img']['0']) && !empty($atts['elite_hostel']['0']['img']['0'])): ?>
                                    <?php foreach ($atts['elite_hostel']['1']['img']['0'] as $att): ?>
                                        <li data-thumb="<?= $att['url']; ?>">
                                            <img src="<?= $att['url']; ?>" alt="">
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="our-apartments__body__slider__content__text">
                        <?= $atts['elite_hostel']['1']['description']; ?>
                    </div>
                </div>

                <div id="elit_for4" class="our-apartments__body__slider__content">
                    <div class="our-apartments__body__slider__content__photo">
                        <div class="our-apartments__body__slider__content__photo__wrap flexslider">
                            <ul class="slides">
                                <?php if (is_array($atts['elite_hostel']['2']['img']['0']) && !empty($atts['elite_hostel']['0']['img']['0'])): ?>
                                    <?php foreach ($atts['elite_hostel']['2']['img']['0'] as $att): ?>
                                        <li data-thumb="<?= $att['url']; ?>">
                                            <img src="<?= $att['url']; ?>" alt="">
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="our-apartments__body__slider__content__text">
                        <?= $atts['elite_hostel']['2']['description']; ?>
                    </div>
                </div>

                <div id="elit_rules" class="our-apartments__body__slider__content">
                    <div class="our-apartments__body__slider__content__text rules">
                        <?= $atts['elite_hostel']['3']['description']; ?>
                    </div>
                </div>

            </div>

        </div>

        <div class="our-apartments__body classic">
            <ul class="our-apartments__body__tabs">
                <li class="our-apartments__body__tabs__tab"><a href="#classic_lux"
                                                               class="active"><?= $atts['classic_hostel']['0']['title']; ?></a>
                </li>
                <li class="our-apartments__body__tabs__tab"><a
                            href="#classic_for2"><?= $atts['classic_hostel']['1']['title']; ?></a></li>
                <li class="our-apartments__body__tabs__tab"><a
                            href="#classic_for4"><?= $atts['classic_hostel']['2']['title']; ?></a></li>
                <li class="our-apartments__body__tabs__tab"><a
                            href="#classic_for6"><?= $atts['classic_hostel']['3']['title']; ?></a></li>
                <li class="our-apartments__body__tabs__tab"><a
                            href="#classic_rules"><?= $atts['classic_hostel']['4']['title']; ?></a>
                </li>
            </ul>
            <div class="apartments__body__slider">

                <div id="classic_lux" class="our-apartments__body__slider__content">
                    <div class="our-apartments__body__slider__content__photo">
                        <div class="our-apartments__body__slider__content__photo__wrap flexslider">
                            <ul class="slides">
                                <?php if (is_array($atts['classic_hostel']['0']['img']['0']) && !empty($atts['classic_hostel']['0']['img']['0'])): ?>
                                    <?php foreach ($atts['classic_hostel']['0']['img']['0'] as $att): ?>
                                        <li data-thumb="<?= $att['url']; ?>">
                                            <img src="<?= $att['url']; ?>" alt="">
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="our-apartments__body__slider__content__text">
                        <?= $atts['classic_hostel']['0']['description']; ?>
                    </div>
                </div>

                <div id="classic_for2" class="our-apartments__body__slider__content">
                    <div class="our-apartments__body__slider__content__photo">
                        <div class="our-apartments__body__slider__content__photo__wrap flexslider">
                            <ul class="slides">
                                <?php if (is_array($atts['classic_hostel']['1']['img']['0']) && !empty($atts['classic_hostel']['1']['img']['0'])): ?>
                                    <?php foreach ($atts['classic_hostel']['1']['img']['0'] as $att): ?>
                                        <li data-thumb="<?= $att['url']; ?>">
                                            <img src="<?= $att['url']; ?>" alt="">
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="our-apartments__body__slider__content__text">
                        <?= $atts['classic_hostel']['1']['description']; ?>
                    </div>
                </div>

                <div id="classic_for4" class="our-apartments__body__slider__content">
                    <div class="our-apartments__body__slider__content__photo">
                        <div class="our-apartments__body__slider__content__photo__wrap flexslider">
                            <ul class="slides">
                                <?php if (is_array($atts['classic_hostel']['2']['img']['0']) && !empty($atts['classic_hostel']['2']['img']['0'])): ?>
                                    <?php foreach ($atts['classic_hostel']['2']['img']['0'] as $att): ?>
                                        <li data-thumb="<?= $att['url']; ?>">
                                            <img src="<?= $att['url']; ?>" alt="">
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="our-apartments__body__slider__content__text">
                        <?= $atts['classic_hostel']['2']['description']; ?>
                    </div>
                </div>

                <div id="classic_for6" class="our-apartments__body__slider__content">
                    <div class="our-apartments__body__slider__content__photo">
                        <div class="our-apartments__body__slider__content__photo__wrap flexslider">
                            <ul class="slides">
                                <?php if (is_array($atts['classic_hostel']['3']['img']['0']) && !empty($atts['classic_hostel']['3']['img']['0'])): ?>
                                    <?php foreach ($atts['classic_hostel']['3']['img']['0'] as $att): ?>
                                        <li data-thumb="<?= $att['url']; ?>">
                                            <img src="<?= $att['url']; ?>" alt="">
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                    <div class="our-apartments__body__slider__content__text">
                        <?= $atts['classic_hostel']['3']['description']; ?>
                    </div>
                </div>

                <div id="classic_rules" class="our-apartments__body__slider__content">
                    <div class="our-apartments__body__slider__content__text rules">
                        <?= $atts['classic_hostel']['4']['description']; ?>
                    </div>
                </div>

            </div>

        </div>
        <?php if (is_array($atts['condition']) && !empty($atts['condition'])): ?>
            <?php foreach ($atts['condition'] as $att): ?>
                <div class="our-apartments__foot">
                    <h4><?= $att['title']; ?></h4>
                    <?= $att['description']; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>