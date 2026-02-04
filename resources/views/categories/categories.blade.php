@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')

    <main class="w-full flex flex-col gap-8 p-[5%]">
        
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-[#0F172A] tracking-tight">Mes Catégories</h1>
                <p class="text-[15px] font-medium text-slate-500">Gérez l'organisation de vos liens</p>
            </div>
            <button class="bg-[#F59F0A] hover:bg-[#e09109] text-white px-5 py-2.5 rounded-xl font-bold transition-all flex items-center gap-2 shadow-sm">
                <span>+</span> Nouvelle Catégorie
            </button>
        </div>

        <div class="w-full grid grid-cols-4 gap-7">
            @foreach (auth()->user()->categories as $categorie)
                <div class="group bg-white border border-gray-200 shadow-sm rounded-2xl p-6 hover:shadow-md hover:border-[#F59F0A] transition-all cursor-pointer">
                    <div class="w-12 h-12 bg-[#FDF5E6] rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                            <path fill="#F59F0A" d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7ZM2 7v4.5A1.5 1.5 0 0 0 3.5 13h9a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 12.5 5H8.207l-1.56 1.56A1.5 1.5 0 0 1 5.585 7H2Z"/>
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-xl font-bold text-[#0F172A]">{{ $categorie->title }}</h3>
                        <p class="text-sm font-medium text-slate-500">{{ $categorie->links()->count() }} Liens enregistrés</p>
                    </div>
                    <div class="mt-4 flex items-center text-[#F59F0A] font-bold text-sm group-hover:gap-2 transition-all">
                        Voir les liens <span class="ml-1">→</span>
                    </div>
                </div>
            @endforeach

            <div class="w-full h-full border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center p-6 hover:border-[#F59F0A] hover:bg-orange-50/30 transition-all cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-sm mb-3">
                    <span class="text-[#F59F0A] font-bold text-xl">+</span>
                </div>
                <span class="text-sm font-bold text-slate-600">Ajouter une catégorie</span>
            </div>

        </div>

    </main>
</body>