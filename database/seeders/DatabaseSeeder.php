<?php

namespace Database\Seeders;

use App\Models\CarDetails;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\VehiclesSeeder;
use Database\Seeders\YachtDetailsSeeder;
use Database\Seeders\CarDetailsSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
        ]);

        $this->call([
            CategorySeeder::class,
            VehiclesSeeder::class,
            CarDetailsSeeder::class,
            YachtDetailsSeeder::class,
            // Add other seeders here
        ]);
    }
}
