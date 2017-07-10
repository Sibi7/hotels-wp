<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="our-apartments__head for-gallery">
    <div class="container">
        <h2>Наши аппартаменты</h2>
        <p>Представляем Вашему вниманию несколько видов размещения в хостеле.</p>
        <div class="our-apartments__head__address">
            <?php if(is_array($atts['hostels']) && !empty($atts['hostels'])): ?>
                <?php foreach($atts['hostels'] as $key => $hostel): ?>
                    <div class="our-apartments__head__address__block">
                        <a href="#hostel-<?= $key;?>" class="for-yellow-string <?= $key === 0 ? 'active' : false;?>">
                            <?= $hostel['title']; ?>
                        </a>
                        <p> <?= $hostel['address']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php if(is_array($atts['hostels']) && !empty($atts['hostels'])): ?>
    <?php foreach($atts['hostels'] as $key => $hostel):
//        $images = $hostel['img'];
//        $imagesLeft = array_slice($images, 0, 2);
//        $imagesCenter = array_slice($images, 2, 1);
//        $imagesCenter2 = array_slice($images, 3, 2);
//        $imagesRight = array_slice($images, 6, 3);
//
//
//        fw_print($imagesLeft);
//        fw_print($imagesCenter);
//        fw_print($imagesCenter2);
//        fw_print($imagesRight);

        ?>
        <section class="photo photo-gallery" id="hostel-<?= $key;?>">

            <div class="container">

                <a href="#" class="photo__trigger"><?= $hostel['title'];?></a>

                <div class="photo__box">

                    <div class="photo__left">
                        <a href="<?= $hostel['img'][0]['url'];?>" class="photo__left--item" data-fancybox="gallery">
                            <img src="<?= $hostel['img'][0]['url'];?>" alt="photo">
                        </a>
                        <a href="<?= $hostel['img'][1]['url'];?>" class="photo__left--item" data-fancybox="gallery">
                            <img src="<?= $hostel['img'][1]['url'];?>" alt="photo">
                        </a>
                    </div>
                    <div class="photo__center">

                        <h3><?= $hostel['title'];?></h3>

                        <?= $hostel['description'];?>

                        <a href="<?= $hostel['img'][2]['url'];?>" class="photo__center--img" data-fancybox="gallery">
                            <img src="<?= $hostel['img'][2]['url'];?>" alt="">
                        </a>

                        <div class="photo__center--imgs">

                            <a href="<?= $hostel['img'][3]['url'];?>" class="photo__center--img" data-fancybox="gallery">
                                <img src="<?= $hostel['img'][3]['url'];?>" alt="">
                            </a>
                            <a href="<?= $hostel['img'][4]['url'];?>" class="photo__left--item" data-fancybox="gallery">
                                <img src="<?= $hostel['img'][4]['url'];?>" alt="">
                            </a>
                            <a href="<?= $hostel['img'][5]['url'];?>" class="photo__center--img" data-fancybox="gallery">
                                <img src="<?= $hostel['img'][5]['url'];?>" alt="">
                            </a>

                        </div>

                    </div>
                    <div class="photo__right">

                        <a href="<?= $hostel['img'][6]['url'];?>" class="photo__right--item" data-fancybox="gallery">
                            <img src="<?= $hostel['img'][6]['url'];?>" alt="photo">
                        </a>
                        <a href="<?= $hostel['img'][7]['url'];?>" class="photo__right--item" data-fancybox="gallery">
                            <img src="<?= $hostel['img'][7]['url'];?>" alt="photo">
                        </a>
                        <a href="<?= $hostel['img'][8]['url'];?>" class="photo__right--item" data-fancybox="gallery">
                            <img src="<?= $hostel['img'][8]['url'];?>" alt="photo">
                        </a>

                    </div>

                </div>

            </div>

        </section>
    <?php endforeach; ?>
<?php endif; ?>
