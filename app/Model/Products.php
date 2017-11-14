<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\Resource;

class Products extends Model
{
    public function reviews(){
        return $this->hasMany('App\Model\Reviews');
    }
}
