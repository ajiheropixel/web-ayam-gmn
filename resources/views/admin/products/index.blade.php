<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Stok Ayam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-3xl p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-slate-700">Produk Tersedia</h3>
                    <a href="{{ route('products.create') }}" class="bg-orange-500 text-white px-4 py-2 rounded-xl font-bold hover:bg-orange-600 transition">
                        + Tambah Ayam
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($products as $product)
                    <div class="border border-slate-100 rounded-3xl p-5 hover:shadow-lg transition duration-300">
                        <div class="w-full h-40 bg-slate-100 rounded-2xl mb-4 overflow-hidden flex items-center justify-center">
    @if($product->image)
        <img src="{{ asset('images/' . $product->image) }}" class="w-full h-full object-cover">
    @else
        <span class="text-4xl">🍗</span>
    @endif
</div>
                       <h3 class="font-bold text-slate-800 text-lg leading-tight mb-1">{{ $product->name }}</h3>
                <p class="text-orange-600 font-black text-xl mb-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Stok: {{ $product->stock }} Ekor</p>
                        
                        <div class="flex gap-2">
                            <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 font-bold text-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="text-red-500 font-bold text-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>