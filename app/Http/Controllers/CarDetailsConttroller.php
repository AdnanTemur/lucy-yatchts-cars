<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarDetails;

class CarDetailsController extends Controller
{
    public function create(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'model' => 'required|string',
            'year' => 'required|integer',
            // Add any additional validation rules here
        ]);

        // Create a new car detail entry
        $carDetail = CarDetails::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Car details created successfully'], 201);
    }
}
