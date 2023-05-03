<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsAutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("locations_autos")->insert([
            "locations_id" => 1,
            "autos_id" => 1,
            "disponibilidad" => 1
        ]);
        DB::table("locations_autos")->insert([
            "locations_id" => 1,
            "autos_id" => 2,
            "disponibilidad" => 0
        ]);
        DB::table("locations_autos")->insert([
            "locations_id" => 2,
            "autos_id" => 3,
            "disponibilidad" => 1
        ]);
        DB::table("locations_autos")->insert([
            "locations_id" => 2,
            "autos_id" => 1,
            "disponibilidad" => 0
        ]);
        DB::table("locations_autos")->insert([
            "locations_id" => 1,
            "autos_id" => 4,
            "disponibilidad" => 1
        ]);
    }
}
