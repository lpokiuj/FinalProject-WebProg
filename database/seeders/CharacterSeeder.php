<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('characters')->insert([
            [
                'charName' => 'Peter Parker',
                'movieID' => 1,
                'actorID' => 1
            ]
        ]);
    }
}
