<?php

namespace App\Api\V1\Repositories;

use App\Contracts\RepositoryReadInterface;
use App\Models\TypeRoom;
use App\Api\V1\Resources\TypeRoomCollection;
use App\Api\V1\Resources\TypeRoomResource;

class TypeRoomRepository implements RepositoryReadInterface
{

    /**
     * consult a specific type of room
     *
     * @param \App\Models\TypeRoom $typeRoom
     * @return  \App\Api\V1\Resources\TypeRoomResource
     */
    public function get($typeRoom)
    {
        return new TypeRoomResource($typeRoom);
    }

    /**
     * see all room types
     *
     * @return \App\Api\V1\Resources\TypeRoomCollection
     */
    public function all()
    {
        return new TypeRoomCollection(TypeRoom::all());
    }


    /**
     * see all combinations of room type and accommodation for a hotel
     *
     * @param \App\Models\TypeRoom $typeRoom
     * @return array
     */
    public function assignedRooms($typeRoom)
    {
        return $typeRoom->assignments;
    }
}
