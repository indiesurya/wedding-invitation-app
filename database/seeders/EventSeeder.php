<?php

namespace Database\Seeders;

use App\Models\Event;

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Event::create(
            [
                'name' => 'Ngidih',
                'location' => 'Rumah Nitya',
                'date' => '2025-06-02',
                'photo' => 'event.jpg'
            ],
            [
                'name' => 'Mesakaban',
                'location' => 'Rumah Indie',
                'date' => '2025-06-02',
                'photo' => 'event.jpg'
            ],
            [
                'name' => 'Resepsi',
                'location' => 'Rumah Indie',
                'date' => '2025-06-02',
                'photo' => 'event.jpg'
            ]
    );
    }
}
