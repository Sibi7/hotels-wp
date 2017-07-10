<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'title' => array(
        'type' => 'text',
        'value' => 'Элитный хостел в Ростове от 449р. в сутки',
        'label' => __('Заголовок банера', '{domain}'),
    ),
    'features' => array(
        'type' => 'addable-option',
        'value' => array('Яркий и современный дизайн', '10 лет опыта', 'Бесплатный Wi-Fi интернет', 'Все кровати одноярусные'),
        'label' => __('Преимущества', '{domain}'),
        'option' => array('type' => 'text'),
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'limit' => 5
    ),

    'background-img' => array(
        'type' => 'upload',
        'label' => __('Фоновое изображение', '{domain}'),
        'images_only' => true,
    ),

];