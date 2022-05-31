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
    Route::get('rooms/{room}/accommodations', [TypeRoomController::class, 'accommodations']);
    Route::apiResource("rooms/types", TypeRoomController::class)->only([
        'index', 'show'
    ]);



    /*************** HOTELS *********/


    Route::post("hotels/rooms/assignation", [HotelRoomsController::class, 'AssignRoom']);
    Route::apiResource("hotels", HotelController::class)->only([
        'index', 'show', 'store'
    ]);
});
