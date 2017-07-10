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
    'items' => array(
        'type' => 'addable-popup',
        'label' => __('Хостелы', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'limit' => 2, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'img' => array(
                'label' => __('Картинка', '{domain}'),
                'type' => 'upload',
                'images_only' => true,
            ),
            'title' => array(
                'label' => __('Название хостела', '{domain}'),
                'type' => 'text',
            ),
            'price' => array(
                'label' => __('Цена', '{domain}'),
                'type' => 'text',
            ),
            'address' => array(
                'label' => __('Адрес', '{domain}'),
                'type' => 'text',
            ),
            'route' => array(
                'label' => __('Маршрут', '{domain}'),
                'desc' => __('Время до вокзала', '{domain}'),
                'type' => 'text',
            ),
        ),
    )
];