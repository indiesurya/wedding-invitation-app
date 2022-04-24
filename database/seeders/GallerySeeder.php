<?php

namespace Database\Seeders;

use App\Models\Gallery;

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$gallery = [
    		[
    			'photo' => 'event.jpg'
    		],
    		[
    			'photo' => 'event1.jpg'
    		],
    		[
    			'photo' => 'event2.jpg'
    		],
    		[
    			'photo' => 'man.jpg'
    		],
    		[
    			'photo' => 'ring.jpg'
    		],
    		[
    			'photo' => 'wedding.jpg'
    		],
    		[
    			'photo' => 'woman.jpg'
    		],
    	];

    	Gallery::insert($gallery);
    }
}
