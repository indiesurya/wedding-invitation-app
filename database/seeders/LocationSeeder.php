<?php

namespace Database\Seeders;

use App\Models\Location;

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Location::create([
    		'image' => '1.jpg'
    	]);
    }
}
