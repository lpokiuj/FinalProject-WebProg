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
                'title' => 'Avatar: The Way of Water',
                'description' => 'Jake Sully and Ney\'tiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.',
                'director' => 'James Cameron',
                'releaseDate' => '2022-12-14',
                'thumbnail' => 'images/movie/Avatar_The_Way_of_Water_poster.jpg',
                'background' => 'images/movie/11144-avatar-the-way-of-water-kapan-tayang-disney.jpg',
            ],
            [
                'title' => 'The School for Good and Evil',
                'description' => 'Best friends Sophie and Agatha find themselves on opposing sides of an epic battle when they\'re swept away into an enchanted school where aspiring heroes and villains are trained to protect the balance between good and evil.',
                'director' => 'Paul Feig',
                'releaseDate' => '2022-10-18',
                'thumbnail' => 'images/movie/015475600_1666240103-MV5BNzM1ODI4Y2UtMGYxMS00OTUxLWE4NzItNjgxMTM2NzRjZThkXkEyXkFqcGdeQXVyMTA1OTcyNDQ4._V1_.jpg',
                'background' => 'images/movie/AAAABaa3bNbHMTLN9kF7NGZRbxjW1VRtAqBBsZR6pPnBOuzxva4WGuKt3-WwjXYAH3fkNt2_FHGQS31ToN_BQs10wlSGiVgPy3-cn17q.jpg',
            ],
            [
                'title' => 'Black Adam',   
                'description' => 'In ancient Kahndaq, Teth Adam was bestowed the almighty powers of the gods. After using these powers for vengeance, he was imprisoned, becoming Black Adam. Nearly 5,000 years have passed, and Black Adam has gone from man to myth to legend. Now free, his unique form of justice, born out of rage, is challenged by modern-day heroes who form the Justice Society: Hawkman, Dr. Fate, Atom Smasher and Cyclone.',
                'director' => 'Jaume Collet-Serra',
                'releaseDate' => '2022-10-19',
                'thumbnail' => 'images/movie/MV5BYzZkOGUwMzMtMTgyNS00YjFlLTg5NzYtZTE3Y2E5YTA5NWIyXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg',
                'background' => 'images/movie/black-adam-3-1666152002.jpeg',
            ],
            [
                'title' => 'Blood, Sex & Royalty',
                'description' => 'British historical documentary will be available on Netflix on November 23, 2022. The drama is combined with documentary-style commentary to investigate the inner lives of two of history\'s most controversial monarchs, Queen Anne Boleyn and King Henry VIII.',
                'director' => 'James Bryce',
                'releaseDate' => '2022-11-23',
                'thumbnail' => 'images/movie/Blood_Sex_Royalty_TV_Series-221080514-mmed.jpg',
                'background' => 'images/movie/AAAABWB2EU_coUF4ZnJUbK30rEu4Kcce2ERGhzZkVte_9jPTCo6usioO0ouuIBfghLHnsjeSI04tqLLorocjlvz538ihWxr9uZlaChKF.jpg',
            ],
            [
                'title' => 'Smile',
                'description' => 'After witnessing a bizarre, traumatic incident involving a patient, Dr. Rose Cotter starts experiencing frightening occurrences that she can\'t explain. As an overwhelming terror begins taking over her life, Rose must confront her troubling past in order to survive and escape her horrifying new reality.',
                'director' => 'Parker Finn',
                'releaseDate' => '2021-09-28',
                'thumbnail' => 'images/movie/official-smile-movie-poster-from-paramount-pictures.jpeg',
                'background' => 'images/movie/fotojet---2022-10-05t161125.145.jpg',
            ]
        ]);
    }
}
