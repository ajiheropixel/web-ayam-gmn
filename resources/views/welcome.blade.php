<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['hero_title'] ?? 'AyamKu - Solusi Pangan Berkualitas' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            scroll-behavior: smooth;
        }
        /* Animasi kustom untuk gambar mengambang */
        .float-animation {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translate(0,  0px) rotate(3deg); }
            50%  { transform: translate(0, 15px) rotate(1deg); }
            100%   { transform: translate(0, -0px) rotate(3deg); }
        }
    </style>
</head>

<body class="bg-white text-slate-900 overflow-x-hidden">

    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 animate__animated animate__fadeInDown">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-black text-orange-600 tracking-tighter italic">AYAM<span
                    class="text-slate-800">KU.</span></div>
            <div class="hidden md:flex gap-8 text-sm font-bold text-slate-600">
                <a href="#beranda" class="hover:text-orange-600 transition">Beranda</a>
                <a href="#tentang" class="hover:text-orange-600 transition">Tentang Kami</a>
                <a href="#produk" class="hover:text-orange-600 transition">Katalog</a>
                <a href="#kontak" class="hover:text-orange-600 transition">Kontak</a>
            </div>
            <a href="{{ route('login') }}"
                class="bg-orange-600 text-white px-6 py-2.5 rounded-full text-xs font-bold shadow-lg shadow-orange-200 hover:bg-slate-900 transition-all">Portal
                Admin</a>
        </div>
    </nav>

    <section id="beranda" class="pt-40 pb-20 px-6 bg-gradient-to-b from-orange-50 to-white">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="animate__animated animate__fadeInLeft">
                <span class="bg-white text-orange-600 px-4 py-2 rounded-full text-xs font-black uppercase tracking-widest shadow-sm italic">
                    Premium Farm
                </span>
                <h1 class="text-5xl md:text-7xl font-black text-slate-900 mt-6 leading-[1.1]">
                    {{ $settings['hero_title'] ?? 'Menyediakan Ayam Segar Terbaik.' }}
                </h1>
                <p class="text-slate-500 text-lg mt-6 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">
                    {{ $settings['hero_subtitle'] ?? 'Kami berdedikasi menyediakan produk unggas dengan standar kebersihan tertinggi langsung dari peternakan lokal.' }}
                </p>
                <div class="mt-10 flex gap-4 animate__animated animate__fadeInUp animate__delay-1s">
                    <a href="#produk"
                        class="bg-slate-900 text-white px-8 py-4 rounded-2xl font-bold hover:bg-orange-600 transition-all shadow-xl shadow-slate-200">
                        Lihat Katalog
                    </a>
                    <a href="https://wa.me/{{ $settings['contact_wa'] ?? '6281291502925' }}"
                        class="bg-white border border-slate-200 text-slate-700 px-8 py-4 rounded-2xl font-bold hover:bg-slate-50 transition-all">
                        Chat WhatsApp
                    </a>
                </div>
            </div>
            <div class="relative animate__animated animate__zoomIn animate__delay-1s">
                <div class="absolute -z-10 top-0 -right-20 w-80 h-80 bg-orange-200 rounded-full blur-3xl opacity-50"></div>
                <img src="{{ isset($settings['hero_image']) ? asset('images/' . $settings['hero_image']) : 'https://images.unsplash.com/photo-1628522331661-505646eede3a?q=80&w=1170&auto=format&fit=crop' }}"
                    class="rounded-[60px] shadow-2xl transition-all duration-700 border-[12px] border-white w-full h-[500px] object-cover float-animation">
            </div>
        </div>
    </section>

    <section id="tentang" class="py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-20">
                <div class="md:w-1/2 relative animate__animated animate__fadeInLeft">
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-orange-100 rounded-full -z-10"></div>
                    <div class="relative rounded-[50px] overflow-hidden shadow-2xl">
                        <img src="{{ isset($settings['about_image']) ? asset('images/' . $settings['about_image']) : 'https://images.unsplash.com/photo-1588597989061-b60ad0eefdbf?w=1000&auto=format&fit=crop' }}"
                            class="w-full h-[550px] object-cover hover:scale-105 transition-transform duration-700">
                        <div class="absolute bottom-10 right-0 bg-white p-8 rounded-l-[40px] shadow-2xl border-l-8 border-orange-500 animate__animated animate__slideInRight animate__delay-1s">
                            <p class="text-4xl font-black text-slate-800 tracking-tighter">100%</p>
                            <p class="text-slate-400 text-xs font-bold uppercase tracking-[0.2em]">Higienis</p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2 space-y-8 animate__animated animate__fadeInRight">
                    <div class="inline-block">
                        <p class="text-orange-600 font-black text-sm uppercase tracking-[0.4em] mb-2">Our Story</p>
                        <div class="h-1.5 w-12 bg-orange-600 rounded-full"></div>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight">
                        {{ $settings['about_title'] ?? 'Kualitas Tanpa Kompromi Sejak 2025.' }}
                    </h2>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        {{ $settings['about_description'] ?? 'Kami mengutamakan kebersihan dan kesehatan ayam kami dengan pakan organik pilihan.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="produk" class="py-24 bg-slate-50 rounded-t-[60px]">
        <div class="max-w-7xl mx-auto px-6 text-center mb-16 animate__animated animate__fadeInUp">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter">Katalog Ayam <span
                    class="text-orange-600 italic">Fresh.</span></h2>
        </div>
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach (\App\Models\Product::latest()->get() as $index => $item)
                <div class="bg-white rounded-[45px] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 group border border-slate-50 animate__animated animate__fadeInUp" 
                     style="animation-delay: {{ $index * 0.2 }}s">
                    <div class="aspect-square relative overflow-hidden">
                        @if ($item->image)
                            <img src="{{ asset('images/' . $item->image) }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-slate-100 flex items-center justify-center text-6xl italic text-slate-300 font-black tracking-tighter">
                                AyamKu.</div>
                        @endif
                        <div class="absolute top-6 right-6 bg-slate-900 text-white px-4 py-2 rounded-2xl shadow-xl font-black">
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-800">{{ $item->name }}</h3>
                        <p class="text-slate-400 text-sm mt-1 uppercase font-bold tracking-widest italic">Stok: {{ $item->stock }} Ekor</p>
                        <a href="https://wa.me/{{ $settings['contact_wa'] ?? '6281291502925' }}?text=Halo, saya ingin pesan {{ $item->name }}."
                            class="mt-8 flex items-center justify-center w-full bg-orange-600 text-white py-4 rounded-[20px] font-black hover:bg-slate-900 transition-all shadow-lg shadow-orange-100">
                            Beli Via WhatsApp
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <footer id="kontak" class="bg-slate-900 pt-20 pb-10 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-12 text-slate-400">
            <div class="md:col-span-2">
                <div class="text-3xl font-black text-white italic mb-6">AYAM<span class="text-orange-500">KU.</span></div>
                <p class="max-w-sm leading-relaxed">
                    {{ $settings['contact_address'] ?? 'Jl. Peternakan No. 88, Jakarta Timur' }}
                </p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 italic uppercase tracking-widest text-sm">Media Sosial</h4>
                <p class="text-sm font-bold text-orange-500 tracking-widest">IG: {{ $settings['contact_ig'] ?? '@ayamku.farm' }}</p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 italic uppercase tracking-widest text-sm">Hubungi Kami</h4>
                <p class="text-sm font-bold text-white tracking-widest">WA: {{ $settings['contact_wa'] ?? '62812-9150-2925' }}</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-slate-800 mt-20 pt-8 text-center text-xs tracking-widest uppercase">
            &copy; 2025 AyamKu Indonesia. All Rights Reserved.
        </div>
    </footer>

</body>
</html>