<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard - Toko Ayam') }}
        </h2>
    </x-slot>

    <div class="py-12 animate__animated animate__fadeIn">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100">
                    <p class="text-sm text-gray-500 font-medium">Total Produk Ayam</p>
                    <h3 class="text-3xl font-black text-orange-600 mt-2">{{ $totalProduk }} Item</h3>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-green-100">
                    <p class="text-sm text-gray-500 font-medium">Pesanan Masuk (WA)</p>
                    <h3 class="text-3xl font-bold text-green-600">3 Hari Ini</h3>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-blue-100">
                    <p class="text-sm text-gray-500 font-medium">Status Website</p>
                    <h3 class="text-3xl font-bold text-blue-600">Online</h3>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl p-8">
                <h3 class="text-lg font-bold mb-4">Aksi Cepat Admin:</h3>
                <div class="flex gap-4">
                    <a href="{{ route('products.create') }}" class="bg-orange-500 text-white px-6 py-3 rounded-2xl font-bold hover:bg-orange-600 transition">
                        + Tambah Stok Ayam
                    </a>
                    <a href="{{ route('admin.settings.index') }}" class="bg-slate-800 text-white px-6 py-3 rounded-2xl font-bold hover:bg-slate-700 transition">
                        ⚙️ Edit Tampilan Web
                    </a>
                    <a href="/" target="_blank" class="bg-slate-800 text-white px-6 py-3 rounded-2xl font-bold hover:bg-slate-900 transition">
                        Lihat Web Utama
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>