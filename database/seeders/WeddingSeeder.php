<?php

namespace Database\Seeders;

use App\Models\Wedding;

use Illuminate\Database\Seeder;

class WeddingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Wedding::create([
    		'date' => '2020-06-02',
    		'time' => '16:00',
    		'location' => 'Jalan Pulau Supiori Gang 2 No 1,Br. Sebelanga, Dauh Puri Kauh, Denpaasar Barat, Denpasar, Bali',
    		'iframe' => '<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=jalan%20pulau%20supiori%20gang%202%20no%201%20&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>'
    	]);
    }
}
