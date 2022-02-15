<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            ['role_id' => 1, 'gender_id' => 1, 'first_name' => 'Todoroki', 'middle_name' => 'Hajimemashite', 'last_name' => 'Kintaro', 'email' => 'todorokikintaro@email.com', 'password' => 'todoroki576', 'display_picture_link' => 'img.png']
        ]);
    }
}
