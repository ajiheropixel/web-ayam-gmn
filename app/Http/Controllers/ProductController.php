<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil data dan mengirim ke view
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        // Validasi agar tidak ada data kosong yang masuk ke database
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Simpan data ke database
        Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => 'Ayam segar berkualitas.',
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => null, // Kita set null dulu agar tidak error gambar
        ]);

        return redirect()->route('products.index')->with('success', 'Data Berhasil Disimpan!');
    }
}