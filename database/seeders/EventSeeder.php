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
    	Event::create([
    		'name' => 'Akad Nikah',
    		'location' => 'Mall Jakabaring',
    		'date' => '2021-05-10',
    		'photo' => 'event.jpg'
    	]);
    }
}
