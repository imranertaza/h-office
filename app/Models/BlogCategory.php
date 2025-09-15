<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $table = 'blog_category';
    protected $guarded = ['cat_id'];
    protected $primaryKey = 'cat_id';
    public $timestamps = false;

    
}
