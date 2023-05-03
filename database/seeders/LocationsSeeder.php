<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("locations")->insert([
            "nombre" => "loc 1",
            "descripcion" => "desc 1",
            "municipio" => "municipio 1"
        ]);

        DB::table("locations")->insert([
            "nombre" => "loc 2",
            "descripcion" => "desc 2",
            "municipio" => "municipio 2"
        ]);
    }
}
