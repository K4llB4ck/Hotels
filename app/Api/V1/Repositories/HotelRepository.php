<?php

namespace App\Api\V1\Repositories;

use App\Contracts\RepositoryWriteInterface;
use App\Contracts\RepositoryReadInterface;
use App\Models\Hotel;
use App\Api\V1\Resources\HotelCollection;
use App\Api\V1\Resources\HotelResource;

class HotelRepository implements RepositoryReadInterface, RepositoryWriteInterface
{


    /**
     * Assign a combination of room type and accommodation to a hotel
     *
     * @param \Illuminate\Validation\Validator $request
     * @param \App\Models\Hotel $hotel
     * @return array
     */
    public function assignRoom($request, $hotel)
    {
        $data = $request->safe()->all();
        $assignRoom =  $hotel->roomAssignement()->attach($data['assignation'], [
            "room_quanty" => $data['rooms']
        ]);

        return array("data" => true);
    }


    /**
     * create a hotel
     *
     * @param \Illuminate\Validation\Validator $request
     * @return \App\Api\V1\Resources\HotelResource
     */
    public function store($request)
    {

        $hotel = Hotel::create($request->safe()->all());
        return new HotelResource($hotel);
    }

    /**
     * check all the hotels created
     *
     * @return \App\Api\V1\Resources\HotelCollection
     */
    public function all()
    {
        return new HotelCollection(Hotel::all());
    }


    /**
     * consult a specific hotel
     *
     * @param \App\Models\Hotel $hotel
     * @return \App\Api\V1\Resources\HotelResource
     */
    public function get($hotel)
    {
        return new HotelResource($hotel);
    }

    public function delete()
    {
    }

    public function update()
    {
    }
}
