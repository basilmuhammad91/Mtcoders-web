<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $primaryKey = 'sub_service_id';

    public function service()
    {	
    	return $this->hasOne('App\Models\Service','service_id','service_id');
    }
}