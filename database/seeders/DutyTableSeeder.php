<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DutyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('duties')->insert([
            [
                'title' => 'Ihuykatumu',
                'item_level' => 91,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/dungeon.png',
                'hover_image' => 'images/dungeons/Ihuykatumu.png',
            ],
            [
                'title' => 'Worqor Zormor',
                'item_level' => 93,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/dungeon.png',
                'hover_image' => 'images/dungeons/Worqor_Zormor.png',
            ],
            [
                'title' => 'The Skydeep Cenote',
                'item_level' => 95,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/dungeon.png',
                'hover_image' => 'images/dungeons/The_Skydeep_Cenote.png',
            ],
            [
                'title' => 'Vanguard',
                'item_level' => 97,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/dungeon.png',
                'hover_image' => 'images/dungeons/Vanguard.png',
            ],
            [
                'title' => 'Origenics',
                'item_level' => 99,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/dungeon.png',
                'hover_image' => 'images/dungeons/Origenics.png',
            ],
            [
                'title' => 'Alexandria',
                'item_level' => 100,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/dungeon.png',
                'hover_image' => 'images/dungeons/Alexandria.png',
            ],
            [
                'title' => 'Tender Valley',
                'item_level' => 100,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/dungeon.png',
                'hover_image' => 'images/dungeons/Tender_Valley.png',
            ],
            [
                'title' => 'The Strayborough Deadwalk',
                'item_level' => 100,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/dungeon.png',
                'hover_image' => 'images/dungeons/The_Strayborough_Deadwalk.png',
            ],
            [
                'title' => 'Yuweyawata Field Station',
                'item_level' => 100,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/dungeon.png',
                'hover_image' => 'images/dungeons/Yuweyawata_Field_Station.png',
            ],
            [
                'title' => 'Worqor Lar Dor',
                'item_level' => 100,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/trial.png',
                'hover_image' => 'images/trials/ex1.png',
            ],
            [
                'title' => 'Everkeep',
                'item_level' => 100,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/trial.png',
                'hover_image' => 'images/trials/ex2.png',
            ],
            [
                'title' => 'The Interphos',
                'item_level' => 100,
                'difficulty' => 'Normal',
                'status' => 'Passed',
                'thumbnail' => 'images/trial.png',
                'hover_image' => 'images/trials/ex3.png',
            ],
            [
                'title' => 'Worqor Lar Dor',
                'item_level' => 100,
                'difficulty' => 'Extreme',
                'status' => 'Passed',
                'thumbnail' => 'images/trial.png',
                'hover_image' => 'images/trials/ex1.png',
            ],
            [
                'title' => 'Everkeep',
                'item_level' => 100,
                'difficulty' => 'Extreme',
                'status' => 'In Progress',
                'thumbnail' => 'images/trial.png',
                'hover_image' => 'images/trials/ex2.png',
            ],
            [
                'title' => 'The Interphos',
                'item_level' => 100,
                'difficulty' => 'Extreme',
                'status' => 'In Progress',
                'thumbnail' => 'images/trial.png',
                'hover_image' => 'images/trials/ex3.png',
            ],
        ]);
    }
}
