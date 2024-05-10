<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicles;
use App\Models\CarDetails;
use App\Models\YachtDetails;
use App\Http\Requests\VehicleRequest;
use App\Models\Category;
use PhpParser\Node\Stmt\TryCatch;

class VehiclesController extends Controller
{

    public function index()
    {
        $vehicles = Vehicles::with('carDetails', 'yachtDetails', 'category')->get();
        $categories = Category::all();

        $flattenedVehicles = $vehicles->map(function ($vehicle) {
            $flatVehicle = $vehicle->toArray();
            $flatVehicle['car_details'] = $vehicle->carDetails ? $vehicle->carDetails->only(['body', 'condition', 'mileage', 'engine_size', 'fuel_type', 'doors', 'cylinders', 'transmission', 'color', 'drive_type', 'vin']) : null;
            $flatVehicle['yacht_details'] = $vehicle->yachtDetails ? $vehicle->yachtDetails->only(['manufacturer', 'length', 'engine', 'fuel_tank', 'captain_crew', 'guests_capacity', 'sleeps', 'bathrooms_toilets']) : null;
            $flatVehicle['category'] = $vehicle->category ? $vehicle->category->only('name') : null;
            return $flatVehicle;
        });

        // dd($flattenedVehicles);
        return view('test', compact('flattenedVehicles', 'categories'));
    }
    public function create(VehicleRequest $request)
    {
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'brand' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'type' => 'required|in:car,yacht',
                'category_id' => 'required|exists:categories,id',
                'model' => $request->model,
                'year' => $request->year,
                // Add any additional validation rules here
            ]);

            // Create a new vehicle entry
            $vehicle = Vehicles::create($validatedData);
            // Create car details or yacht details based on the type of vehicle
            if ($validatedData['type'] === 'car') {
                $carDetails = CarDetails::create([
                    'vehicles_id' => $vehicle->id,
                    // Add any additional car details here
                ]);
            } else {
                $yachtDetails = YachtDetails::create([
                    'vehicles_id' => $vehicle->id,
                    'model' => $request->model,
                    'manufacturer' => $request->manufacturer,
                    'length' => $request->length_in_feet,
                    // Add any additional yacht details here
                ]);
            }

            // Return a response indicating success
            return redirect()->back()->with(['message' => 'Vehicle created successfully'], 200);
        } catch (\Error $er) {
            return redirect()->back()->with(['error' => $er], 500);
        }
    }
}
