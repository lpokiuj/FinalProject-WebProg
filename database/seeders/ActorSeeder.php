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
                'biography' => "Thomas Stanley Holland (born 1 June 1996) is an English actor. His accolades include a British Academy Film Award, three Saturn Awards, a Guinness World Record and an appearance on the Forbes 30 Under 30 Europe list. Some publications have called him one of the most popular actors of his generation.[a] Holland's career began at age nine when he enrolled in a dancing class, where a choreographer noticed him and arranged for him to audition for a role in Billy Elliot the Musical at London's Victoria Palace Theatre. After two years of training, he secured a supporting part in 2008 and was upgraded to the title role that year, which he played until 2010. Holland made his film debut in the disaster drama The Impossible (2012) as a teenage tourist trapped in a tsunami, for which he received a London Film Critics Circle Award for Young British Performer of the Year. After this, Holland decided to pursue acting as a full-time career, appearing in How I Live Now (2013) and playing historical figures in the film In the Heart of the Sea (2015) and the miniseries Wolf Hall (2015). Holland achieved international recognition playing Spider-Man/Peter Parker in six Marvel Cinematic Universe (MCU) superhero films, beginning with Captain America: Civil War (2016). The following year, Holland received the BAFTA Rising Star Award and later became the youngest actor to play a title role in an MCU film in Spider-Man: Homecoming. The sequels Far From Home (2019) and No Way Home (2021) each grossed more than $1 billion worldwide, and the latter became the highest-grossing film of the year. During this period, Holland gained recognition for playing darker roles in the crime dramas The Devil All the Time (2020) and Cherry (2021). Holland has additionally directed the short film Tweet (2015) and voiced roles in computer-animated features, including Onward (2020).",
                'DOB' => '1996-6-1',
                'POB' => 'United Kingdom',
                'image' => 'storage/image/actor/tom-holland.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Zendaya',
                'gender' => 'Female',
                'biography' => "Zendaya Maree Stoermer Coleman is an American actress and singer. She has received various accolades, including two Primetime Emmy Awards. Time magazine named her one of the 100 most influential people in the world on its annual list in 2022.",
                'DOB' => '1996-9-1',
                'POB' => 'United States',
                'image' => 'storage/image/actor/zendaya.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Benedict Cumberbatch',
                'gender' => 'Male',
                'biography' => "Benedict Timothy Carlton Cumberbatch CBE is an English actor. Known for his work on screen and stage, he has received various accolades, including a British Academy Television Award, a Primetime Emmy Award and a Laurence Olivier Award.",
                'DOB' => '1976-10-19',
                'POB' => 'United Kingdom',
                'image' => 'storage/image/actor/benedict-cumberbatch.jpg',
                'popularity' => 100,
            ],
        ]);
    }
}
