<?php

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Api\V1\Requests\HotelRequest;
use App\Api\V1\Repositories\HotelRepository;
use App\Models\Hotel;

class HotelController extends Controller
{


    private $hotel;

    public function __construct(HotelRepository $repository)
    {
        $this->hotel = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->hotel->all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequest $request)
    {
        return $this->hotel->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return $this->hotel->get($hotel);
    }
}
