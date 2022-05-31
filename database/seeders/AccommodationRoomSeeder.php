<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccommodationRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("accommodation_rooms")->insert([
            ["type_id" => 1, "accommodation_id" => 1],
            ["type_id" => 1, "accommodation_id" => 2],
            ["type_id" => 2, "accommodation_id" => 3],
            ["type_id" => 2, "accommodation_id" => 4],
            ["type_id" => 3, "accommodation_id" => 1],
            ["type_id" => 3, "accommodation_id" => 2],
            ["type_id" => 3, "accommodation_id" => 3]
        ]);
    }
}
