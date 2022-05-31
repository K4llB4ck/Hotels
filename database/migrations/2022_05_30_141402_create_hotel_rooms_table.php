<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer("hotel_id")->unsigned();
            $table->integer("accomodation_rooms_id")->unsigned();
            $table->integer("room_quanty");
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->foreign('accomodation_rooms_id')->references('id')->on('accommodation_rooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_rooms');
    }
}
