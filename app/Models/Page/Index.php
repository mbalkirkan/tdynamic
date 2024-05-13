<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Index extends Model
{
    use HasFactory;


    protected $fillable = [
        'block_1',
        'block_2_settings',
        'block_3',
        'block_4_settings',
        'block_5',
        'block_6',
    ];

protected $casts = [
        'block_1' => 'array',
        'block_2_settings' => 'array',
        'block_3' => 'array',
        'block_4_settings' => 'array',
        'block_5' => 'array',
        'block_6' => 'array',
    ];



}
