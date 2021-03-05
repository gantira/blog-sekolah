<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $appends = ['gallery_image'];

    protected $fillable = [
        'image_type',
        'image',
    ];

    public function getGalleryImageAttribute()
    {
        return Storage::url($this->image);
    }

    public function imageable()
    {
        return $this->morphTo();
    }

}
