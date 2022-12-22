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
            ],
            [
                'charName' => 'Gwen Stacy',
                'movieID' => 1,
                'actorID' => 2
            ],
            [
                'charName' => 'Dr. Strange',
                'movieID' => 1,
                'actorID' => 3
            ],
            [
                'charName' => 'Jake Sully',
                'movieID' => 2,
                'actorID' => 4
            ],
            [
                'charName' => 'Neytiri',
                'movieID' => 2,
                'actorID' => 5
            ],
            [
                'charName' => 'Kiri',
                'movieID' => 2,
                'actorID' => 6
            ],
            [
                'charName' => 'Sophie',
                'movieID' => 3,
                'actorID' => 7
            ],
            [
                'charName' => 'Agatha',
                'movieID' => 3,
                'actorID' => 8
            ],
            [
                'charName' => 'Lady Lesso',
                'movieID' => 3,
                'actorID' => 9
            ],
            [
                'charName' => 'Black Adam',
                'movieID' => 4,
                'actorID' => 10
            ],
            [
                'charName' => 'Superman',
                'movieID' => 4,
                'actorID' => 11
            ],
            [
                'charName' => 'Iris',
                'movieID' => 4,
                'actorID' => 12
            ],
            [
                'charName' => 'Anne Boleyn',
                'movieID' => 5,
                'actorID' => 16
            ],
            [
                'charName' => 'King Henry VIII',
                'movieID' => 5,
                'actorID' => 17
            ],
            [
                'charName' => 'Laura Weaver',
                'movieID' => 6,
                'actorID' => 13
            ],
            [
                'charName' => 'Joel',
                'movieID' => 6,
                'actorID' => 14
            ],
            [
                'charName' => 'Trevor',
                'movieID' => 6,
                'actorID' => 15
            ],
            
        ]);
    }
}
