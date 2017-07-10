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
    'reviews' => array(
        'type' => 'addable-popup',
        'label' => __('Отзывы', '{domain}'),
        'template' => '{{- name }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'label' => __('Фото', '{domain}'),
                'type' => 'upload',
                'images_only' => true,
            ),
            'name' => array(
                'label' => __('Имя', '{domain}'),
                'type' => 'text',
            ),
            'review' => array(
                'type'  => 'textarea',
                'label' => __('Отзыв', '{domain}'),
            ),
        ),
    )
];