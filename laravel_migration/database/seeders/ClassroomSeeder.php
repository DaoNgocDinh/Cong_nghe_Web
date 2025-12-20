<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{

    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
        DB::table('classrooms')->insert([
            'room_number' => 'A10' . $i,
            'capacity' => rand(30, 70),
            'building' => 'Tòa nhà A'
        ]);
    }
    }
}
