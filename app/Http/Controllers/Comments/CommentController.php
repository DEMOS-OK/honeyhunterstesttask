<?php

namespace App\Http\Controllers\Comments;

use Illuminate\Http\Request;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

}
