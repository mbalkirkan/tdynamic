<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'logo', 'logo2','favicon', 'author', 'meta_description', 'meta_keywords', 'facebook', 'twitter', 'instagram', 'linkedin', 'youtube', 'pinterest'
    ];

    protected $appends = ['logo_url', 'favicon_url', 'logo2_url'];


    public function getLogoUrlAttribute()
    {
        return asset('uploads/logo/' . $this->logo);
    }

    public function getLogo2UrlAttribute()
    {
        return asset('uploads/logo/' . $this->logo2);
    }

    public function getFaviconUrlAttribute()
    {
        return asset('uploads/favicon/' . $this->favicon);
    }





}
