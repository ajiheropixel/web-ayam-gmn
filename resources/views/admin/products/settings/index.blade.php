<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-[40px] shadow-sm p-10 border border-slate-100">
                <h2 class="text-3xl font-black text-slate-800 mb-8">Pengaturan Tampilan Web</h2>
                
                <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-8">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="space-y-4">
                            <h3 class="font-bold text-orange-600 uppercase tracking-widest text-sm">Bagian Hero</h3>
                            <div>
                                <label class="block text-sm font-bold text-slate-700">Judul Utama</label>
                                <input type="text" name="hero_title" value="{{ $settings['hero_title'] ?? '' }}" class="w-full rounded-2xl border-slate-200 py-3">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700">Sub-judul</label>
                                <textarea name="hero_subtitle" class="w-full rounded-2xl border-slate-200 py-3">{{ $settings['hero_subtitle'] ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="font-bold text-orange-600 uppercase tracking-widest text-sm">Tentang Kami</h3>
                            <div>
                                <label class="block text-sm font-bold text-slate-700">Judul Tentang</label>
                                <input type="text" name="about_title" value="{{ $settings['about_title'] ?? '' }}" class="w-full rounded-2xl border-slate-200 py-3">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700">Deskripsi Cerita</label>
                                <textarea name="about_description" rows="4" class="w-full rounded-2xl border-slate-200 py-3">{{ $settings['about_description'] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-100 flex justify-end">
                        <button type="submit" class="bg-slate-900 text-white px-10 py-4 rounded-2xl font-bold hover:bg-orange-600 transition-all shadow-xl">
                            Simpan Perubahan Tampilan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>