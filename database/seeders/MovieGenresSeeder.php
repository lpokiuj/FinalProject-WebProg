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
                'movieID' => 1,
                'genreID' => 7,
            ],
        ]);
    }
}
