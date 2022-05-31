<?php

namespace App\Contracts;


interface RepositoryReadInterface
{
    public function all();
    public function get();
}
