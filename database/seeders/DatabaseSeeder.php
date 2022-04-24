<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
    		UserSeeder::class,
            AboutSeeder::class,
            NavbarSeeder::class,
            BannerSeeder::class,
            WeddingSeeder::class,
            CountdownSeeder::class,
            StorySeeder::class,
            EventSeeder::class,
            GallerySeeder::class,
            QuoteSeeder::class,
            LocationSeeder::class,
    	]);
        // \App\Models\User::factory(10)->create();
    }
}
