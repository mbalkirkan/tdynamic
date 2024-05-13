<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Component\Header::create([
            'title' => 'Call Now +1-234-2566',
            'sub_title' => 'Have Any Questions?',
            'icon' => 'contact.png',
        ]);
    }
}
