<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        // Mengambil data setting untuk ditampilkan di form
        $settings = Setting::pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        // Proses semua upload file secara otomatis jika ada
        $fileFields = ['hero_image', 'about_image', 'footer_logo'];
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $fileName = $field . '_' . time() . '.' . $request->$field->extension();
                $request->$field->move(public_path('images'), $fileName);
                $data[$field] = $fileName;
            }
        }

        // Simpan semua teks ke database
        foreach ($data as $key => $value) {
            if ($value !== null) {
                \App\Models\Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        }

        return redirect()->back()->with('success', 'Seluruh bagian website berhasil diperbarui!');
    }
}
