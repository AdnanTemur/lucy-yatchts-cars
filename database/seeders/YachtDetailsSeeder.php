<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\YachtDetails;

class YachtDetailsSeeder extends Seeder
{
    public function run()
    {
        YachtDetails::create([
            'vehicles_id' => 2, // Assuming the vehicle exists with ID 2
            'manufacturer' => 'Yacht Manufacturer',
            'length' => 100,
            'engine' => '2x0hp',
            'fuel_tank' => '2023',
            'captain_crew' => 'Included',
            'guests_capacity' => 35,
            'sleeps' => 0,
            'bathrooms_toilets' => 3,
        ]);

        // Add more yacht details as needed
    }
}
