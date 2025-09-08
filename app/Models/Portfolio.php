<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table='portfolio';
    protected $guarded=['id'];

    public function images()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'portfolio_id');
    }

}
