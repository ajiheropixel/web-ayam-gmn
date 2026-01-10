<x-app-layout>
    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">

            <div
                class="bg-white rounded-[40px] shadow-sm p-10 border border-slate-100 animate__animated animate__fadeIn">
                <div class="flex items-center gap-6">
                    <div
                        class="w-20 h-20 bg-orange-100 text-orange-600 rounded-[30px] flex items-center justify-center text-3xl font-black italic shadow-inner">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div>
                        <h2 class="text-3xl font-black text-slate-800 tracking-tight">Pengaturan Profil</h2>
                        <p class="text-slate-500 font-medium">Kelola informasi akun dan keamanan portal Admin Toko Ayam
                            Anda.</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div
                    class="bg-white rounded-[40px] shadow-sm p-10 border border-slate-100 hover:border-orange-200 transition-all duration-500">
                    <div class="mb-8">
                        <h3
                            class="font-black text-orange-600 uppercase tracking-widest text-sm flex items-center gap-2">
                            <span
                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center text-[10px]">1</span>
                            Informasi Dasar
                        </h3>
                    </div>
                    @include('profile.partials.update-profile-information-form')
                </div>

                <div
                    class="bg-white rounded-[40px] shadow-sm p-10 border border-slate-100 hover:border-emerald-200 transition-all duration-500">
                    <div class="mb-8">
                        <h3
                            class="font-black text-emerald-600 uppercase tracking-widest text-sm flex items-center gap-2">
                            <span
                                class="w-6 h-6 bg-emerald-100 rounded-full flex items-center justify-center text-[10px]">2</span>
                            Keamanan Akun
                        </h3>
                    </div>
                    @include('profile.partials.update-password-form')
                </div>

                <div
                    class="md:col-span-2 bg-rose-50/50 rounded-[40px] shadow-sm p-10 border border-rose-100 italic text-center">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
