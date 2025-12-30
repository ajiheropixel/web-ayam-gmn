<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product; // Pastikan model Product diimpor
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil jumlah total ayam secara real-time dari database
        $totalProduk = Product::count();
        
        // Anda bisa menambahkan logika pesanan di sini nanti
        $pesananHariIni = 3; 

        return view('dashboard', compact('totalProduk', 'pesananHariIni'));
    }
}