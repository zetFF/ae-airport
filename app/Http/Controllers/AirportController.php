<?php

namespace App\Http\Controllers;

use App\Models\Airport;

class AirportController extends Controller
{
    public function index()
    {
        // Mengambil semua data airport
        $airports = Airport::all();

        // Mengirimkan data ke view
        return view('airport', compact('airports'));
    }
}
