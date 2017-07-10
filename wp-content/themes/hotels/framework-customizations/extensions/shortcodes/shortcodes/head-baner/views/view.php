 <?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
// fw_print($atts);
?>

 <section class="header" style="margin-top: -90px; background: url(<?= $atts['background_img']['url'] ; ?>) no-repeat 50%; background-size: cover;">
     <div class="container">
         <div class="header__middle-content">
             <div class="header__middle-content__text">
                 <p>
                     <?= $atts['title']; ?>
                 </p>
                 <ul>
                     <?php if(is_array($atts['features']) && !empty($atts['features'])): ?>
                         <?php foreach($atts['features'] as  $value): ?>
                             <li><?= $value; ?></li>
                         <?php endforeach; ?>
                     <?php endif; ?>
                 </ul>
             </div>
             <div class="header__middle-content__icon">
                 <img src="<?php bloginfo('template_directory'); ?>/img/icon/bed.png" alt="">
             </div>
         </div>
         <div class="header__form" id="stock-scroll">
             <h1>Забронировать online</h1>
             <h2>Прекрасное место для тех, кто хочет остановиться в центре Ростова-на-Дону</h2>
             <form id="header-form">
                 <!-- Hidden Required Fields -->
                 <input type="hidden" name="action" value="booking">
                 <!-- END Hidden Required Fields -->

                 <div class="header__form__wrapper">
                     <div class="header__form__wrapper__input">
                         <label>Заезд *</label>
                         <input  id="datepicker" type="text" class="form-field input-value" name="dt_from" required>
                     </div>
                     <div class="header__form__wrapper__input">
                         <label>Отъезд  *</label>
                         <input id="datepicker1" type="text" class="form-field input-value" name="dt_to" required>
                     </div>
                     <div class="header__form__wrapper__input-large">
                         <label>Телефон *</label>
                         <input type="tel" name="phone" required class="form-field input-value ">
                     </div>
                 </div>
                 <div class="header__form__wrapper">
                     <div class="header__form__wrapper__input-large">
                         <label>Мест *</label>
                         <input type="number" name="count" required class="input-value">
                     </div>
                     <div class="header__form__wrapper__input-large">
                         <label>Е-mail</label>
                         <input type="email" name="email" required class="input-value">
                     </div>
                 </div>
                 <div class="header__form__wrapper">
                     <div class="header__form__wrapper__input-right">
                         <label>ФИО *</label>
                         <input type="text" name="name" required class="input-value">
                     </div>
                     <div class="header__form__wrapper__input-right-button">
                         <button type="submit">Отправить заявку</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </section>