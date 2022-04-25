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
    		'text' => 'Jangan Lupa Datang & Mohon Doa Restu',
            'footer' => 'Dumogi sang awiwaha setata bagia nyantos riwekasan',
    		'image' => 'event2.jpg'
    	]);
    }
}
