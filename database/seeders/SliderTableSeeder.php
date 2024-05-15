<?php

namespace Database\Seeders;

use App\Models\Component\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'title' => 'Lorem ipsum dolor sit amet',
            'sub_title' => 'Lorem ipsum dolor sit amet',
            'image' => 'https://picsum.photos/1951/1246',
            'order' => 1,
        ]);

        Slider::create([
            'title' => 'Lorem ipsum dolor sit amet',
            'sub_title' => 'Lorem ipsum dolor sit amet',
            'image' => 'https://picsum.photos/1951/1246',
            'order' => 2,
        ]);
    }
}
