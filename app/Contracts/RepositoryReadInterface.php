<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;


interface RepositoryReadInterface
{
    public function all();
    public function get(Model $model);
}
