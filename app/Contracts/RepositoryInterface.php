<?php

namespace App\Contracts;
use Illuminate\Http\Request;


interface RepositoryInterface
{
    public function store(Request $request);
    public function all();
    public function get();
    public function delete();
    public function update();
}
