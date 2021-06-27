<?php

namespace App\Http\Controllers\Comments;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\Comments\CommentStoreRequest;

/**
 * Контроллер работы с комментариями
 */
class CommentController extends CoreController
{
    /**
     * Отображает все комментарии
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('index');
    }

    /**
     * Сохраняет новый комментарий в базе данных
     *
     * @param  CommentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentStoreRequest $request)
    {
        // Получаем данные с формы
        $data = $request->input();

        // Добавляем комментарий в базу
        $result = Comment::create($data);

        // Формируем ответ
        if ($result) {
            $answer = [
                'success' => 1,
                'message' => 'Комментарий успешно сохранён',
            ];
        } else {
            $answer = [
                'success' => 0,
                'message' => 'При создании комментария произошла ошибка',
            ];
        }
        
        // Возвращаем ответ
        echo json_encode($answer);
    }

}
