<?php

namespace Database\Seeders;

use App\Models\Story;

use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Story::create([
    		'title' => 'Pandangan Pertama',
    		'date' => '2010-05-10',
    		'content' => 'Suara lembutnya, harum wangi rambutnya, membuat pandangan pertamaku padanya tak tergoyahkan',
    		'photo' => 'wedding.jpg'
    	]);
    }
}
