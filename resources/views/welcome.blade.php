<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyamKu - Katalog Ayam Segar</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-black text-orange-600 tracking-tighter">
                AYAM<span class="text-slate-800">KU.</span>
            </div>
            <div class="flex gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-bold text-slate-700 hover:text-orange-600 transition">Dashboard Admin</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-bold text-slate-700 hover:text-orange-600 transition">Log in</a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <header class="py-16 px-6 text-center">
        <h1 class="text-5xl md:text-6xl font-black text-slate-900 leading-tight mb-4">
            Ayam Segar Terbaik <br> <span class="text-orange-500">Langsung dari Kandang.</span>
        </h1>
        <p class="text-slate-500 text-lg max-w-2xl mx-auto">
            Kami menyediakan berbagai jenis ayam berkualitas dengan harga terbaik. 
            Bersih, sehat, dan siap diantar ke dapur Anda.
        </p>
    </header>

    <main class="max-w-7xl mx-auto px-6 pb-24">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-800">Katalog Produk</h2>
                <div class="h-1.5 w-20 bg-orange-500 rounded-full mt-2"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                // Mengambil data produk langsung dari database
                $products = \App\Models\Product::latest()->get();
            @endphp

            @forelse($products as $item)
            <div class="bg-white p-6 rounded-[40px] shadow-sm border border-slate-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group">
                
                <div class="aspect-square bg-orange-50 rounded-[30px] mb-6 flex items-center justify-center text-7xl group-hover:bg-orange-100 transition-colors overflow-hidden">
                    @if($item->image)
                        <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-full object-cover">
                    @else
                        🍗
                    @endif
                </div>

                <div class="space-y-1">
                    <h3 class="font-extrabold text-2xl text-slate-800 group-hover:text-orange-600 transition-colors">
                        {{ $item->name }}
                    </h3>
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 bg-slate-100 text-slate-500 rounded-full text-[10px] font-bold uppercase tracking-widest">
                            Stok: {{ $item->stock }} Ekor
                        </span>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-50">
                    <div>
                        <p class="text-sm text-slate-400 font-bold">Harga per ekor</p>
                        <p class="text-2xl font-black text-slate-900">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    </div>
                    
                    <a href="https://wa.me/62812345678?text=Halo Admin, saya mau pesan {{ $item->name }}" 
                       target="_blank"
                       class="bg-orange-500 text-white p-4 rounded-2xl shadow-lg shadow-orange-200 hover:bg-slate-900 hover:shadow-slate-200 transition-all duration-300">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                       </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center">
                <div class="text-6xl mb-4">🏜️</div>
                <h3 class="text-xl font-bold text-slate-400">Belum ada produk ayam tersedia.</h3>
            </div>
            @endforelse
        </div>
    </main>

    <footer class="bg-white border-t border-slate-100 py-12 text-center text-slate-400 text-sm">
        <p>&copy; 2024 <strong>AyamKu.</strong> Hak Cipta Dilindungi.</p>
    </footer>

</body>
</html>