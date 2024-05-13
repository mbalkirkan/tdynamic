<?php

namespace Database\Seeders;

use App\Models\Page\Index;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndexPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $block1 = [
            [
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla ut turpis non nunc vestibulum luctus. Nulla facilisi. Duis sit amet luctus dui. In hac habitasse platea dictumst. Integer eget dui at lorem iaculis ultricies. Integer nec turpis at tellus.',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla ut turpis non nunc vestibulum luctus. Nulla facilisi. Duis sit amet luctus dui. In hac habitasse platea dictumst. Integer eget dui at lorem iaculis ultricies. Integer nec turpis at tellus.',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla ut turpis non nunc vestibulum luctus. Nulla facilisi. Duis sit amet luctus dui. In hac habitasse platea dictumst. Integer eget dui at lorem iaculis ultricies. Integer nec turpis at tellus.',
            ]
        ];
        $block2_settings = [
            'image' => 'block2.jpg'
        ];
        $block3 = [
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla ut turpis non nunc vestibulum luctus. Nulla facilisi. Duis sit amet luctus dui. In hac habitasse platea dictumst. Integer eget dui at lorem iaculis ultricies. Integer nec turpis at tellus.',
            'image' => 'block3.jpg',
            'button1_text' => 'Lorem ipsum',
            'button1_url' => '#',
            'button2_text' => 'Lorem ipsum',
            'button2_url' => '#',
        ];

        $block4_settings = [
            'image' => 'block4.jpg',
            'title' => 'Lorem ipsum dolor sit amet',
            'subtitle' => 'Lorem ipsum dolor sit amet',
        ];

        $block5 = [
            'image' => 'block5.jpg',
            'counter_1' => '123',
            'counter_2' => '123',
            'counter_3' => '123',
            'counter_4' => '123',
            'counter_1_text' => 'Lorem ipsum',
            'counter_2_text' => 'Lorem ipsum',
            'counter_3_text' => 'Lorem ipsum',
            'counter_4_text' => 'Lorem ipsum',
        ];

        $block6 = [
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla ut turpis non nunc vestibulum luctus. Nulla facilisi. Duis sit amet luctus dui. In hac habitasse platea dictumst. Integer eget dui at lorem iaculis ultricies. Integer nec turpis at tellus.',
            'image' => 'block6.jpg',
            'button1_text' => 'Lorem ipsum',
            'button1_url' => '#',
            'button2_text' => 'Lorem ipsum',
            'button2_url' => '#',
        ];

        Index::create([
            'block_1' => $block1,
            'block_2_settings' => $block2_settings,
            'block_3' => $block3,
            'block_4_settings' => $block4_settings,
            'block_5' => $block5,
            'block_6' => $block6,
        ]);

    }
}
