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
    	Story::create(
            [
                'title' => 'Pandangan Pertama',
                'date' => '2019-03-30',
                'content' => 'perkenalan indah dibelakang panggung yang tak sengaja',
                'photo' => '10.jpg'
            ],
            [
                'title' => 'Foto Pertama',
                'date' => '2019-05-02',
                'content' => 'Foto pertama berdua masih malu-malu',
                'photo' => '11.jpg'
            ],
            [
                'title' => 'Resmi Pacaran',
                'date' => '2019-06-02',
                'content' => 'Resmi memulai kisah sampai saat ini dan selamanya',
                'photo' => '12.jpg'
            ],

    );
    }
}
