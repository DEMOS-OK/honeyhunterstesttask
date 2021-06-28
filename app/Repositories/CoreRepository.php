<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;


/**
 * Класс CoreRepository - абстрактный, используются только его наследники.
 * @package App\Repositories;
 * Репозиторий для работы с какой-либо сущностью
 * Может выдавать наборы данных
 * Не может изменять и создавать сущности
 */
abstract class CoreRepository
{

    /**
     * Это какая-то модель для выдачи набор данных
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Конструктор класса CoreRepository
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * Возвращает нужную модель в зависимости от принадлежности репозитория.
     * @return mixed
     */
    abstract protected function getModelClass();

    /**
     * Возвращает модель для работы
     * @return Model|\Illuminate\Foundation\Application|mixed
     */
    protected function start()
    {
        return clone $this->model;
    }

}
