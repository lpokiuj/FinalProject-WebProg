<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genre_movie')->insert([
            [
                'movieID' => 1,
                'genreID' => 1,
            ],
            [
                'movieID' => 1,
                'genreID' => 4,
            ],
            [
                'movieID' => 2,
                'genreID' => 3,
            ],
            [
                'movieID' => 3,
                'genreID' => 1,
            ],
            [
                'movieID' => 4,
                'genreID' => 5,
            ],
            [
                'movieID' => 5,
                'genreID' => 2,
            ],
            [
                'movieID' => 3,
                'genreID' => 1,
            ],
            [
                'movieID' => 4,
                'genreID' => 7,
            ],
            [
                'movieID' => 5,
                'genreID' => 3,
            ],
            [
                'movieID' => 6,
                'genreID' => 1,
            ],
            [
                'movieID' => 6,
                'genreID' => 8,
            ],
            [
                'movieID' => 6,
                'genreID' => 9,
            ],
            [
                'movieID' => 2,
                'genreID' => 5,
            ],
            [
                'movieID' => 3,
                'genreID' => 7,
            ],
        ]);
    }
}
