<?php

namespace Database\Seeders;

use App\Models\Navbar;

use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Navbar::create([
    		'about' => 'Tentang Kami',
    		'story' => 'Cerita Kami',
    		'event' => 'Acara',
    		'gallery' => 'Galeri',
    		'location' => 'Lokasi',
    		'rsvp' => 'RSVP'
    	]);
    }
}
