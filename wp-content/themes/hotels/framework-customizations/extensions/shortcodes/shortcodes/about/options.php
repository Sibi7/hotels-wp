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
        'label' => __('Название заголовка', '{domain}'),
        'type' => 'text',
    ),
    'img' => array(
        'label' => __('Картинка', '{domain}'),
        'type' => 'upload',
        'images_only' => true,
    ),
    'description' => array(
        'type'  => 'wp-editor',
        'label' => __('Текст описания', '{domain}'),
        'size' => 'small', // small, large
        'editor_height' => 400,
        'wpautop' => true,
        'editor_type' => false, // tinymce, html
    ),
    'description-two' => array(
        'type'  => 'wp-editor',
        'label' => __('Текст описания 2', '{domain}'),
        'size' => 'small', // small, large
        'editor_height' => 400,
        'wpautop' => true,
        'editor_type' => false, // tinymce, html
    ),
    'contacts' => array(
        'label' => __('Название заголовка', '{domain}'),
        'type' => 'text',
        'value' => 'Контакты'
    ),
    'address' => array(
        'label' => __('Адрес', '{domain}'),
        'type' => 'text',
        'value' => 'Россия, 344023, г. Ростов-на-Дону, ул. Нансена, 311'
    ),
    'phone' => array(
        'label' => __('Телефон', '{domain}'),
        'type' => 'text',
        'value' => '+7 (863) 2 37 48 36',
        'add-button-text' => __('Добавить', '{domain}'),

    ),
    'operating' => array(
        'label' => __('Режим работы:', '{domain}'),
        'type' => 'text',
        'value' => 'Понедельник-пятница 9:00 - 18:00'
    ),
];