<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("autos")->insert([
            "marca" => "CR-V",
            "modelo" => "Honda",
            "tipo" => "camioneta"
        ]);
        DB::table("autos")->insert([
            "marca" => "Jetta",
            "modelo" => "VW",
            "tipo" => "auto"
        ]);
        DB::table("autos")->insert([
            "marca" => "Cheyenne",
            "modelo" => "Ford",
            "tipo" => "camioneta"
        ]);
        DB::table("autos")->insert([
            "marca" => "Suburban",
            "modelo" => "Chevrolet",
            "tipo" => "camioneta"
        ]);
    }
}
