<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WatchlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('watchlists')->insert([
            [
                'status' => 'Planned',
                'movieID' => 1,
                'userID' => 1,
            ],
            [
                'status' => 'Finished',
                'movieID' => 2,
                'userID' => 1,
            ],
            [
                'status' => 'Watching',
                'movieID' => 3,
                'userID' => 1 
            ]
                
        ]);
    }
}
