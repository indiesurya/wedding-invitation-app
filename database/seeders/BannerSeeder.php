<?php

namespace Database\Seeders;

use App\Models\Banner;

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Banner::create([
    		'text' => 'Undangan Pernikahan',
            'image' => '14.jpg'
    	]);
    }
}
