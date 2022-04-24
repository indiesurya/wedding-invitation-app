<?php

namespace Database\Seeders;

use App\Models\Countdown;

use Illuminate\Database\Seeder;

class CountdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Countdown::create([
    		'text' => 'Hingga Tiba Saatnya',
            'image' => 'event.jpg'
    	]);
    }
}
