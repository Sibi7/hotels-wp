<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
?>

<div class="rostov">
    <div class="container">
        <h1><img src="<?php bloginfo('template_directory'); ?>/img/icon/location.png" alt="">В Ростове обнаружено 2 хостела сети <span>"ЭЛИТА"</span></h1>
        <div class="rostov__wrapper">
            <?php if(is_array($atts['items']) && !empty($atts['items'])): ?>
                <?php foreach($atts['items'] as $item ):?>
                    <div class="rostov__wrapper__item">
                        <div class="rostov__wrapper__item__img img-2">

                            <img src="<?= $item['img']['url'] ;?>" alt="">
                        </div>
                        <div class="rostov__wrapper__item__content">
                            <h2>
                               <?= $item['title'];?>
                            </h2>
                            <ul>
                                <li><img src="<?php bloginfo('template_directory'); ?>/img/rostov-hotel/credit-cards.png" alt=""> <?= $item['price'];?></li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/img/rostov-hotel/location.png" alt=""> <?= $item['address'];?></li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/img/rostov-hotel/bus.png" alt=""> <?= $item['route'];?></li>
                            </ul>
                            <a href="/apartments"><button>Посмотреть апартаменты</button></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>