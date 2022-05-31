<?php

namespace App\Api\V1\Repositories;

use App\Contracts\RepositoryWriteInterface;
use App\Contracts\RepositoryReadInterface;
use App\Contracts\FactoryInterface;
use App\Api\V1\Requests\HotelRequest;
use App\Models\Hotel;
use App\Api\V1\Resources\HotelCollection;
use App\Api\V1\Resources\HotelResource;
use App\Models\HotelRooms;

class HotelRepository implements RepositoryReadInterface, RepositoryWriteInterface
{


    public function assignRoom($request)
    {

        $data = $request->safe()->all();
        $hotel = Hotel::find($data['hotel']);
        $assignRoom =  $hotel->roomAssignement()->attach($data['assignation'], [
            "room_quanty" => $data['rooms']
        ]);

        return array("data" => true);

    }


    public function store($request)
    {

        $hotel = Hotel::create($request->safe()->all());
        return new HotelResource($hotel);
    }

    public function all()
    {
        return new HotelCollection(Hotel::all());
    }

    public function get($Hotel)
    {
    }

    public function delete()
    {
    }

    public function update()
    {
    }
}
