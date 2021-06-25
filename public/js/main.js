
/**
 * Собирает данные формы
 * @param {string} selector
 */
function getFormData(selector)
{
    form = $(selector);

    return [];
}

// Отправка ajax-запроса на создание комментария при клике по кнопке
$('#sendComment').click(function() {
    // Получаем данные формы
    data = getFormData('.form-items');
});