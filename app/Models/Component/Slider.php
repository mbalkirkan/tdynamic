<?php

namespace App\Models\Component;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'sub_title', 'image', 'order'
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return asset('uploads/slider/' . $this->image);
    }


}
