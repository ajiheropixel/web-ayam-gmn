<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayam Fresh | Kualitas Terbaik</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-900">

    <nav class="flex justify-between items-center px-10 py-6 bg-white/80 backdrop-blur-md sticky top-0 z-50">
        <div class="text-2xl font-black text-orange-600 tracking-tighter">AYAM<span class="text-slate-800">KU.</span></div>
        <div class="space-x-8 font-medium hidden md:block">
            <a href="/" class="hover:text-orange-500 transition">Beranda</a>
            <a href="#produk" class="hover:text-orange-500 transition">Produk</a>
        </div>
        <div class="flex items-center gap-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-5 py-2 bg-slate-800 text-white rounded-full text-sm font-semibold">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-600 hover:text-orange-500">Masuk</a>
                    <a href="{{ route('register') }}" class="px-6 py-2 bg-orange-500 text-white rounded-full text-sm font-bold shadow-lg shadow-orange-200 hover:bg-orange-600 transition">Daftar</a>
                @endauth
            @endif
        </div>
    </nav>

    <section class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2 animate__animated animate__fadeInLeft">
            <span class="bg-orange-100 text-orange-600 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest">Fresh From Farm</span>
            <h1 class="text-6xl font-extrabold mt-6 leading-tight">Nikmati Ayam Segar <br> Kualitas <span class="text-orange-500 underline decoration-orange-200">Premium.</span></h1>
            <p class="text-slate-500 mt-6 text-lg leading-relaxed">Kami memastikan setiap potong ayam yang Anda beli telah melalui proses kontrol kualitas yang ketat untuk kesehatan keluarga Anda.</p>
            <div class="mt-10 flex gap-4">
                <a href="#produk" class="px-8 py-4 bg-slate-900 text-white rounded-2xl font-bold hover:shadow-2xl transition duration-300">Lihat Produk</a>
                <button onclick="Swal.fire('Halo!', 'Promo hari ini: Diskon 10% untuk member baru!', 'info')" class="px-8 py-4 bg-white border border-slate-200 rounded-2xl font-bold hover:bg-slate-50 transition">Cek Promo</button>
            </div>
        </div>
        <div class="md:w-1/2 animate__animated animate__fadeInRight">
            <img src="https://images.unsplash.com/photo-1587593810167-a84920ea0781?auto=format&fit=crop&w=800&q=80" 
                 alt="Ayam Segar" class="rounded-[40px] shadow-2xl border-[12px] border-white">
        </div>
    </section>

</body>
</html>