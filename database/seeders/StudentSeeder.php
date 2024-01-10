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
        $students = [
            [
                'id'=>1,
                'name'=>'Minnatur Rahman',
                'email'=>'minnatur@gmail.com',
                'age'=>31,
                'city'=>'Gaibandha'
            ],
            [
                'id'=>2,
                'name'=>'Mi Rahman',
                'email'=>'mi@gmail.com',
                'age'=>21,
                'city'=>'Gai'
            ],
            [
                'id'=>3,
                'name'=>'Sojib Rahman',
                'email'=>'sojib@gmail.com',
                'age'=>30,
                'city'=>'khulna'
            ],
            [
                'id'=>2,
                'name'=>'Mamun Rahman',
                'email'=>'mamun@gmail.com',
                'age'=>23,
                'city'=>'Rangpur'
            ]
        ];


        student::insert($students);

    }
}
