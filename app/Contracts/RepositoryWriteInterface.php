<?php

namespace App\Contracts;
use Illuminate\Validation\Validator;


interface RepositoryWriteInterface
{
    public function store(Validator $request);
    public function delete();
    public function update();
}
