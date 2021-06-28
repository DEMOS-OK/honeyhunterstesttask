<?php

namespace App\Repositories;

use App\Repositories\CoreRepository;
use App\Models\Comment;

/**
 * Репозиторий для получения комментариев
 */
class CommentsRepository extends CoreRepository
{

    /**
     * Возвращает модель, с которой будет работать репозиторий
     * @return string
     */
    protected function getModelClass()
    {
        return Comment::class;
    }

    /**
     * Возвращает все комментарии
     * @return Collection
     */
    public function getAll()
    {
        $result = $this->start()->select('*')->get();
        
        return $result;
    }

}