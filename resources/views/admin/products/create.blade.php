<x-app-layout>
    <div class="py-12 animate__animated animate__fadeIn">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl p-10">
                <h2 class="text-2xl font-extrabold text-slate-800 mb-6">Tambah Stok Ayam Baru</h2>
                
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700">Nama Produk</label>
                            <input type="text" name="name" class="mt-1 block w-full border-slate-200 rounded-2xl shadow-sm focus:ring-orange-500 focus:border-orange-500 py-3">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700">Harga (Rp)</label>
                            <input type="number" name="price" class="mt-1 block w-full border-slate-200 rounded-2xl shadow-sm focus:ring-orange-500 focus:border-orange-500 py-3">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700">Foto Ayam</label>
                        <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-200 border-dashed rounded-3xl">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-slate-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-slate-600">
                                    <label class="relative cursor-pointer bg-white rounded-md font-bold text-orange-600 hover:text-orange-500 focus-within:outline-none">
                                        <span>Upload file</span>
                                        <input name="image" type="file" class="sr-only">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-10 rounded-2xl shadow-lg shadow-orange-200 transition-all duration-300">
                            Simpan Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>