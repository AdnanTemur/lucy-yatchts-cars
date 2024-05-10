<?php

namespace Database\Seeders;

use App\Models\Vehicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicles::create([
            'category_id' => 1, // Assuming the category exists with ID 1
            'name' => 'Volvo XC90',
            'brand' => 'Toyota',
            'model' => 'Supra',
            'description' => 'Toyota Camry Hybrid',
            'price' => 35000,
            'type' => 'car',
            'year' => '2009',
        ]);
        Vehicles::create([
            'category_id' => 2, // Assuming the category exists with ID 1
            'name' => 'Skyra',
            'brand' => 'Sealine',
            'model' => 'Luxury',
            'description' => 'Luxury Hybrid',
            'price' => 35000,
            'type' => 'yacht',
            'year' => '2010',
        ]);
        Vehicles::create([
            'category_id' => 1, // Assuming the category exists with ID 1
            'name' => 'Range Rover',
            'brand' => 'Toyota',
            'model' => 'Defender 110',
            'description' => 'Defender 110',
            'price' => 35000,
            'type' => 'car',
            'year' => '2023',
        ]);
    }
}
