<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('e_books')->insert([
            ['tittle' => 'How to Report Smurfing in Valorant', 'author' => 'Gyutaro', 'description' => 'valorant have many smurfer and so sad, we in the silver cant win that well in this e-book we can learn how to report smurfing in valorant'],
            ['tittle' => 'How to Be Radint in 1 Night', 'author' => 'Kenji', 'description' => 'valorant have 8 rank and the highest is radiant, so many people want to be radiant so we came out with this e-book to give people lesson to how to be radiant in 1 night'],
            ['tittle' => 'Sage and His House Place', 'author' => 'Avei', 'description' => 'sage is the second agent in valorant which is we call it senior, and so many people call her mommy because she can heal everyone and revive someone with her skill'],
            ['tittle' => 'The Legend of the Botfrag', 'author' => 'Lawzyy', 'description' => 'when someday when 5 people play together the team always topfragger and botfragger. topfragger always have a compliment each round and botfragger always got bullied every round because he cant play and got reported always. and in this book will explained how someone always get botfragger and he want to revenge to be a topfragger.'],
            ['tittle' => 'Reyna the Mysterious Girl', 'author' => 'Shiikato', 'description' => 'Mexican Radiant Reyna takes what she wants when she wants it, no matter who is in her way. She dislikes technology and thrives on the enemy`s misery. Reyna loves to compete with fellow Radiants to see who is the strongest and most powerful. Reyna has a younger sister, however, there is no known information about their current relationship. Reyna also despises Kingdom. Reyna provides the most insight into the conflict between Radiants and Non-Radiants. Her voice lines heavily imply that Radiants are treated poorly by Non-Radiants and she seems to take a very offensive approach to dealing with this conflict. Due to this, not many agents are close with Reyna and often Reyna is encouraged to fight aggressively with no real concern for her safety'],
            ['tittle' => 'Jett the Korean Girl', 'author' => 'Hajime', 'description' => 'Jett, whose real name is Joon-Hee (Hangul: 준희), hails from South Korea, with possible links to the Insa-dong neighborhood in Seoul. As a chef in her early life, she was involved in an incident relating to her wind-like radiant powers.Later on, she would be recruited by the VALORANT Protocol to become its tenth agent.'],
        ]);
    }
}
