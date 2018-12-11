<?php

namespace Oneshoe\ShoesDemo\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];

    public function shoes()
    {
        return $this->hasMany('App\Shoe');
    }
}
