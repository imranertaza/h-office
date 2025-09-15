<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    use HasFactory;
    protected $table = 'blog_images';
    protected $guarded = ['blog_image_id'];
    protected $primaryKey = 'blog_image_id';


}
