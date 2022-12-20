<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'username' => 'emmanuel',
                'email' => 'oki@binus.ac.id',
                'password' => bcrypt('password'),
                'isAdmin' => false,
                'image' => 'test',
            ],
        ]);
    }
}
