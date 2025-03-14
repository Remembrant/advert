<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marker;

class MarkerController extends Controller
{
    // Fetch all markers
    public function index()
    {
        $markers = Marker::all(); // Fetch all markers from DB
    return view('dashboard', compact('markers')); // Pass markers to the view
    }
}