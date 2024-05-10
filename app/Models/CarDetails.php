<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarDetails extends Model
{
    protected $fillable = ['vehicles_id', 'body', 'condition', 'mileage', 'engine_size', 'fuel_type', 'doors', 'cylinders', 'transmission', 'color', 'drive_type', 'vin'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicles::class, 'vehicles_id');
    }
}
