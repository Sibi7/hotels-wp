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
    'contacts' => array(
        'type' => 'addable-popup',
        'label' => __('Контакты', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'label' => __('Заголовок', '{domain}'),
                'type' => 'text',
                'value' => 'Контакты'
            ),
            'img' => array(
                'label' => __('Фото', '{domain}'),
                'type' => 'upload',
            ),
            'address' => array(
                'label' => __('Адрес', '{domain}'),
                'type' => 'text',
            ),
            'phone' => array(
                'label' => __('Телефон', '{domain}'),
                'type' => 'text',
            ),
            'phone-two' => array(
                'label' => __('Доп. телефон', '{domain}'),
                'type' => 'text',
            ),
            'operating' => array(
                'label' => __('Режим работы', '{domain}'),
                'type' => 'text',
            ),
        ),
    )
];