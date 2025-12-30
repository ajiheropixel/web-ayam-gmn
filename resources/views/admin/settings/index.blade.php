<x-app-layout>
    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-[40px] shadow-sm p-10 border border-slate-100">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h2 class="text-3xl font-black text-slate-800">Master Konfigurasi Website</h2>
                        <p class="text-slate-500">Semua teks dan gambar di halaman depan bisa kamu ubah di sini.</p>
                    </div>
                </div>

                @if(session('success'))
                    <div class="mb-6 p-4 bg-emerald-100 text-emerald-600 rounded-2xl font-bold italic">
                        ✅ {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-12">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="space-y-6 p-8 bg-orange-50/50 rounded-[30px] border border-orange-100">
                            <h3 class="font-black text-orange-600 uppercase tracking-widest text-sm flex items-center gap-2">
                                <span class="w-6 h-6 bg-orange-200 rounded-full flex items-center justify-center text-[10px]">1</span>
                                Bagian Hero Utama
                            </h3>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Judul Besar</label>
                                <input type="text" name="hero_title" value="{{ $settings['hero_title'] ?? '' }}" class="w-full rounded-2xl border-slate-200 py-3 focus:ring-orange-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Sub-Judul (Deskripsi Singkat)</label>
                                <textarea name="hero_subtitle" rows="2" class="w-full rounded-2xl border-slate-200 focus:ring-orange-500">{{ $settings['hero_subtitle'] ?? '' }}</textarea>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Foto Hero</label>
                                @if(isset($settings['hero_image']))
                                    <img src="{{ asset('images/' . $settings['hero_image']) }}" class="w-32 h-20 rounded-xl mb-3 object-cover border-4 border-white shadow-sm">
                                @endif
                                <input type="file" name="hero_image" class="text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-orange-100 file:text-orange-700">
                            </div>
                        </div>

                        <div class="space-y-6 p-8 bg-slate-50 rounded-[30px] border border-slate-200">
                            <h3 class="font-black text-slate-600 uppercase tracking-widest text-sm flex items-center gap-2">
                                <span class="w-6 h-6 bg-slate-200 rounded-full flex items-center justify-center text-[10px]">2</span>
                                Bagian Tentang Kami
                            </h3>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Judul Cerita</label>
                                <input type="text" name="about_title" value="{{ $settings['about_title'] ?? '' }}" class="w-full rounded-2xl border-slate-200 py-3">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Isi Cerita Lengkap</label>
                                <textarea name="about_description" rows="4" class="w-full rounded-2xl border-slate-200">{{ $settings['about_description'] ?? '' }}</textarea>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Foto Pendukung</label>
                                @if(isset($settings['about_image']))
                                    <img src="{{ asset('images/' . $settings['about_image']) }}" class="w-32 h-20 rounded-xl mb-3 object-cover border-4 border-white shadow-sm">
                                @endif
                                <input type="file" name="about_image" class="text-sm text-slate-500">
                            </div>
                        </div>

                        <div class="md:col-span-2 space-y-6 p-8 border-2 border-dashed border-slate-200 rounded-[30px]">
                            <h3 class="font-black text-slate-800 uppercase tracking-widest text-sm italic">3. Informasi Kontak & Sosial Media</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <div>
                                    <label class="block text-xs font-bold text-slate-500 uppercase mb-2">No. WhatsApp (Format: 628xxx)</label>
                                    <input type="text" name="contact_wa" value="{{ $settings['contact_wa'] ?? '' }}" class="w-full rounded-2xl border-slate-200">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Username Instagram</label>
                                    <input type="text" name="contact_ig" value="{{ $settings['contact_ig'] ?? '' }}" class="w-full rounded-2xl border-slate-200" placeholder="@ayamku_farm">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Alamat Lengkap</label>
                                    <input type="text" name="contact_address" value="{{ $settings['contact_address'] ?? '' }}" class="w-full rounded-2xl border-slate-200">
                                </div>
                            </div>
                        </div>
                    </div>
<div class="md:col-span-2 space-y-6 p-8 bg-emerald-50/50 rounded-[30px] border border-emerald-100 mt-8">
    <h3 class="font-black text-emerald-600 uppercase tracking-widest text-sm flex items-center gap-2">
        <span class="w-6 h-6 bg-emerald-200 rounded-full flex items-center justify-center text-[10px]">4</span>
        Testimoni Unggulan
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-6 bg-white rounded-2xl shadow-sm border border-emerald-50">
            <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Nama Pelanggan 1</label>
            <input type="text" name="testi_name_1" value="{{ $settings['testi_name_1'] ?? '' }}" class="w-full rounded-xl border-slate-200 mb-4" placeholder="Contoh: Pak Budi">
            
            <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Ulasan</label>
            <textarea name="testi_content_1" rows="2" class="w-full rounded-xl border-slate-200">{{ $settings['testi_content_1'] ?? '' }}</textarea>
        </div>

        <div class="p-6 bg-white rounded-2xl shadow-sm border border-emerald-50">
            <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Nama Pelanggan 2</label>
            <input type="text" name="testi_name_2" value="{{ $settings['testi_name_2'] ?? '' }}" class="w-full rounded-xl border-slate-200 mb-4" placeholder="Contoh: Ibu Siti">
            
            <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Ulasan</label>
            <textarea name="testi_content_2" rows="2" class="w-full rounded-xl border-slate-200">{{ $settings['testi_content_2'] ?? '' }}</textarea>
        </div>
    </div>
</div>
                    <div class="flex justify-center pt-6">
                        <button type="submit" class="bg-slate-900 text-white px-16 py-5 rounded-[20px] font-black text-xl hover:bg-orange-600 hover:scale-105 transition-all shadow-2xl shadow-orange-200">
                            Update Seluruh Tampilan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>