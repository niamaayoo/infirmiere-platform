<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['name'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}