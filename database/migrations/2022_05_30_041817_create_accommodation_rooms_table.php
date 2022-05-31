<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodation_rooms', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("type_id")->unsigned();
            $table->integer("accommodation_id")->unsigned();
            $table->foreign('type_id')->references('id')->on('type_rooms');
            $table->foreign('accommodation_id')->references('id')->on('accommodations');
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
        Schema::dropIfExists('accommodation_rooms');
    }
}
