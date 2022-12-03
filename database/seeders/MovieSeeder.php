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
                'director' => "Tom Hankins",
                'releaseDate' => '2022-12-14',
                'thumbnail' => 'sdfsdf',
                'background' => 'sdfdsf',
            ]
        ]);
    }
}
