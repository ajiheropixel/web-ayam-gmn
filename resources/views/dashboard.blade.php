<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard - Toko Ayam') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div
                    class="mb-6 p-4 bg-emerald-50 text-emerald-600 rounded-2xl border border-emerald-100 font-bold animate__animated animate__fadeInDown">
                    ✅ {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div
                    class="mb-6 p-4 bg-rose-50 text-rose-600 rounded-2xl border border-rose-100 font-bold animate__animated animate__shakeX">
                    ❌ {{ session('error') }}
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="bg-white p-8 rounded-[35px] shadow-sm border border-orange-100">
                    <p class="text-sm text-slate-400 font-black uppercase tracking-widest">Total Produk Ayam</p>
                    <h3 class="text-4xl font-black text-orange-600 mt-2">{{ $totalProduk }} <span
                            class="text-lg text-slate-300 italic">Item</span></h3>
                </div>

                <div class="bg-white p-8 rounded-[35px] shadow-sm border border-emerald-100">
                    <p class="text-sm text-slate-400 font-black uppercase tracking-widest">Pesanan Masuk</p>
                    <h3 class="text-4xl font-black text-emerald-600 mt-2">
                        {{ \App\Models\Transaction::whereDate('created_at', today())->count() }}
                        <span class="text-lg text-slate-300 italic">Hari Ini</span>
                    </h3>
                </div>

                <div class="bg-white p-8 rounded-[35px] shadow-sm border border-blue-100">
                    <p class="text-sm text-slate-400 font-black uppercase tracking-widest">Status Website</p>
                    <h3 class="text-4xl font-black text-blue-600 mt-2">Online</h3>
                </div>
            </div>

            <div class="bg-white p-8 rounded-[40px] shadow-sm border border-slate-100 mb-10">
                <h3 class="text-lg font-black text-slate-800 mb-6 italic">Aksi Cepat Admin:</h3>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('products.create') }}"
                        class="bg-orange-500 text-white px-8 py-4 rounded-2xl font-black hover:bg-orange-600 transition-all shadow-lg shadow-orange-100">
                        + Tambah Stok Ayam
                    </a>
                    <a href="{{ route('admin.settings.index') }}"
                        class="bg-slate-800 text-white px-8 py-4 rounded-2xl font-black hover:bg-slate-700 transition-all">
                        ⚙️ Edit Tampilan Web
                    </a>
                    <a href="{{ url('/') }}" target="_blank"
                        class="bg-emerald-500 text-white px-8 py-4 rounded-2xl font-black hover:bg-emerald-600 transition-all shadow-lg shadow-emerald-100 flex items-center gap-2">
                        <span>🌐</span> Lihat Halaman Depan
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-[40px] shadow-sm p-10 border border-slate-100 mb-10">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-black text-slate-800">Catat Pesanan & Potong Stok</h3>
                        <p class="text-slate-500 font-medium text-sm">Input data hasil negosiasi WhatsApp untuk update
                            stok otomatis.</p>
                    </div>
                </div>

                <form action="{{ route('admin.transactions.store') }}" method="POST"
                    class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">
                    @csrf
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-2 tracking-widest">Nama
                            Pembeli</label>
                        <input type="text" name="customer_name" required placeholder="Contoh: Pak Amar"
                            class="w-full rounded-2xl border-slate-100 bg-slate-50 focus:ring-emerald-500 py-3">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-2 tracking-widest">Pilih
                            Produk</label>
                        <select name="product_id" required
                            class="w-full rounded-2xl border-slate-100 bg-slate-50 focus:ring-emerald-500 py-3">
                            <option value="">-- Pilih Ayam --</option>
                            @foreach (\App\Models\Product::where('stock', '>', 0)->get() as $p)
                                <option value="{{ $p->id }}">{{ $p->name }} (Sisa: {{ $p->stock }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-2 tracking-widest">Jumlah
                            (Ekor)</label>
                        <input type="number" name="quantity" required min="1" placeholder="0"
                            class="w-full rounded-2xl border-slate-100 bg-slate-50 focus:ring-emerald-500 py-3">
                    </div>
                    <button type="submit"
                        class="w-full bg-emerald-600 text-white px-6 py-4 rounded-2xl font-black hover:bg-slate-900 transition-all shadow-xl shadow-emerald-100 text-xs uppercase tracking-widest">
                        Simpan Pesanan
                    </button>
                </form>
            </div>

            <div class="bg-white rounded-[40px] shadow-sm overflow-hidden border border-slate-100">
                <div class="p-8 border-b border-slate-50 flex justify-between items-center">
                    <h3 class="text-xl font-black text-slate-800 italic">Riwayat Penjualan Terakhir</h3>
                    <span
                        class="bg-emerald-50 text-emerald-600 px-4 py-2 rounded-xl text-[10px] font-black tracking-widest uppercase border border-emerald-100">Live
                        Database</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50/50 text-slate-400 text-[10px] font-black uppercase tracking-widest">
                            <tr>
                                <th class="px-10 py-5">Invoice</th>
                                <th class="px-10 py-5">Pembeli</th>
                                <th class="px-10 py-5">Item</th>
                                <th class="px-10 py-5 text-right">Total</th>
                                <th class="px-10 py-5 text-center">Status</th>
                                <th class="px-10 py-5 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @forelse(\App\Models\Transaction::with('product')->latest()->take(5)->get() as $trx)
                                <tr class="hover:bg-slate-50/30 transition-all group">
                                    <td class="px-10 py-6 font-bold text-slate-400 text-xs">{{ $trx->invoice_number }}
                                    </td>
                                    <td class="px-10 py-6 font-black text-slate-800">{{ $trx->customer_name }}</td>
                                    <td class="px-10 py-6 text-slate-600 text-sm">
                                        {{ $trx->product->name }} <span
                                            class="text-[10px] bg-slate-100 px-2 py-0.5 rounded-lg ml-1 font-black">{{ $trx->quantity }}
                                            Ekor</span>
                                    </td>
                                    <td class="px-10 py-6 font-black text-slate-900 text-right">Rp
                                        {{ number_format($trx->total_price, 0, ',', '.') }}</td>
                                    <td class="px-10 py-6 text-center">
                                        <span
                                            class="bg-emerald-50 text-emerald-600 px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest border border-emerald-100">LUNAS</span>
                                    </td>
                                    <td class="px-10 py-6 text-center">
                                        <form action="{{ route('admin.transactions.destroy', $trx->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Hapus data? Stok akan kembali otomatis.')">
                                            @csrf @method('DELETE')
                                            <button type="submit"
                                                class="text-rose-400 hover:text-rose-600 transition-colors">
                                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6"
                                        class="px-10 py-16 text-center text-slate-300 italic font-medium">Belum ada
                                        transaksi.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
