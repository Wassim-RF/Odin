<header class="bg-white shadow-sm w-full pl-5 pr-5">
    <div class="flex h-16 justify-between items-center">
        
        <div class="flex items-center">
            <a href="#" class="shrink-0 flex items-center gap-2">
                <div class="bg-indigo-600 text-white p-1.5 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </div>
                <span class="font-bold text-xl tracking-tight text-gray-900">BrandName</span>
            </a>
        </div>

        <nav class="hidden md:flex space-x-8">
            <a href="/home" class="px-3 py-2 text-sm font-medium {{ request()->is('home') ? 'text-gray-900 border-b-2 border-[#F59F0A]' : 'text-gray-500 hover:text-[#F59F0A] transition-colors' }}">Acceil</a>
            <a href="/categories" class="px-3 py-2 text-sm font-medium {{ request()->is('categories') ? 'text-gray-900 border-b-2 border-[#F59F0A]' : 'text-gray-500 hover:text-[#F59F0A] transition-colors' }}">Catégories</a>
            <a href="/links" class="px-3 py-2 text-sm font-medium {{ request()->is('links') ? 'text-gray-900 border-b-2 border-[#F59F0A]' : 'text-gray-500 hover:text-[#F59F0A] transition-colors' }}">Liens</a>
            <a href="/tags" class="px-3 py-2 text-sm font-medium {{ request()->is('tags') ? 'text-gray-900 border-b-2 border-[#F59F0A]' : 'text-gray-500 hover:text-[#F59F0A] transition-colors' }}">Tags</a>
        </nav>

        <form action="{{ route('auth.logout') }}" method="POST" class="flex items-center">
            @csrf
            <button type="submit" class="flex items-center gap-2 bg-red-50 text-red-600 hover:bg-red-100 px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 cursor-pointer">
                <span>Logout</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                </svg>
            </button>
        </form>
    </div>
</header>