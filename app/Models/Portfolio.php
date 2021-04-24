<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function Category()
    {
    	return $this->hasOne('App\Models\PortfolioCategory', 'category_id','category_id');
    }
}
