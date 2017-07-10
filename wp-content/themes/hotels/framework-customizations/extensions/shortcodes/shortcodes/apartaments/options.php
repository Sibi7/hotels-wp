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
    'slides' => array(
        'type' => 'addable-popup',
        'label' => __('Апартаменты', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'limit' => 4, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'img' => array(
                'label' => __('Картинка', '{domain}'),
                'type' => 'upload',
                'images_only' => true,
            ),
            'title' => array(
                'label' => __('Название апартаментов', '{domain}'),
                'type' => 'text',
            ),
            'description' => array(
                'type'  => 'wp-editor',
                'label' => __('Текст описания', '{domain}'),
                'size' => 'small', // small, large
                'editor_height' => 400,
                'wpautop' => true,
                'editor_type' => false, // tinymce, html
            ),
        ),
    )
];