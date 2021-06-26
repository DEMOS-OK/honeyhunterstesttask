
/**
 * Собирает данные формы
 * @param {string} selector
 * @param {Array} exclude
 */
function getFormData(selector, exclude)
{
    obj_form = $(selector);

    var hData = {};
    $('input, textarea', obj_form).each(function() {
        if (this.name && this.name != '' && !(exclude.includes(this.name))) {
            hData[this.name] = this.value;
        }
    });

    return hData;
}

// Отправка ajax-запроса на создание комментария при клике по кнопке
$('#sendComment').click(function() {
    // Получаем данные формы
    postData = getFormData('.form-items', ['url']);
    url = $('input[name=url]').val();

    $.ajax({
		type: 'POST',
		dataType: 'json',
		async: false,
		url: url,
        data: postData,
		success: function (data) {
            alert(data['message']);
		},
		error: function (request, status, error) {
			alert(request.responseText);
		}
	});
});