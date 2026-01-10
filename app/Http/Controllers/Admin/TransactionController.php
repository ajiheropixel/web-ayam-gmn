<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        // Cek apakah stok cukup sebelum transaksi
        if ($product->stock < $request->quantity) {
            return back()->with('error', 'Stok tidak mencukupi!');
        }

        // 1. Simpan Transaksi
        $transaction = Transaction::create([
            'invoice_number' => 'INV-' . time(),
            'customer_name'  => $request->customer_name,
            'product_id'     => $request->product_id,
            'quantity'       => $request->quantity,
            'total_price'    => $product->price * $request->quantity,
            'status'         => 'Lunas',
        ]);

        // 2. LOGIKA PENGURANGAN STOK OTOMATIS
        $product->decrement('stock', $request->quantity);

        return redirect()->back()->with('success', 'Pesanan dicatat! Stok ' . $product->name . ' otomatis berkurang.');
    }
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);

        // Kembalikan stok produk otomatis
        $product = Product::find($transaction->product_id);
        if ($product) {
            $product->increment('stock', $transaction->quantity);
        }

        $transaction->delete();

        return redirect()->back()->with('success', 'Transaksi dihapus dan stok telah dikembalikan!');
    }
}
