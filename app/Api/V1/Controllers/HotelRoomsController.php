<?php

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use App\Api\V1\Requests\HotelRoomRequest;
use Illuminate\Http\Request;
use App\Api\V1\Repositories\HotelRepository;
use App\Models\Hotel;

class HotelRoomsController extends Controller
{

    private $hotel;


    /**
     * Inject the repository in charge of handling queries
     * 
     * @param \App\Api\V1\Repositories\HotelRepository $repository
     */
    public function __construct(HotelRepository $repository)
    {
        $this->hotel = $repository;
    }

    /**
     * Assign a combination of room type and accommodation to a hotel
     *
     * @param \Illuminate\Validation\Validator $request
     * @param \App\Models\Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function assignRoom(HotelRoomRequest $request, Hotel $hotel)
    {
        return $this->hotel->assignRoom($request, $hotel);
    }
}
