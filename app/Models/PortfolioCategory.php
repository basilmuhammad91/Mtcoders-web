<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;

class PortfolioCategory extends Model
{
    use HasFactory;
    public $timestamps = false;

   
    public function portfolio()
    {
        return $this->hasMany('App\Models\Portfolio','portfolio_id','portfolio_id');
    }
}
