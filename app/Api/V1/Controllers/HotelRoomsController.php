<?php

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use App\Api\V1\Requests\HotelRoomRequest;
use Illuminate\Http\Request;
use App\Api\V1\Repositories\HotelRepository;

class HotelRoomsController extends Controller
{

    private $hotel;

    public function __construct(HotelRepository $repository)
    {
        $this->hotel = $repository;
    }


    public function AssignRoom(HotelRoomRequest $request)
    {
        return $this->hotel->assignRoom($request);
    }
}
