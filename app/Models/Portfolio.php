<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolio';
    protected $primaryKey = 'portfolio_id';
    public $timestamps = false; // Disable auto timestamps
    protected $guarded = ['portfolio_id'];
    const IMAGE_PATH = '/assets/uploads/portfolio/';
    public function images()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'portfolio_id')->where('featured', '0')->orderBy('sort_order', 'asc');
    }
    public function featuredImage()
    {
        return $this->hasOne(PortfolioImage::class, 'portfolio_id', 'portfolio_id')
            ->where('featured', '1');
        // return $this->hasOne(PortfolioImage::class);
    }
    public function sliderImages()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'portfolio_id')
            ->where('featured', '2')->orderBy('sort_order', 'asc');
        // return $this->hasOne(PortfolioImage::class);
    }
    public function relatedImage()
    {
        return $this->hasOne(PortfolioImage::class, 'portfolio_id', 'portfolio_id')
            ->where('featured', '3');
        // return $this->hasOne(PortfolioImage::class);
    }

    public function categories()
    {
        return $this->belongsToMany(
            PortfolioCategory::class,
            'portfolio_category_map',
            'portfolio_id',
            'category_id'
        );
    }
    public function relatedPortfolios()
    {
        return Portfolio::with('categories','featuredImage','relatedImage') // eager-load categories
            ->whereHas('categories', function ($query) {
                $query->whereIn('portfolio_category_map.category_id', $this->categories->pluck('category_id'));
            })
            ->where('portfolio_id', '!=', $this->portfolio_id)->take(3)->get();
    }
}
