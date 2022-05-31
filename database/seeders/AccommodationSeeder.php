<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("accommodations")->insert([
            ['name' => 'Sencilla'],
            ['name' => 'Doble'],
            ['name' => 'Triple'],
            ['name' => 'Cuádruple']
        ]);
    }
}
