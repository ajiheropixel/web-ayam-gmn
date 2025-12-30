<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Manajemen Stok Ayam') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-xl font-black text-slate-800">Daftar Inventaris</h3>
                    <p class="text-slate-500 text-sm">Kelola semua stok ayam dan harga dalam satu panel.</p>
                </div>
                <a href="{{ route('products.create') }}" class="bg-orange-500 text-white px-6 py-3 rounded-2xl font-bold hover:bg-slate-900 transition-all shadow-lg shadow-orange-200 flex items-center gap-2">
                    <span class="text-xl">+</span> Tambah Ayam Baru
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-[40px]">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50 border-b border-slate-100">
                                <th class="p-6 text-xs uppercase tracking-[0.2em] font-black text-slate-400">Info Produk</th>
                                <th class="p-6 text-xs uppercase tracking-[0.2em] font-black text-slate-400 text-center">Harga Satuan</th>
                                <th class="p-6 text-xs uppercase tracking-[0.2em] font-black text-slate-400 text-center">Status Stok</th>
                                <th class="p-6 text-xs uppercase tracking-[0.2em] font-black text-slate-400 text-right">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach ($products as $product)
                            <tr class="hover:bg-slate-50/80 transition-colors group">
                                <td class="p-6">
                                    <div class="flex items-center gap-5">
                                        <div class="w-16 h-16 rounded-2xl overflow-hidden bg-slate-100 border border-slate-200 flex-shrink-0">
                                            @if($product->image)
                                                <img src="{{ asset('images/' . $product->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-2xl">🍗</div>
                                            @endif
                                        </div>
                                        <div>
                                            <h4 class="font-black text-slate-800 text-lg leading-tight uppercase">{{ $product->name }}</h4>
                                            <p class="text-slate-400 text-xs font-bold mt-1 uppercase tracking-widest">ID: #AYM-0{{ $product->id }}</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="p-6 text-center">
                                    <span class="text-orange-600 font-black text-lg">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </span>
                                </td>

                                <td class="p-6 text-center">
                                    @if($product->stock <= 5 && $product->stock > 0)
                                        <span class="bg-amber-100 text-amber-600 px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-tighter">
                                            ⚠️ Stok Kritis: {{ $product->stock }}
                                        </span>
                                    @elseif($product->stock > 5)
                                        <span class="bg-emerald-100 text-emerald-600 px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-tighter">
                                            ✅ Aman: {{ $product->stock }}
                                        </span>
                                    @else
                                        <span class="bg-red-100 text-red-600 px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-tighter">
                                            🚫 Stok Habis
                                        </span>
                                    @endif
                                </td>

                                <td class="p-6 text-right">
                                    <div class="flex justify-end gap-3">
                                        <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white w-10 h-10 rounded-xl flex items-center justify-center transition-all shadow-sm" title="Edit Data">
                                            📝
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                            @csrf @method('DELETE')
                                            <button class="bg-red-50 text-red-600 hover:bg-red-600 hover:text-white w-10 h-10 rounded-xl flex items-center justify-center transition-all shadow-sm" title="Hapus Produk">
                                                🗑️
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                @if($products->isEmpty())
                <div class="p-20 text-center">
                    <div class="text-6xl mb-4">📦</div>
                    <h3 class="text-slate-400 font-bold uppercase tracking-widest text-sm">Belum Ada Data Ayam</h3>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>