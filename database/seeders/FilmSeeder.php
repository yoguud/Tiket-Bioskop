<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Film::create([
            'title' => 'Breaking Bad',
            'description' => 'Breaking Bad is an American neo-Western crime drama television series created by Vince Gilligan for AMC. The show follows Walter White (Bryan Cranston), a high school chemistry teacher in Albuquerque, New Mexico, who is diagnosed with inoperable stage-three lung cancer.',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMzU5ZGYzNmQtMTdhYy00OGRiLTg0NmQtYjVjNzliZTg1ZGE4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'genre' => 'Crime, Drama, Thriller',
            'release_date' => '2008-01-20',
            'duration' => 49,
        ]);
    }
}
