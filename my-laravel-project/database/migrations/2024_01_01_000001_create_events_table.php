<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => 'Birthday Party',
                'description' => 'Celebrate your special day with a fantastic birthday party event.',
                'event_date' => now()->addDays(10),
                'location' => 'Party Hall',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wedding',
                'description' => 'Make your wedding memorable with beautiful arrangements and more.',
                'event_date' => now()->addDays(20),
                'location' => 'Grand Ballroom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Debut',
                'description' => 'Celebrate the milestone of your debut with style and joy.',
                'event_date' => now()->addDays(30),
                'location' => 'Event Center',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}