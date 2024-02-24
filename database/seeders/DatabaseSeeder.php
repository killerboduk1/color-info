<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $colorArray = [
            [
                'name' => 'red',
                'hex_code' => '#FF0000',
                'rgb_code' => 'rgb(255, 0, 0)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'blue',
                'hex_code' => '#0000FF',
                'rgb_code' => 'rgb(0, 0, 255)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'green',
                'hex_code' => '#008000',
                'rgb_code' => 'rgb(0, 128, 0)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'yellow',
                'hex_code' => '#FFFF00',
                'rgb_code' => 'rgb(255, 255, 0)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'orange',
                'hex_code' => '#FFA500',
                'rgb_code' => 'rgb(255, 165, 0)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'purple',
                'hex_code' => '#800080',
                'rgb_code' => 'rgb(128, 0, 128)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'black',
                'hex_code' => '#000000',
                'rgb_code' => 'rgb(0, 0, 0)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'white',
                'hex_code' => '#FFFFFF',
                'rgb_code' => 'rgb(255, 255, 255)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'pink',
                'hex_code' => '#FFC0CB',
                'rgb_code' => 'rgb(255, 192, 203)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'brown',
                'hex_code' => '#A52A2A',
                'rgb_code' => 'rgb(165, 42, 42)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'gray',
                'hex_code' => '#808080',
                'rgb_code' => 'rgb(128, 128, 128)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'cyan',
                'hex_code' => '#00FFFF',
                'rgb_code' => 'rgb(0, 255, 255)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'magenta',
                'hex_code' => '#FF00FF',
                'rgb_code' => 'rgb(255, 0, 255)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'teal',
                'hex_code' => '#008080',
                'rgb_code' => 'rgb(0, 128, 128)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'lavender',
                'hex_code' => '#E6E6FA',
                'rgb_code' => 'rgb(230, 230, 250)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'maroon',
                'hex_code' => '#800000',
                'rgb_code' => 'rgb(128, 0, 0)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'olive',
                'hex_code' => '#808000',
                'rgb_code' => 'rgb(128, 128, 0)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'salmon',
                'hex_code' => '#FA8072',
                'rgb_code' => 'rgb(250, 128, 114)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'turquoise',
                'hex_code' => '#40E0D0',
                'rgb_code' => 'rgb(64, 224, 208)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'gold',
                'hex_code' => '#FFD700',
                'rgb_code' => 'rgb(255, 215, 0)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'violet',
                'hex_code' => '#EE82EE',
                'rgb_code' => 'rgb(238, 130, 238)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'indigo',
                'hex_code' => '#4B0082',
                'rgb_code' => 'rgb(75, 0, 130)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'beige',
                'hex_code' => '#F5F5DC',
                'rgb_code' => 'rgb(245, 245, 220)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'azure',
                'hex_code' => '#F0FFFF',
                'rgb_code' => 'rgb(240, 255, 255)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'mint',
                'hex_code' => '#98FF98',
                'rgb_code' => 'rgb(152, 255, 152)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($colorArray as $color) {
            DB::table('colors')->insert($color);
        }
    }
}
