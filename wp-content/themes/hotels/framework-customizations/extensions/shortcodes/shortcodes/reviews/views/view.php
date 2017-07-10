<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
?>
<section class="reviews" id="reviews">

    <div class="container">

        <h3 class="section-title">Отзывы</h3>


        <div class="reviews__slider" id="reviews-slider">
            <?php if(is_array($atts['reviews']) && !empty($atts['reviews'])): ?>
                <?php foreach($atts['reviews'] as $review): ?>
                    <div class="reviews__item">

                        <div class="reviews__item--img-wrapper">

                            <div class="reviews__item--img">

                                <img src="<?= $review['photo']['url'];?>" alt="">
                            </div>

                        </div>

                        <div class="reviews__item--descr">

                            <p class="reviews__item--name"><?= $review['name'];?></p>

                            <p class="reviews__item--rev"><?= $review['review'];?></p>


                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>

</section>