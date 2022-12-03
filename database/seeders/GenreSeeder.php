<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'genreName' => 'Action'
            ],
            [
                'genreName' => 'Romance'
            ],
            [
                'genreName' => 'Drama'
            ],
            [
                'genreName' => 'Comedy'
            ],
            [
                'genreName' => 'Adventure'
            ],
            [
                'genreName' => 'Fantasy'
            ],
            [
                'genreName' => 'Sci-Fi'
            ],
            [
                'genreName' => 'Thriller'
            ],
            [
                'genreName' => 'Mistery'
            ]
        ]);
    }
}
