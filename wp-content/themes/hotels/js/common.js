;

(function ($) {
    // Тут пишем код, когда загружен ДОМ, но без картинок
    $(function () {
        // Тут пишем код,когда страница загрузилась полностью
        //так пишем евенты
        $(document).on('submit','#header-form',function(){
            event.preventDefault();

            var formData = new FormData($('#header-form')[0]);

            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    // событие, срабатывающее перед отправкой запроса (например, включаем прелоадер)
                },
                success: function (response) {
                    alert(response.message);

                    if (response.status === 'success') {
                        $('#header-form')[0].reset();
                    }
                }
            });
        });

    });
})(jQuery);