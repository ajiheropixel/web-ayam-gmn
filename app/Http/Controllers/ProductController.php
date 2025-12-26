<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // PERBAIKAN: Isi slug dan description agar tidak error lagi
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name), // Mengisi slug otomatis
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => 'Ayam segar kualitas premium.', // Mengisi deskripsi otomatis
            'image' => $imageName,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk Berhasil Ditambah!');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->only(['name', 'price', 'stock']);
        $data['slug'] = Str::slug($request->name);
        $data['description'] = 'Ayam segar kualitas premium.'; // Pastikan description terisi saat update

        if ($request->hasFile('image')) {
            if ($product->image && File::exists(public_path('images/' . $product->image))) {
                File::delete(public_path('images/' . $product->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Product $product)
    {
        if ($product->image && File::exists(public_path('images/' . $product->image))) {
            File::delete(public_path('images/' . $product->image));
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
