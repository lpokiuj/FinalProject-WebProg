<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            [
                'title' => 'Spider-man: No Way Home',
                'description' => 'this is spiderman',
                'director' => 'Jon Watts',
                'releaseDate' => '2021-12-15',
                'thumbnail' => 'images/movie/spiderman-no-way-home.jpg',
                'background' => 'images/movie/spiderman-no-way-home.jpg',
            ],
            [
                'title' => 'Spider-man: No Way Home',
                'description' => 'this is spiderman',
                'director' => 'Jon Watts',
                'releaseDate' => '2021-12-15',
                'thumbnail' => 'images/movie/spiderman-no-way-home.jpg',
                'background' => 'images/movie/spiderman-no-way-home.jpg',
            ],
            [
                'title' => 'Spider-man: No Way Home',
                'description' => 'this is spiderman',
                'director' => 'Jon Watts',
                'releaseDate' => '2021-12-15',
                'thumbnail' => 'images/movie/spiderman-no-way-home.jpg',
                'background' => 'images/movie/spiderman-no-way-home.jpg',
            ],
            [
                'title' => 'Spider-man: No Way Home',
                'description' => 'this is spiderman',
                'director' => 'Jon Watts',
                'releaseDate' => '2021-12-15',
                'thumbnail' => 'images/movie/spiderman-no-way-home.jpg',
                'background' => 'images/movie/spiderman-no-way-home.jpg',
            ],
            [
                'title' => 'Spider-man: No Way Home',
                'description' => 'this is spiderman',
                'director' => 'Jon Watts',
                'releaseDate' => '2021-12-15',
                'thumbnail' => 'images/movie/spiderman-no-way-home.jpg',
                'background' => 'images/movie/spiderman-no-way-home.jpg',
            ]
                
        ]);
    }
}
