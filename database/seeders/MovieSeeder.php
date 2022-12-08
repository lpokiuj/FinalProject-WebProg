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
                'description' => 'After Quentin Beck frames Peter Parker for his murder and reveals Parker identity as Spider-Man,[N 1] Parker, his girlfriend Michelle "MJ" Jones-Watson, best friend Ned Leeds, and aunt May are interrogated by the Department of Damage Control. Lawyer Matt Murdock gets Parker charges dropped, but the group grapples with negative publicity. After Parker, MJ, and Ned MIT applications are rejected, Parker goes to the New York Sanctum to ask Stephen Strange for help. Strange casts a spell that would make everyone forget Parker is Spider-Man, but it is corrupted when Parker repeatedly requests alterations to let his loved ones retain their memories, ultimately causing Strange to contain the spell to stop it.',
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
            ],
            [
                'title' => 'Le fishe',
                'description' => 'this is le fishe',
                'director' => 'Le fishe',
                'releaseDate' => '2021-12-14',
                'thumbnail' => 'images/movie/spiderman-no-way-home.jpg',
                'background' => 'images/movie/spiderman-no-way-home.jpg',
            ],
        ]);
    }
}
