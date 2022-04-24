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
    		'date' => '2020-02-15',
    		'time' => '09:00',
    		'location' => 'Jln Raya Kandangwangi, Banjanregara, Wanadid',
    		'iframe' => '<iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31654.53404735642!2d109.640139999646!3d-7.374424653472108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11ceeee84634773c!2sSDN%203%20KANDANGWANGI!5e0!3m2!1sid!2sid!4v1610443711548!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>'
    	]);
    }
}
