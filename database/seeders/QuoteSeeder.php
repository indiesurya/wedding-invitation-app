<?php

namespace Database\Seeders;

use App\Models\Quote;

use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Quote::create([
    		'text' => 'Jangan Lupa Datang Boy',
            'footer' => 'Sakinah Mawadah Warohmah',
    		'image' => 'event2.jpg'
    	]);
    }
}
