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
    		'man_name' => 'I Putu Indie Surya Jayadi',
            'man_nickname' => 'Indie',
    		'man_father' => 'I Wayan Wijaya',
    		'man_about' => 'Seorang pemuda yang tampan',
    		'man_photo' => 'man.jpg',
    		'woman_name' => 'Ni Ketut Nitya Cahyani,S.Farm., Apt.',
            'woman_nickname' => 'Nitya',
    		'woman_father' => 'I Ketut Wisna',
    		'woman_about' => 'Wanita yang cantik dan suka ngambul',
    		'woman_photo' => 'woman.jpg'
    	]);
    }
}
