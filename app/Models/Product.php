<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_id','parent_id', 'title','meta_title', 'slug', 'image', 'summery','content',
    ];
}
