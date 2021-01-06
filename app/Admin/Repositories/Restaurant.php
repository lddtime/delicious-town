<?php

namespace App\Admin\Repositories;

use App\Models\Restaurant as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Restaurant extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
