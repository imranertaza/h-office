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

    public function images()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'portfolio_id')->where('featured', '0');
    }
    public function featuredImage()
    {
        return $this->hasOne(PortfolioImage::class, 'portfolio_id', 'portfolio_id')
            ->where('featured', 1);
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
            'portfolio_id',     // FK on pivot pointing to this model
            'category_id'       // FK on pivot pointing to PortfolioCategory
        );
    }
    public function relatedPortfolios()
    {
        return Portfolio::with('categories','featuredImage','relatedImage') // eager-load categories
            ->whereHas('categories', function ($query) {
                $query->whereIn('portfolio_category_map.category_id', $this->categories->pluck('category_id'));
            })
            ->where('portfolio_id', '!=', $this->portfolio_id)->paginate(3);
    }
}
