<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|unique:categories',
            // Add any additional validation rules here
        ]);

        // Create a new category entry
        $category = Category::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Category created successfully'], 201);
    }
}
