<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class ServiceController extends Controller
{
    public function index()
    {
        // Mengambil semua transaksi
        $transactions = Transaction::all();

        // Mengirim data transaksi ke view
        return view('services', compact('transactions'));
    }
}
