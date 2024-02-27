<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $kursi = Kurss::all();
        return response()->json($kursi);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nosaukums' => 'required|string|max:255',
            'paskaidrojums' => 'required|string',
            'banera_adrese' => 'nullable|url',
            'cilveku_skaits' => 'required|integer|min:0',
        ]);

        $kurss = Kurss::create($validatedData);

        return response()->json($kurss, 201);
    }
}
