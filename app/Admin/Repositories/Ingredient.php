<?php

namespace App\Admin\Repositories;

use App\Models\Ingredient as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Ingredient extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
