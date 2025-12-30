<x-app-layout>
    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-[40px] p-8 md:p-12 border border-slate-100">
                
                <div class="mb-10">
                    <h2 class="text-3xl font-black text-slate-800 tracking-tight">Tambah Stok Ayam Baru</h2>
                    <p class="text-slate-500 mt-2">Pastikan data harga dan stok sudah benar sebelum disimpan.</p>
                </div>

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Nama Ayam</label>
                            <input type="text" name="name" placeholder="Misal: Ayam Kampung Super" 
                                class="w-full px-6 py-4 bg-slate-50 border-none rounded-3xl focus:ring-2 focus:ring-orange-500 transition-all placeholder:text-slate-400" required>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Harga (Rp)</label>
                            <input type="number" name="price" placeholder="Misal: 150000" 
                                class="w-full px-6 py-4 bg-slate-50 border-none rounded-3xl focus:ring-2 focus:ring-orange-500 transition-all placeholder:text-slate-400" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Stok (Ekor)</label>
                            <input type="number" name="stock" placeholder="Misal: 50" 
                                class="w-full px-6 py-4 bg-slate-50 border-none rounded-3xl focus:ring-2 focus:ring-orange-500 transition-all placeholder:text-slate-400" required>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Foto Produk</label>
                            <div class="relative group">
                                <input type="file" name="image" 
                                    class="w-full px-6 py-3.5 bg-orange-50 text-orange-700 border-2 border-dashed border-orange-200 rounded-3xl cursor-pointer file:hidden hover:bg-orange-100 transition-all">
                                <div class="absolute inset-y-0 right-6 flex items-center pointer-events-none text-orange-500 font-bold text-sm">
                                    Pilih Gambar 📸
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-4 pt-6">
                        <a href="{{ route('products.index') }}" class="px-8 py-4 text-slate-400 font-bold hover:text-slate-600 transition">Batal</a>
                        <button type="submit" class="bg-slate-900 hover:bg-orange-600 text-white font-bold py-4 px-12 rounded-[24px] shadow-lg shadow-slate-200 hover:shadow-orange-200 transition-all duration-300 transform hover:-translate-y-1">
                            Simpan Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>