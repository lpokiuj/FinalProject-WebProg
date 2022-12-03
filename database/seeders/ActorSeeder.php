<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('actors')->insert([
            [
                'name' => 'Tom Holland',
                'gender' => 'Male',
                'biography' => "Thomas Stanley Holland is an English actor. His accolades include a British Academy Film Award, three Saturn Awards, a Guinness World Record and an appearance on the Forbes 30 Under 30 Europe list. Some publications have called him one of the most popular actors of his generation.",
                'DOB' => '2022-12-14',
                'POB' => 'asdfasdf',
                'image' => 'storage/image/actor/tom-holland.jpg',
                'popularity' => 23,
            ]
        ]);
    }
}
