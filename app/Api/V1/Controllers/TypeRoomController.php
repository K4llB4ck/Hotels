<?php

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Api\V1\Repositories\TypeRoomRepository;
use App\Models\TypeRoom;

class TypeRoomController extends Controller
{

    private $typeRoom;

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(typeRoom $typeRoom)
    {
        return $this->typeRoom->get($typeRoom);
    }

    public function accommodations(TypeRoom $typeRoom)
    {
       return $this->typeRoom->assignedRooms($typeRoom);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}
