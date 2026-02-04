@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-[#0F172A] tracking-tight">Mes Liens</h1>
                <p class="text-[15px] font-medium text-slate-500">Accédez à vos liens favoris</p>
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">
            @foreach (auth()->user()->links as $link)
                <div class="group relative bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-all cursor-pointer">
                    <div class="absolute top-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button title="Modifier" data-id="{{ $link->id }}" data-title="{{ $link->title }}" data-url="{{ $link->url }}" data-categories_id="{{ $link->categories_id }}"  data-tags='@json($link->tags->pluck("id"))' class="p-1.5 bg-slate-50 hover:bg-[#F1F2F4] text-slate-400 hover:text-[#1B294B] rounded-lg transition-colors border border-gray-100 editLink_Modal_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </button>
                        <form action="{{ route('delete.link') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="link_id" value="{{ $link->id }}">
                            <button title="Supprimer" type="submit" class="p-1.5 bg-slate-50 hover:bg-red-50 text-slate-400 hover:text-red-600 rounded-lg transition-colors border border-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </button>
                        </form>
                    </div>

                    <div class="w-10 h-10 bg-[#F1F2F4] rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#1B294B] transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1B294B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-colors">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                    </div>

                    <div class="space-y-1">
                        <h3 class="text-lg font-bold text-[#0F172A] tracking-tight truncate">{{ $link->title }}</h3>
                        <p class="text-[14px] font-medium text-slate-500 truncate">{{ $link->url }}</p>
                    </div>

                    <a href="{{ $link->url }}" class="mt-4 flex items-center text-[#1B294B] font-bold text-xs hover:gap-2 transition-all">
                        Visiter le lien <span class="ml-1">→</span>
                    </a>
                </div>
            @endforeach

            <button id="addLien_Modal_button" class="w-full h-full border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center p-6 hover:border-[#1B294B] hover:bg-slate-50 transition-all cursor-pointer group">
                <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-sm mb-3 group-hover:scale-110 transition-transform">
                    <span class="text-[#1B294B] font-bold text-xl">+</span>
                </div>
                <span class="text-sm font-bold text-slate-600">Nouveau Lien</span>
            </button>

        </div>

        @include('modales.addLinks')
        @include('modales.editLink')

    </main>
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>