<?php

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Api\V1\Repositories\TypeRoomRepository;
use App\Models\TypeRoom;

class TypeRoomController extends Controller
{

    private $typeRoom;


    /**
     * Inject the repository in charge of handling queries
     *
     * @param \App\Api\V1\Repositories\TypeRoomRepository $repository
     */
    public function __construct(TypeRoomRepository $repository)
    {
        $this->typeRoom = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->typeRoom->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeRoom  $typeRoom
     * @return \Illuminate\Http\Response
     */
    public function show(typeRoom $typeRoom)
    {
        return $this->typeRoom->get($typeRoom);
    }

    /**
     * shows all combinations of room type and accommodation assigned to a hotel
     *
     * @param \App\Models\TypeRoom $typeRoom
     * @return \Illuminate\Http\Response
     */
    public function accommodations(TypeRoom $typeRoom)
    {
        return $this->typeRoom->assignedRooms($typeRoom);
    }
}
