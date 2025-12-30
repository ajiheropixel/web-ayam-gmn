<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    // WAJIB: Daftarkan 'key' dan 'value' agar bisa disimpan dari Dashboard
    protected $fillable = ['key', 'value'];
}
