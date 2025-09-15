<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $guarded = ['blog_id'];
    protected $primaryKey = 'blog_id';
    const CREATED_AT = 'createdDtm';
    const UPDATED_AT = 'updatedDtm';


    public function featuredImage()
    {
        return $this->hasOne(BlogImage::class, 'blog_id', 'blog_id')
            ->where('featured', '1');
        // return $this->hasOne(BlogImage::class);
    }
    public function sliderImages()
    {
        
        return $this->hasMany(BlogImage::class, 'blog_id', 'blog_id')
            ->where('featured', '2')->orderBy('sort_order', 'asc');
        // return $this->hasOne(BlogImage::class);
    }
    public function categories()
    {
        return $this->belongsToMany(
            BlogCategory::class,
            'blog_category_maps',
            'blog_id',     // FK on pivot pointing to this model
            'cat_id'       // FK on pivot pointing to PortfolioCategory
        )->where('status',1);
    }
}
