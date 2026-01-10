<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk memperbaiki error tersebut
    protected $fillable = [
        'invoice_number',
        'customer_name',
        'product_id',
        'quantity',
        'total_price',
        'status'
    ];

    // Relasi ke produk agar bisa menampilkan nama ayam di riwayat
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
