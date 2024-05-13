<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            \App\Models\System::create([
                'title' => 'MBALKIRKAN SOFTWARE',
                'phone' => '+90 555 555 55 55',
                'email' => 'admin@admin.com',
                'working_hours' => 'Mon - Fri: 9:00 - 17:00',
                'logo' => 'logo.png',
                'logo2' => 'logo2.png',
                'favicon' => 'favicon.png',
                'author' => 'MBALKIRKAN',
                'meta_description' => 'Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.',
                'meta_keywords' => 'laravel, php, framework, web, artisans',
                'facebook' => 'https://www.facebook.com/laravelphp',
                'twitter' => 'https://www.twitter.com/laravelphp',
                'instagram' => 'https://www.instagram.com/laravelphp',
                'linkedin' => 'https://www.linkedin.com/company/laravel',
                'youtube' => 'https://www.youtube.com/laravelphp',
                'pinterest' => 'https://www.pinterest.com/laravelphp',
            ]);

    }
}
