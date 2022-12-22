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
                'biography' => "Thomas Stanley Holland is an English actor. His accolades include a British Academy Film Award, three Saturn Awards, a Guinness World Record and an appearance on the Forbes 30 Under 30 Europe list. Some publications have called him one of the most popular actors of his generation.[a] Holland's career began at age nine when he enrolled in a dancing class, where a choreographer noticed him and arranged for him to audition for a role in Billy Elliot the Musical at London's Victoria Palace Theatre. After two years of training, he secured a supporting part in 2008 and was upgraded to the title role that year, which he played until 2010. Holland made his film debut in the disaster drama The Impossible (2012) as a teenage tourist trapped in a tsunami, for which he received a London Film Critics Circle Award for Young British Performer of the Year. After this, Holland decided to pursue acting as a full-time career, appearing in How I Live Now (2013) and playing historical figures in the film In the Heart of the Sea (2015) and the miniseries Wolf Hall (2015). Holland achieved international recognition playing Spider-Man/Peter Parker in six Marvel Cinematic Universe (MCU) superhero films, beginning with Captain America: Civil War (2016). The following year, Holland received the BAFTA Rising Star Award and later became the youngest actor to play a title role in an MCU film in Spider-Man: Homecoming. The sequels Far From Home (2019) and No Way Home (2021) each grossed more than $1 billion worldwide, and the latter became the highest-grossing film of the year. During this period, Holland gained recognition for playing darker roles in the crime dramas The Devil All the Time (2020) and Cherry (2021). Holland has additionally directed the short film Tweet (2015) and voiced roles in computer-animated features, including Onward (2020).",
                'DOB' => '1996-6-1',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/Tom_Holland_by_Gage_Skidmore.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Zendaya',
                'gender' => 'Female',
                'biography' => "Zendaya is an American actress and singer born in Oakland, California. She began her career appearing as a child model working for Macy's, Mervyns and Old Navy. She was a backup dancer before gaining prominence for her role as Rocky Blue on the Disney Channel sitcom Shake It Up (2010) which also includes Bella Thorne, Kenton Duty and Roshon Fegan. Zendaya was a contestant on the sixteenth season of the competition series Dancing with the Stars. She went on to produce and star as K.C. Cooper in the Disney Channel sitcom K.C. Undercover (2015) She made her film breakthrough in 2017, starring as Michelle \"MJ\" Jones in the Marvel Cinematic Universe superhero film Spider-Man: Homecoming (2017) and as Anne Wheeler in the musical drama film The Greatest Showman (2017) alongside actors such as Tom Holland, Hugh Jackman and Zac Efron. Besides acting, singing and dancing she is an ambassador for Convoy of Hope. She has written a book, launched her own clothing line (Daya by Zendaya) and proved herself to be a great role model for young girls all around the world.",
                'DOB' => '1996-9-1',
                'POB' => 'United States',
                'image' => 'images/actor/Zendaya_-_2019_by_Glenn_Francis.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Benedict Cumberbatch',
                'gender' => 'Male',
                'biography' => "Benedict Timothy Carlton Cumberbatch CBE is an English actor. Known for his work on screen and stage, he has received various accolades, including a British Academy Television Award, a Primetime Emmy Award and a Laurence Olivier Award. He has also been nominated for two Academy Awards, two British Academy Film Awards and four Golden Globe Awards. In 2014, Time magazine named him one of the 100 most influential people in the world, and in 2015, he was appointed a CBE at Buckingham Palace for services to the performing arts and to charity. Cumberbatch studied drama at the Victoria University of Manchester and obtained a Master of Arts in classical acting at the London Academy of Music and Dramatic Art. He began acting in Shakespearean theatre productions before making his West End debut in Richard Eyre's revival of Hedda Gabler in 2005. Since then, he has starred in Royal National Theatre productions of After the Dance (2010) and Frankenstein (2011), winning the Laurence Olivier Award for Best Actor for the latter. In 2015, he played the title role in Hamlet at the Barbican Theatre.",
                'DOB' => '1976-10-19',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Sam Worthington',
                'gender' => 'Male',
                'biography' => "Samuel Henry John Worthington is an Australian actor. He is best known for playing Jake Sully in Avatar, Marcus Wright in Terminator Salvation, and Perseus in Clash of the Titans and its sequel Wrath of the Titans.",
                'DOB' => '1976-08-02',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/blKKsHlJIL9PmUQZB8f3YmMBW5Y.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Zoe Saldaña',
                'gender' => 'Female',
                'biography' => "Zoë Yadira Saldaña-Perego is an American actress. Known primarily for her work in science fiction franchises, she has appeared in three of the five highest-grossing films of all time, a feat not achieved by any other performer.",
                'DOB' => '1976-10-19',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/194024_v9_bb.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Sigourney Weaver',
                'gender' => 'Female',
                'biography' => "Sigourney Weaver is an American actress best known for her role as Ellen Ripley in the Alien film series, a role for which she has received worldwide recognition. She is also known for her roles in the Ghostbusters films, Gorillas in the Mist, The Ice Storm, Working Girl, Holes, and Avatar.",
                'DOB' => '1976-10-19',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/1898_v9_bc.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Sophia Anne Caruso',
                'gender' => 'Female',
                'biography' => "Sophia Anne Caruso is an American actress and singer best known for originating the role of Lydia Deetz in the Broadway musical Beetlejuice, a role for which she won a Theatre World Award. She also portrays Sophie in The School for Good and Evil, in 2022.",
                'DOB' => '1976-10-19',
                'POB' => 'United States',
                'image' => 'images/actor/MV5BNmY5MjM1YzMtZWVjYS00OTY0LWE1YzgtZjRmODBiNDYzNDU5XkEyXkFqcGdeQXVyMjQyMjMwODM@._V1_.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Sofia Wylie',
                'gender' => 'Female',
                'biography' => "Sofia Christine Wylie is an American actress, singer, and dancer. She began her career in dance before gaining prominence through her role as Buffy Driscoll on the Disney Channel comedy-drama series Andi Mack.",
                'DOB' => '1976-10-19',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/1041797_v9_bb.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Charlize Theron',
                'gender' => 'Female',
                'biography' => "Charlize Theron is a South African and American actress and producer. One of the world's highest-paid actresses, she is the recipient of various accolades, including an Academy Award and a Golden Globe Award. In 2016, Time named her one of the 100 most influential people in the world.",
                'DOB' => '1976-10-19',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/68310_v9_bb.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Dwayne Johnson',
                'gender' => 'Male',
                'biography' => "Dwayne Douglas Johnson, also known by his ring name The Rock, is an American actor and former professional wrestler.",
                'DOB' => '1976-10-19',
                'POB' => 'United States',
                'image' => 'images/actor/Dwayne_Johnson_2014_(cropped).jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Henry Cavill',
                'gender' => 'Male',
                'biography' => "Henry William Dalgliesh Cavill is a British actor. He is known for his portrayal of Charles Brandon in Showtime's The Tudors, DC Comics character Superman in the DC Extended Universe, Geralt of Rivia in the Netflix fantasy series The Witcher, and Sherlock Holmes in the Netflix film Enola Holmes and its 2022 sequel.",
                'DOB' => '1976-10-19',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/Henry_Cavill_Wondercon_2011.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Sarah Shahi',
                'gender' => 'Female',
                'biography' => "Aahoo Jahansouzshahi, known professionally as Sarah Shahi, is an American actress and former model. She played Carmen on The L Word in 2005, Kate Reed in the USA Network legal drama Fairly Legal, and Sameen Shaw on the CBS crime drama Person of Interest. She has also appeared in the main role Det.",
                'DOB' => '1976-10-19',
                'POB' => 'United States',
                'image' => 'images/actor/Sarah-Shahi.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Caitlin Stasey',
                'gender' => 'Female',
                'biography' => "Caitlin Jean Stasey is an Australian actress and singer. She is known for her role as Rachel Kinski in Neighbours.",
                'DOB' => '1976-10-19',
                'POB' => 'Australia',
                'image' => 'images/actor/MV5BZTEzZDRiNjItMTlkMS00N2QxLThiNzYtZjVjYTU5MDEyMWEzXkEyXkFqcGdeQXVyMjIxOTc0Njg@._V1_.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Kyle Gallner',
                'gender' => 'Male',
                'biography' => "Kyle Steven Gallner is an American actor. He is known for his portrayal of Cassidy \"Beaver\" Casablancas in the television series Veronica Mars, superhero Bart Allen in the drama series Smallville and Reed Garrett in the police series CSI: NY, and a lead role as Hasil Farrell in the drama series Outsiders.",
                'DOB' => '1976-10-19',
                'POB' => 'United States',
                'image' => 'images/actor/264616_v9_bc.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Jessie T. Usher',
                'gender' => 'Male',
                'biography' => "Jessie T. Usher Jr. is an American actor. Known for playing Lyle on the Cartoon Network series Level Up, Cam Calloway on the Starz television series Survivor's Remorse, and Reggie Franklin / A-Train in the Amazon Prime Video series The Boys.",
                'DOB' => '1976-10-19',
                'POB' => 'United States',
                'image' => 'images/actor/MV5BNmRmN2FlN2EtODc1Zi00MWM5LThmNDYtOWM5MjdlZGE3NWFlXkEyXkFqcGdeQXVyNTIzMDExMjA@._V1_.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Amy James-Kelly',
                'gender' => 'Female',
                'biography' => "Amy James-Kelly is a British actress. She gained prominence through her role as Maddie Heath in the ITV soap opera Coronation Street. She has since starred in the Netflix series Safe and the BBC One drama Three Families.",
                'DOB' => '1976-10-19',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/Amy-James-Kelly.jpg',
                'popularity' => 100,
            ],
            [
                'name' => 'Max Parker',
                'gender' => 'Male',
                'biography' => "Max Parker is a British actor who was born and raised in Manchester and trained at Arts Educational Schools in London. He is best known for playing Mikhail",
                'DOB' => '1976-10-19',
                'POB' => 'United Kingdom',
                'image' => 'images/actor/1250-x-1000.jpg',
                'popularity' => 100,
            ],
        ]);
    }
}
