<?php

namespace App\Repositories;

use App\Contracts\RepositoryReadInterface;
use App\Contracts\FactoryInterface;
use App\Models\TypeRoom;
use App\Api\V1\Resources\TypeRoomCollection;

class TypeRoomRepository implements RepositoryReadInterface, FactoryInterface
{

    public function createRepository(): FactoryInterface
    {
        return new TypeRoomRepository();
    }


    public function get()
    {
    }

    public function all()
    {
        return new TypeRoomCollection(TypeRoom::all());
    }
}
