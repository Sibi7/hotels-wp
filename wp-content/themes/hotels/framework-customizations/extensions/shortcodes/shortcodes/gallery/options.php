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
    'hostels' => array(
        'type' => 'addable-popup',
        'label' => __('Хостелы', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'limit' => 2,
        'popup-options' => array(
            'title' => array(
                'label' => __('Название хостела', '{domain}'),
                'type' => 'text',
            ),
            'address' => array(
                'label' => __('Адрес', '{domain}'),
                'type' => 'text',
            ),
            'description' => array(
                'type' => 'wp-editor',
                'label' => __('Описание хостела', '{domain}'),
                'size' => 'small', // small, large
                'editor_height' => 400,
                'wpautop' => true,
                'editor_type' => false, // tinymce, html
            ),
            'img' => array(
                'type' => 'multi-upload',
                'label' => __('Фотографии', '{domain}'),
                'images_only' => true,
            ),
        ),
    ),
];