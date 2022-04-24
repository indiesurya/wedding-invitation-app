<?php

namespace Database\Seeders;

use App\Models\About;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	About::create([
    		'man_name' => 'Samuel Zylgywn',
            'man_nickname' => 'Samuel',
    		'man_father' => 'Robert Zylgywn',
    		'man_about' => 'Seorang pemuda yang haus akan kekayaan, cinta perdamaian, dan penuh kasih sayang',
    		'man_photo' => 'man.jpg',
    		'woman_name' => 'Citra Skolastika',
            'woman_nickname' => 'Citra',
    		'woman_father' => 'Fitroh Skolastika',
    		'woman_about' => 'Wanita yang selalu berpegang teguh pada iman, menjaga aurat adalah hal yang paling utama dalam hidupnya',
    		'woman_photo' => 'woman.jpg'
    	]);
    }
}
