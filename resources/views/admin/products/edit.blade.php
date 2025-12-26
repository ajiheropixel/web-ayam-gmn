<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl p-10">
                <h2 class="text-2xl font-extrabold text-slate-800 mb-6">Edit Data: {{ $product->name }}</h2>
                
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT') <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700">Nama Produk</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="mt-1 block w-full border-slate-200 rounded-2xl shadow-sm focus:ring-orange-500 focus:border-orange-500 py-3" required>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700">Harga (Rp)</label>
                            <input type="number" name="price" value="{{ $product->price }}" class="mt-1 block w-full border-slate-200 rounded-2xl shadow-sm focus:ring-orange-500 focus:border-orange-500 py-3" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700">Stok (Ekor)</label>
                        <input type="number" name="stock" value="{{ $product->stock }}" class="mt-1 block w-full border-slate-200 rounded-2xl shadow-sm focus:ring-orange-500 focus:border-orange-500 py-3" required>
                    </div>

                    <div class="flex justify-between items-center pt-4">
                        <a href="{{ route('products.index') }}" class="text-slate-400 font-bold hover:text-slate-600 transition">Batal</a>
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-10 rounded-2xl shadow-lg transition-all duration-300">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>