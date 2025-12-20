<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
        DB::table('schedules')->insert([
            'classroom_id' => rand(1, 5),
            'course_name' => 'Môn ' . $i,
            'day_of_week' => 'Thứ ' . rand(2, 7),
            'time_slot' => '08:00 - 10:00'
        ]);
    }
    }
}
