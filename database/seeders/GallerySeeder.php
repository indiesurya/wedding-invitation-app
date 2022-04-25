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
    			'photo' => '1.jpg'
    		],
    		[
    			'photo' => '2.jpg'
    		],
    		[
    			'photo' => '3.jpg'
    		],
    		[
    			'photo' => '4.jpg'
    		],
    		[
    			'photo' => '5.jpg'
    		],
    		[
    			'photo' => '6.jpg'
    		],
    		[
    			'photo' => '7.jpg'
    		],
			[
				'photo' => '8.jpg'
			],
			[
				'photo' => '9.jpg'
			],
    	];

    	Gallery::insert($gallery);
    }
}
