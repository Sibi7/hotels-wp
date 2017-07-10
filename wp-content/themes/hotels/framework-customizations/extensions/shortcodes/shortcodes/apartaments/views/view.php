<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
?>

<section class="apartments">

    <div class="container">

        <h1>Наши апартаменты</h1>

        <div id="apartments-slider" class="apartments__slider flexslider">

            <ul class="slides">
                <?php if(is_array($atts['slides']) && !empty($atts['slides'])): ?>
                    <?php foreach($atts['slides'] as $slide ): ?>
                        <li>
                            <div class="apartments__slider--element">
                                <div class="apartments__slider__photo">
                                    <img src="<?= $slide['img']['url'];?>" alt="">
                                </div>

                                <div class="apartments__slider__text">
                                    <h3>
                                       <?= $slide['title'];?>
                                    </h3>

                                <?= $slide['description'];?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

            </ul>

        </div>

        <div id="apartments-thumbnail" class="apartments__thumbnail">

            <ul class="slides"> <?php if(is_array($atts['slides']) && !empty($atts['slides'])): ?>
                <?php foreach($atts['slides'] as $slide): ?>
                        <li>
                            <img src="<?= $slide['img']['url'];?>" alt="">
                        </li>
                <?php endforeach; ?>
            <?php endif; ?>

                
            </ul>


        </div>

    </div>

</section>