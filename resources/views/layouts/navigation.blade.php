<nav x-data="{ open: false }" class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md sticky top-0 z-50 border-b border-[#E3C474]/20 shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                        <div class="p-2.5 bg-[#E3C474] rounded-xl shadow-lg shadow-[#E3C474]/30 group-hover:rotate-12 transition-all duration-300">
                            <!-- Menggunakan ikon Shop sebagai pengganti logo atau x-application-logo -->
                            <i class="bi bi-shop-window text-white text-xl"></i>
                        </div>
                        <span class="hidden md:block font-black text-xl tracking-tight text-[#4A3728] dark:text-gray-200">
                            Mami Ersa <span class="text-[#E3C474]">Admin</span>
                        </span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-4 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" 
                        class="text-xs font-bold uppercase tracking-widest !border-b-4 !pt-1 transition-all duration-300">
                        <i class="bi bi-speedometer2 me-2"></i> {{ __('Dashboard') }}
                    </x-nav-link>
                    
                    <x-nav-link href="#" :active="false" class="text-xs font-bold uppercase tracking-widest !border-b-4 !pt-1 opacity-60 hover:opacity-100 transition-all">
                        <i class="bi bi-journal-text me-2"></i> Kelola Menu
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="56">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-4 py-2 border border-gray-100 dark:border-gray-700 text-sm leading-4 font-semibold rounded-2xl text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-800 hover:bg-white dark:hover:bg-gray-700 hover:shadow-md transition-all duration-200 focus:outline-none">
                                <!-- User Avatar with Initial -->
                                <div class="h-8 w-8 rounded-full bg-gradient-to-tr from-[#E3C474] to-[#4A3728] flex items-center justify-center text-white text-xs font-bold me-2 shadow-inner">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                
                                <div class="me-1">{{ Auth::user()->name }}</div>

                                <i class="bi bi-chevron-down text-[10px] text-gray-400"></i>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="px-4 py-3 bg-gray-50 dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 mb-1">
                                <p class="text-[10px] font-black text-[#E3C474] uppercase tracking-[0.2em]">Hak Akses Admin</p>
                            </div>

                            <x-dropdown-link :href="route('profile.edit')" class="flex items-center gap-2 hover:bg-[#FFF7F0] !text-gray-700 transition">
                                <i class="bi bi-person-gear text-[#E3C474]"></i> {{ __('Profile Settings') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="/" class="flex items-center gap-2 hover:bg-[#FFF7F0] !text-gray-700 transition border-b border-gray-50">
                                <i class="bi bi-house-heart text-[#E3C474]"></i> Lihat Website
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        class="flex items-center gap-2 hover:bg-red-50 !text-red-600 font-bold transition"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="bi bi-box-arrow-right"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger (Mobile Menu Button) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-3 rounded-xl text-gray-500 hover:text-[#4A3728] hover:bg-[#E3C474]/20 focus:outline-none transition duration-150">
                    <i :class="{'hidden': open, 'inline-block': ! open }" class="bi bi-list text-2xl"></i>
                    <i :class="{'hidden': ! open, 'inline-block': open }" class="bi bi-x-lg text-xl hidden"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (Mobile) -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700 animate-fade-in-down">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="!font-bold">
                <i class="bi bi-speedometer2 me-2"></i> {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4 flex items-center gap-3">
                <div class="h-10 w-10 rounded-full bg-[#E3C474] flex items-center justify-center text-white font-bold shadow-md">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div>
                    <div class="font-bold text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="flex items-center gap-2">
                    <i class="bi bi-person-gear"></i> {{ __('Profile Settings') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="/" class="flex items-center gap-2">
                    <i class="bi bi-house-heart"></i> {{ __('Website Publik') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            class="!text-red-600 !font-bold flex items-center gap-2"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="bi bi-box-arrow-right"></i> {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Tambahan Animasi untuk mobile menu agar lebih smooth */
    @keyframes fade-in-down {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-down { animation: fade-in-down 0.3s ease-out; }

    /* Gaya kustom untuk Nav Link Breeze agar selaras dengan tema Mami Ersa */
    .nav-link-active {
        border-color: #E3C474 !important;
        color: #4A3728 !important;
        opacity: 1 !important;
    }
</style>