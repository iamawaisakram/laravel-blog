<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // * Don't guard anything and disallow any mass assignment using array
    // * Unless you're in complete control of it.
    protected $guarded = [];

    // * Guard certain properties while allowing mass assignment
    // ! protected $guarded = ['id'];

    // * Specify properties that you want to mass assign
    // ! protected $fillable = ['title', 'excerpt', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
