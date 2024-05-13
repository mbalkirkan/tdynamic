<?php

namespace App\Models\Component;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $table = 'headers';
    protected $fillable = [
        'title', 'sub_title', 'icon',
    ];

    // get right icon url
    public function getIconUrlAttribute()
    {
        return asset('uploads/header/' . $this->icon);
    }
}
