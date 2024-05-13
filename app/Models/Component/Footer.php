<?php

namespace App\Models\Component;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

protected $fillable = [
        'block_1',
        'block_2',
        'block_3',
        'block_4',
    ];

    protected $casts = [
        'block_1' => 'array',
        'block_2' => 'array',
        'block_3' => 'array',
        'block_4' => 'array',
    ];


}
