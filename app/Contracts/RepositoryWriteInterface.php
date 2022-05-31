<?php

namespace App\Contracts;
use Illuminate\Foundation\Http\FormRequest;


interface RepositoryWriteInterface
{
    public function store(FormRequest $request);
    public function delete();
    public function update();
}
