<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;
    protected $table='portfolio_image';
    protected $primaryKey = 'portfolio_image_id';
    protected $guarded=['portfolio_image_id'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id', 'portfolio_id');
    }

}
