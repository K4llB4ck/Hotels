<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Api\V1\Controllers\TypeRoomController;
use App\Api\V1\Controllers\HotelController;
use App\Api\V1\Controllers\HotelRoomsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix("v1")->group(function () {


    /*******TYPE ROOMS********/
    Route::apiResource("type-rooms", TypeRoomController::class)->only([
        'index', 'show'
    ]);
    Route::get('type-rooms/{type-room}/accommodations', [TypeRoomController::class, 'accommodations']);




    /*************** HOTELS *********/
    Route::apiResource("hotels", HotelController::class)->only([
        'index', 'show', 'store'    
    ]);
    Route::post("hotels/{hotel}/accommodation-type-rooms/assignation", [HotelRoomsController::class, 'assignRoom']);

});
