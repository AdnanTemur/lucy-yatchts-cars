<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $fillable = ['category_id', 'name', 'brand', 'model', 'description', 'price', 'type', 'year'];

    public function carDetails()
    {
        return $this->hasOne(CarDetails::class);
    }

    public function yachtDetails()
    {
        return $this->hasOne(YachtDetails::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
