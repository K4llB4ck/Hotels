<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("type_rooms")->insert([
            ['name' => 'Estándar'],
            ['name' => 'Junior'],
            ['name' => 'Suite']
        ]);
    }
}
