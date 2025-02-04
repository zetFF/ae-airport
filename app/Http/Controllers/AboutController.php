<?php

namespace App\Http\Controllers;

use App\Models\PromoCode;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Mengambil semua data PromoCode
        $promoCodes = PromoCode::all();

        // Mengirimkan data ke view
        return view('about', compact('promoCodes'));
    }
}

