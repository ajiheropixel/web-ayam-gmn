<x-app-layout>
    <div class="py-12 animate__animated animate__fadeIn">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-slate-800">Manajemen Stok Ayam</h2>
                    <p class="text-slate-500 text-sm">Kelola semua produk ayam yang tampil di website utama.</p>
                </div>
                <a href="{{ route('products.create') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-2xl shadow-lg shadow-orange-200 transition-all flex items-center gap-2">
                    <span>+</span> Tambah Produk
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-[30px] border border-slate-100">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 border-b border-slate-100">
                        <tr>
                            <th class="px-6 py-4 text-sm font-bold text-slate-600 uppercase">Produk</th>
                            <th class="px-6 py-4 text-sm font-bold text-slate-600 uppercase text-center">Harga</th>
                            <th class="px-6 py-4 text-sm font-bold text-slate-600 uppercase text-center">Stok</th>
                            <th class="px-6 py-4 text-sm font-bold text-slate-600 uppercase text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        @foreach ($products as $product)
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-16 h-16 rounded-2xl overflow-hidden bg-slate-100">
                                        @if($product->image)
                                            <img src="{{ asset('images/' . $product->image) }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="flex items-center justify-center h-full text-slate-300">🍗</div>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="font-bold text-slate-800">{{ $product->name }}</div>
                                        <div class="text-xs text-slate-400">ID: #AYM-{{ $product->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center font-semibold text-slate-700">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs font-bold">
                                    {{ $product->stock }} ekor
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('products.edit', $product->id) }}" class="p-2 text-blue-500 hover:bg-blue-50 rounded-lg transition">
                                        📝
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition">
                                            🗑️
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @if($products->isEmpty())
                    <div class="text-center py-20">
                        <p class="text-slate-400">Belum ada produk ayam yang diinput.</p>
                    </div>
                @endif
            </div>

        </div>
    </div>
    @if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 2000,
        customClass: {
            popup: 'rounded-[30px]',
        }
    });
</script>
@endif
</x-app-layout>