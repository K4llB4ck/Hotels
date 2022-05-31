<?php

namespace App\Contracts;
 

interface FactoryInterface {

    public function createRepository(): FactoryInterface;
}