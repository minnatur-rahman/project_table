<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       student::created([
                'id'=>1,
                'name'=>'Minnatur Rahman',
                'email'=>'minnatur@gmail.com',

       ]);
    }
}
