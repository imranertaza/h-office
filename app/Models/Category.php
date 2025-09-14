<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="category";

    public function portfolios()
{
    return $this->belongsToMany(
        Portfolio::class,
        'portfolio_category_map',
        'category_id',        // Foreign key on the pivot table pointing to PortfolioCategory
        'portfolio_id'        // Foreign key on the pivot table pointing to Portfolio
    );}
}
