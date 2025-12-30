<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyamKu - Solusi Pangan Berkualitas & Terpercaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; } </style>
</head>
<body class="bg-white text-slate-900">

    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-black text-orange-600 tracking-tighter italic">AYAM<span class="text-slate-800">KU.</span></div>
            <div class="hidden md:flex gap-8 text-sm font-bold text-slate-600">
                <a href="#beranda" class="hover:text-orange-600 transition">Beranda</a>
                <a href="#tentang" class="hover:text-orange-600 transition">Tentang Kami</a>
                <a href="#produk" class="hover:text-orange-600 transition">Katalog</a>
                <a href="#kontak" class="hover:text-orange-600 transition">Kontak</a>
            </div>
            <a href="{{ route('login') }}" class="bg-orange-600 text-white px-6 py-2.5 rounded-full text-xs font-bold shadow-lg shadow-orange-200 hover:bg-slate-900 transition-all">Portal Admin</a>
        </div>
    </nav>

    <section id="beranda" class="pt-32 pb-20 px-6 bg-gradient-to-b from-orange-50 to-white">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="bg-white text-orange-600 px-4 py-2 rounded-full text-xs font-black uppercase tracking-widest shadow-sm">Est. 2025</span>
                <h1 class="text-5xl md:text-7xl font-black text-slate-900 mt-6 leading-[1.1]">Menyediakan <span class="text-orange-500">Ayam Segar</span> Terbaik untuk Anda.</h1>
                <p class="text-slate-500 text-lg mt-6 leading-relaxed">Kami berdedikasi menyediakan produk unggas dengan standar kebersihan tertinggi, langsung dari peternakan lokal pilihan untuk menjamin kesegaran setiap hari.</p>
                <div class="mt-10 flex gap-4">
                    <a href="#produk" class="bg-slate-900 text-white px-8 py-4 rounded-2xl font-bold hover:bg-orange-600 transition-all shadow-xl shadow-slate-200">Lihat Katalog</a>
                    <a href="#tentang" class="bg-white border border-slate-200 text-slate-700 px-8 py-4 rounded-2xl font-bold hover:bg-slate-50 transition-all">Tentang Kami</a>
                </div>
            </div>
            <div class="relative">
    <div class="absolute -z-10 top-0 -right-20 w-80 h-80 bg-orange-200 rounded-full blur-3xl opacity-50"></div>
    
    <img src="{{ $settings['hero_image'] ?? 'https://images.unsplash.com/photo-1628522331661-505646eede3a?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
         class="rounded-[60px] shadow-2xl transform md:rotate-3 hover:rotate-0 transition-all duration-700 border-[12px] border-white w-full h-[500px] object-cover">
</div>
        </div>
    </section>

    <section class="py-24 max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-10">
            <div class="p-8 bg-slate-50 rounded-[40px] border border-slate-100">
                <div class="w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-orange-200 text-2xl">🌱</div>
                <h3 class="text-xl font-bold mb-3">Pakan Organik</h3>
                <p class="text-slate-500 text-sm leading-relaxed text-justify">Ayam kami dibesarkan dengan pakan alami pilihan tanpa hormon tambahan untuk hasil daging yang lebih sehat dan gurih.</p>
            </div>
            <div class="p-8 bg-slate-50 rounded-[40px] border border-slate-100">
                <div class="w-14 h-14 bg-slate-900 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-slate-200 text-2xl">❄️</div>
                <h3 class="text-xl font-bold mb-3">Rantai Dingin</h3>
                <p class="text-slate-500 text-sm leading-relaxed text-justify">Proses pengemasan dan distribusi menggunakan sistem pendingin ketat untuk menjaga kualitas nutrisi hingga ke tangan Anda.</p>
            </div>
            <div class="p-8 bg-slate-50 rounded-[40px] border border-slate-100">
                <div class="w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-orange-200 text-2xl">🚚</div>
                <h3 class="text-xl font-bold mb-3">Pengiriman Cepat</h3>
                <p class="text-slate-500 text-sm leading-relaxed text-justify">Layanan pengiriman di hari yang sama menjamin produk tetap segar saat tiba di dapur rumah maupun restoran Anda.</p>
            </div>
        </div>
    </section>
<section id="tentang" class="py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-20">
            
            <div class="md:w-1/2 relative">
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-orange-100 rounded-full -z-10"></div>
                
                <div class="relative rounded-[50px] overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1588597989061-b60ad0eefdbf?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8YXlhbXxlbnwwfHwwfHx8MA%3D%3D" 
                         alt="Ayam Sehat Berkualitas" 
                         class="w-full h-[550px] object-cover hover:scale-105 transition-transform duration-700">
                    
                    <div class="absolute bottom-10 right-0 bg-white p-8 rounded-l-[40px] shadow-2xl border-l-8 border-orange-500">
                        <p class="text-4xl font-black text-slate-800 tracking-tighter">100%</p>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-[0.2em]">Kualitas Terjamin</p>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 space-y-8">
                <div class="inline-block">
                    <p class="text-orange-600 font-black text-sm uppercase tracking-[0.4em] mb-2">Our Story</p>
                    <div class="h-1.5 w-12 bg-orange-600 rounded-full"></div>
                </div>
                
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight">
                    {{ $settings['about_title'] ?? 'Lebih dari Sekadar Peternakan Biasa.' }}
                </h2>
                
                <p class="text-slate-600 leading-relaxed text-lg">
                    {{ $settings['about_description'] ?? 'Berawal dari visi untuk menyediakan protein berkualitas bagi keluarga Indonesia, AyamKu hadir dengan sistem peternakan modern yang mengutamakan kesejahteraan hewan dan kebersihan proses sejak bibit hingga siap panen.' }}
                </p>

                <div class="grid grid-cols-2 gap-8 pt-6">
                    <div class="border-l-4 border-orange-100 pl-6">
                        <h4 class="font-bold text-slate-800 text-xl italic uppercase tracking-tighter">Visi Kami</h4>
                        <p class="text-slate-500 text-sm mt-2 leading-relaxed">Menjadi penyuplai ayam segar nomor satu yang mengutamakan kualitas tanpa kompromi.</p>
                    </div>
                    <div class="border-l-4 border-orange-100 pl-6">
                        <h4 class="font-bold text-slate-800 text-xl italic uppercase tracking-tighter">Misi Kami</h4>
                        <p class="text-slate-500 text-sm mt-2 leading-relaxed">Memberdayakan peternak lokal dan memastikan produk sampai ke tangan konsumen dalam kondisi puncak.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    <section id="produk" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-slate-900">Katalog Produk Unggulan</h2>
                <p class="text-slate-500 mt-4">Pilih produk terbaik untuk kebutuhan hidangan istimewa Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach(\App\Models\Product::latest()->get() as $item)
                <div class="bg-white rounded-[45px] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 group">
                    <div class="aspect-square relative overflow-hidden">
                        @if($item->image)
                            <img src="{{ asset('images/' . $item->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-slate-100 flex items-center justify-center text-6xl italic text-slate-300 font-black tracking-tighter">AyamKu.</div>
                        @endif
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur px-4 py-2 rounded-2xl shadow-xl font-black text-orange-600">
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-800">{{ $item->name }}</h3>
                        <p class="text-slate-400 text-sm mt-1 uppercase font-bold tracking-widest">Stok Ready: {{ $item->stock }}</p>
                        <a href="https://wa.me/6281291502925?text=Halo,saya ingin pesan {{ $item->name }}. Saya melihat stok yang tersedia ada {{ $item->stock }} ekor." 
                           class="mt-8 flex items-center justify-center w-full bg-slate-900 text-white py-4 rounded-[20px] font-bold hover:bg-orange-600 transition-all shadow-lg shadow-slate-100">
                           Pesan Sekarang
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer id="kontak" class="bg-slate-900 pt-20 pb-10 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-12 text-slate-400">
            <div class="md:col-span-2">
                <div class="text-3xl font-black text-white italic mb-6">AYAM<span class="text-orange-500">KU.</span></div>
                <p class="max-w-sm leading-relaxed">Berkomitmen menyuplai kebutuhan protein hewani berkualitas tinggi bagi masyarakat Indonesia dengan mengutamakan standar kesehatan dan kebersihan.</p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 italic uppercase tracking-widest text-sm">Navigasi</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="#beranda" class="hover:text-white transition">Beranda</a></li>
                    <li><a href="#tentang" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#produk" class="hover:text-white transition">Katalog</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 italic uppercase tracking-widest text-sm">Hubungi Kami</h4>
                <p class="text-sm leading-relaxed mb-4">Jl. Peternakan Berkualitas No. 88, Jakarta Timur</p>
                <p class="text-sm font-bold text-white tracking-widest">0812-9150-2925</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-slate-800 mt-20 pt-8 text-center text-xs tracking-widest uppercase">
            &copy; 2025 AyamKu Indonesia. All Rights Reserved.
        </div>
    </footer>

</body>
</html>