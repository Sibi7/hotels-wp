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
    'elite-hostel' => array(
        'type' => 'addable-popup',
        'label' => __('Элитный хостел', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'limit' => 4,
        'popup-options' => array(
            'title' => array(
                'label' => __('Заголовок', '{domain}'),
                'type' => 'text',
            ),
            'img' => array(
                'type' => 'addable-option',
                'label' => __('Фото', '{domain}'),
                'option' => array('type' => 'multi-upload'),
                'add-button-text' => __('Добавить', '{domain}'),
            ),
            'description' => array(
                'type' => 'wp-editor',
                'label' => __('Описание люкса', '{domain}'),
                'size' => 'small', // small, large
                'editor_height' => 400,
                'wpautop' => true,
                'editor_type' => false, // tinymce, html
            ),
        ),
    ),
    'classic-hostel' => array(
        'type' => 'addable-popup',
        'label' => __('Классический хостел', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'limit' => 5,
        'popup-options' => array(
            'title' => array(
                'label' => __('Заголовок', '{domain}'),
                'type' => 'text',
            ),
            'img' => array(
                'type' => 'addable-option',
                'label' => __('Фото', '{domain}'),
                'option' => array('type' => 'multi-upload'),
                'add-button-text' => __('Добавить', '{domain}'),
            ),
            'description' => array(
                'type' => 'wp-editor',
                'label' => __('Описание люкса', '{domain}'),
                'size' => 'small', // small, large
                'editor_height' => 400,
                'wpautop' => true,
                'editor_type' => false, // tinymce, html
            ),
        ),
    ),
    'condition' => array(
        'type' => 'addable-popup',
        'label' => __('Условия', '{domain}'),
        'size' => 'large', // small, medium, large
        'template' => '{{- title }}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Заголовок', '{domain}'),
                'type' => 'text',
            ),
            'description' => array(
                'type' => 'wp-editor',
                'label' => __('Текст Условия', '{domain}'),
                'size' => 'small', // small, large
                'editor_height' => 400,
                'wpautop' => true,
                'editor_type' => false,
            ),
        ),
    )
];