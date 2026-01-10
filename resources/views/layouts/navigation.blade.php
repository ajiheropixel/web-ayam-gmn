<nav x-data="{ open: false }" class="bg-white border-b border-slate-100 shadow-sm sticky top-0 z-50 rounded-b-[40px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="group block transition-transform active:scale-95">
                        <div
                            class="bg-slate-900 px-4 py-2 rounded-2xl shadow-xl shadow-slate-200 transform -rotate-2 group-hover:rotate-0 group-hover:shadow-orange-100 transition-all duration-300">
                            <x-application-logo />
                        </div>
                    </a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="text-[11px] font-black uppercase tracking-[0.2em] transition-all hover:text-orange-500">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.*')"
                        class="text-[11px] font-black uppercase tracking-[0.2em] transition-all hover:text-orange-500">
                        {{ __('Manajemen Produk') }}
                    </x-nav-link>

                    <x-nav-link :href="route('admin.settings.index')" :active="request()->routeIs('admin.settings.*')"
                        class="text-[11px] font-black uppercase tracking-[0.2em] transition-all hover:text-orange-500">
                        {{ __('Pengaturan Web') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-5 py-2.5 border border-slate-100 text-xs leading-4 font-black rounded-2xl text-slate-500 bg-slate-50 hover:text-slate-800 hover:bg-white focus:outline-none transition ease-in-out duration-150 shadow-sm uppercase tracking-widest italic">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-2">
                                <svg class="fill-current h-4 w-4 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="rounded-2xl overflow-hidden border border-slate-50">
                            <x-dropdown-link :href="route('profile.edit')" class="font-bold text-xs uppercase tracking-widest">
                                {{ __('👤 Profile') }}
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    class="font-bold text-xs uppercase tracking-widest text-rose-500"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('🚪 Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-3 rounded-xl text-slate-400 hover:text-orange-500 hover:bg-slate-50 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden animate__animated animate__fadeIn">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                class="rounded-xl font-black uppercase text-[10px] tracking-[0.2em]">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('products.index')" :active="request()->routeIs('products.*')"
                class="rounded-xl font-black uppercase text-[10px] tracking-[0.2em]">
                {{ __('Manajemen Produk') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-1 border-t border-slate-100">
            <div class="px-8 mb-4">
                <div class="font-black text-sm text-slate-800 uppercase tracking-tighter italic">
                    {{ Auth::user()->name }}</div>
                <div class="font-medium text-xs text-slate-400">{{ Auth::user()->email }}</div>
            </div>

            <div class="space-y-1 px-4 pb-4">
                <x-responsive-nav-link :href="route('profile.edit')" class="rounded-xl font-bold">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" class="rounded-xl font-bold text-rose-500"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
