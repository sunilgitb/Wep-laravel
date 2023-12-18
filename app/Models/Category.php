<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'cat_name', 'cat_img', 'cat_description', 'user_id'
    ];


    public function posts()
    {
        return $this->hasMany(Post::class, 'cat_id');
    }
}
