<?php

namespace Database\Seeders;

use App\Models\Watchlist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            GenreSeeder::class,
            MovieSeeder::class,
            ActorSeeder::class,
            MovieGenresSeeder::class,
            CharacterSeeder::class,
            UserSeeder::class,
            WatchlistSeeder::class,
        ]);

    }
}
