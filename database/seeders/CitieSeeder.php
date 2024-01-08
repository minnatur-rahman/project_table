<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/cities.json');
        $cities = collect(json_decode($json));

        $cities->each(function($cities){

         student::create([

             'city' => $cities->city


         ]);

        });
    }
}
