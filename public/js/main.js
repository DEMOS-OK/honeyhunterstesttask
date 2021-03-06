
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


/**
 * Выполняет валидацию email
 * @param {string} email 
 */
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

/**
 * Добавляет комментарий на странице после успешного ajax-запроса
 * @param {Array} string
 */
function addComment(data)
{
    html = "\
        <div class='comment-col'>\
            <div class='comment my'>\
                <div class='comment-header'>\
                    <p>" + data['name'] + "</p>\
                </div>\
                <div class='comment-body'>\
                    <p class='email'>\
                        " + data['email'] + "\
                    </p>\
                    <p class='comment-text'>\
                        " + data['text'] + "\
                    </p>\
                </div>\
            </div>\
        </div >\
    ";
    $('.comments-section-content').append(html);
}


// Отправка ajax-запроса на создание комментария при клике по кнопке
$('#sendComment').click(function() {
    // Получаем данные формы
    postData = getFormData('.form-items', ['url']);
    url = $('input[name=url]').val();
    email = postData['email'];
    name = postData['name'];
    text = postData['text'];

    // Валидация данных формы
    errors = 0;
    if (!email || !name || !text) {
        errors++;
        alert('Все поля обязательны для заполнения!');
    }
    if (!validateEmail(email)) {
        errors++;
        alert('Неверный email');
    }

    if (!errors) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            async: false,
            url: url,
            data: postData,
            success: function (data) {
                alert(data['message']);
                addComment(postData);
            },
            error: function (request, status, error) {
                alert(request.responseJSON.message)
            }
        });
    }
});