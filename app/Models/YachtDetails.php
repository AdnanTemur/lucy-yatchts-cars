<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YachtDetails extends Model
{
    protected $fillable = ['vehicles_id', 'manufacturer', 'length', 'engine', 'fuel_tank', 'captain_crew', 'guests_capacity', 'sleeps', 'bathrooms_toilets'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicles::class, 'vehicles_id');
    }
}
