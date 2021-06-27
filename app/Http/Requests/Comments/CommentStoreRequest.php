<?php

namespace App\Http\Requests\Comments;

use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
{
    /**
     * Проверяет, что пользователь авторизован
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Возвращает правила валидации данных
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required|max:50',
            'email' => 'required|email|max:50',
            'text'  => 'required|max:415',
        ];
    }
}
