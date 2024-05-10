<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YachtDetails;

class YachtDetailsController extends Controller
{
    public function create(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'mode' => 'required|string',
            'manufacturer' => 'required|string',
            'length_in_feet' => 'required|numeric',
            // Add any additional validation rules here
        ]);

        // Create a new yacht detail entry
        $yachtDetail = YachtDetails::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Yacht details created successfully'], 201);
    }
}
