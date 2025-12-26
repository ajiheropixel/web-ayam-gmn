<x-app-layout>
    <div class="py-12 animate__animated animate__fadeIn">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl p-10">
                <h2 class="text-2xl font-extrabold text-slate-800 mb-6">Tambah Stok Ayam Baru</h2>
                
               <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Nama Ayam" required>
    
    <input type="number" name="price" placeholder="Harga" required>
    
    <input type="number" name="stock" placeholder="Stok" required>

    <input type="file" name="image" class="border p-2 w-full rounded-xl">
    
    <button type="submit">Simpan Produk</button>
</form>
            </div>
        </div>
    </div>
</x-app-layout>