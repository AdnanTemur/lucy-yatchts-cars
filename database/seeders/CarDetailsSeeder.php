<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarDetails;

class CarDetailsSeeder extends Seeder
{
    public function run()
    {
        CarDetails::create([
            'vehicles_id' => 1, // Assuming the vehicle exists with ID 1
            'body' => 'suv',
            'condition' => 'used',
            'mileage' => '28.000',
            'engine_size' => '4.8',
            'fuel_type' => 'petrol',
            'doors' => '5',
            'cylinders' => '6',
            'transmission' => 'automatic',
            'color' => 'blue',
            'drive_type' => 'front wheel drive',
            'vin' => 'ZN682AVA2P7429564',
        ]);
        CarDetails::create([
            'vehicles_id' => 3, // Assuming the vehicle exists with ID 1
            'body' => 'suv',
            'condition' => 'used',
            'mileage' => '28.000',
            'engine_size' => '4.8',
            'fuel_type' => 'petrol',
            'doors' => '5',
            'cylinders' => '6',
            'transmission' => 'automatic',
            'color' => 'blue',
            'drive_type' => 'front wheel drive',
            'vin' => 'ZN682AVA2P7429564',
        ]);

        // Add more car details as needed
    }
}
