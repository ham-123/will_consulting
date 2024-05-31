<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'image'];

    public function saveImage($image)
    {
        $path = $image->store('article', 'public');
        $this->image = $path;
        $this->save();
    }
 
}

