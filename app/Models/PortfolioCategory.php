<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;
    protected $table = 'portfolio_category';
    protected $primaryKey = 'category_id';

    public function portfolios()
    {
        return $this->belongsToMany(
            Portfolio::class,
            'portfolio_category_map',
            'category_id',
            'portfolio_id'
        );
    }

}
