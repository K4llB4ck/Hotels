<?php

namespace App\Api\V1\Repositories;

use App\Contracts\RepositoryReadInterface;
use App\Models\TypeRoom;
use App\Api\V1\Resources\TypeRoomCollection;
use App\Http\Resources\TypeRoomResource;

class TypeRoomRepository implements RepositoryReadInterface
{

    public function get($typeRoom)
    {
        return new TypeRoomResource($typeRoom);
    }

    public function all()
    {
        return new TypeRoomCollection(TypeRoom::all());
    }

    public function assignedRooms($typeRoom)
    {
        return $typeRoom->assignments;
    }
}
