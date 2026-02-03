@include('layouts.head')
<body class="w-full min-h-screen bg-slate-50 flex flex-col">
    @include('layouts.header')
    <main class="w-full flex flex-col gap-7 p-[5%]">
        <div class="w-full grid grid-cols-4 gap-7">
            <div class="w-full bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-[#F1F2F4] rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1B294B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="text-3xl font-bold text-[#0F172A] tracking-tight">{{ $linkNumber }}</h3>
                    <p class="text-[15px] font-medium text-slate-500">Total Links</p>
                </div>
                
            </div>
            <div class="w-full bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-[#FDF5E6] rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="#F59F0A" d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7ZM2 7v4.5A1.5 1.5 0 0 0 3.5 13h9a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 12.5 5H8.207l-1.56 1.56A1.5 1.5 0 0 1 5.585 7H2Z"/></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="text-3xl font-bold text-[#0F172A] tracking-tight">{{ $categorieNumber }}</h3>
                    <p class="text-[15px] font-medium text-slate-500">Categoeies</p>
                </div>
                
            </div>
            <div class="w-full bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-[#E8F9EE] rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#21C45D"><g fill="none" stroke="#21C45D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M9 5H2v7l6.29 6.29c.94.94 2.48.94 3.42 0l3.58-3.58c.94-.94.94-2.48 0-3.42L9 5ZM6 9.01V9"/><path d="m15 5l6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"/></g></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="text-3xl font-bold text-[#0F172A] tracking-tight">{{ $tagNumber }}</h3>
                    <p class="text-[15px] font-medium text-slate-500">Tags</p>
                </div>
                
            </div>
            <div class="w-full bg-white border border-gray-200 shadow-sm rounded-2xl p-5 hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-[#E6F5FC] rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><path fill="#0DA2E7" d="M200 64v104a8 8 0 0 1-16 0V83.31L69.66 197.66a8 8 0 0 1-11.32-11.32L172.69 72H88a8 8 0 0 1 0-16h104a8 8 0 0 1 8 8Z"/></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="text-3xl font-bold text-[#0F172A] tracking-tight">5</h3>
                    <p class="text-[15px] font-medium text-slate-500">Total Links</p>
                </div>
                
            </div>
        </div>
        <div class="w-full grid grid-cols-3 gap-7">
            <button id="addCategorie_Modal_button" class="group w-full h-[200px] bg-white border-2 border-dashed border-gray-200 shadow-sm rounded-2xl cursor-pointer hover:border-[#F59F0A] hover:shadow-lg transition-all flex flex-col items-center justify-center gap-3">
                <div class="w-14 h-14 bg-[#FDF5E6] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16">
                            <path fill="#F59F0A" d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7Z"/>
                        </svg>
                        <div class="absolute -bottom-1 -right-1 bg-[#F59F0A] text-white rounded-full w-5 h-5 flex items-center justify-center border-2 border-white text-xs font-bold">
                            +
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <h3 class="text-lg font-bold text-[#0F172A]">Add New Category</h3>
                    <p class="text-sm font-medium text-slate-500">Create a new folder</p>
                </div>

            </button>
            <button id="addCategorie_Modal_button" class="group w-full h-[200px] bg-white border-2 border-dashed border-gray-200 shadow-sm rounded-2xl cursor-pointer hover:border-[#F59F0A] hover:shadow-lg transition-all flex flex-col items-center justify-center gap-3">
                <div class="w-14 h-14 bg-[#FDF5E6] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16">
                            <path fill="#F59F0A" d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7Z"/>
                        </svg>
                        <div class="absolute -bottom-1 -right-1 bg-[#F59F0A] text-white rounded-full w-5 h-5 flex items-center justify-center border-2 border-white text-xs font-bold">
                            +
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <h3 class="text-lg font-bold text-[#0F172A]">Add New Category</h3>
                    <p class="text-sm font-medium text-slate-500">Create a new folder</p>
                </div>

            </button>
            <button id="addCategorie_Modal_button" class="group w-full h-[200px] bg-white border-2 border-dashed border-gray-200 shadow-sm rounded-2xl cursor-pointer hover:border-[#F59F0A] hover:shadow-lg transition-all flex flex-col items-center justify-center gap-3">
                <div class="w-14 h-14 bg-[#FDF5E6] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16">
                            <path fill="#F59F0A" d="M2 4.5V6h3.586a.5.5 0 0 0 .353-.146L7.293 4.5L5.939 3.146A.5.5 0 0 0 5.586 3H3.5A1.5 1.5 0 0 0 2 4.5Zm-1 0A2.5 2.5 0 0 1 3.5 2h2.086a1.5 1.5 0 0 1 1.06.44L8.207 4H12.5A2.5 2.5 0 0 1 15 6.5v5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 11.5v-7Z"/>
                        </svg>
                        <div class="absolute -bottom-1 -right-1 bg-[#F59F0A] text-white rounded-full w-5 h-5 flex items-center justify-center border-2 border-white text-xs font-bold">
                            +
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <h3 class="text-lg font-bold text-[#0F172A]">Add New Category</h3>
                    <p class="text-sm font-medium text-slate-500">Create a new folder</p>
                </div>

            </button>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
        
            <div class="px-6 py-5 border-b border-gray-100">
                <h2 class="text-lg font-bold text-gray-900">Recent Links</h2>
                <p class="mt-1 text-sm text-gray-500">Your latest saved bookmarks</p>
            </div>

            <ul class="divide-y divide-gray-100">
                
                <li class="group flex items-center justify-between p-4 hover:bg-gray-50 transition-colors cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="shrink-0">
                            <svg class="w-10 h-10 text-gray-900" viewBox="0 0 98 96" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" fill="currentColor"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">GitHub</h3>
                            <a href="#" class="text-sm text-gray-500 hover:text-gray-700 flex items-center gap-1">
                                github.com
                                <svg class="w-3 h-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                            </a>
                        </div>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200">Tools</span>
                </li>

                <li class="group flex items-center justify-between p-4 hover:bg-gray-50 transition-colors cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="shrink-0">
                            <svg class="w-10 h-10 text-pink-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.605 4.61a8.502 8.502 0 0 1 1.93 5.314c-.281-.054-3.101-.629-5.943-.271-1.065-1.941-2.067-3.646-2.083-3.674-.015-.028 6.096-1.369 6.096-1.369zm-7.825.86c.015.027 1.05 1.782 2.115 3.766-3.178 1.057-6.525 1.352-8.156 1.412a8.51 8.51 0 0 1 6.041-5.178zM4.09 13.565c.164-.047 3.32-.883 8.164-1.39.293.754.557 1.517.778 2.274a17.206 17.206 0 0 1-5.69 2.508 8.47 8.47 0 0 1-3.252-3.392zm4.72 4.418c2.476-.713 4.49-1.636 5.86-2.585.556 1.474.922 2.885.966 3.06l-.004.017a8.497 8.497 0 0 1-6.822-.492zm8.59-1.127c-.044-.175-.419-1.638-.984-3.14 2.883-.171 5.304.576 5.568.665a8.48 8.48 0 0 1-4.584 2.475z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">Dribbble</h3>
                            <a href="#" class="text-sm text-gray-500 hover:text-gray-700 flex items-center gap-1">
                                dribbble.com
                                <svg class="w-3 h-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                            </a>
                        </div>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200">Design</span>
                </li>

                <li class="group flex items-center justify-between p-4 hover:bg-gray-50 transition-colors cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="shrink-0">
                            <div class="w-10 h-10 bg-blue-600 rounded-md flex items-center justify-center text-white font-bold text-lg tracking-tighter">TS</div>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">TypeScript Handbook</h3>
                            <a href="#" class="text-sm text-gray-500 hover:text-gray-700 flex items-center gap-1">
                                typescriptlang.org
                                <svg class="w-3 h-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                            </a>
                        </div>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200">Development</span>
                </li>

                <li class="group flex items-center justify-between p-4 hover:bg-gray-50 transition-colors cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="shrink-0">
                            <svg class="w-10 h-10 text-sky-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">Tailwind CSS</h3>
                            <a href="#" class="text-sm text-gray-500 hover:text-gray-700 flex items-center gap-1">
                                tailwindcss.com
                                <svg class="w-3 h-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                            </a>
                        </div>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200">Design</span>
                </li>

                <li class="group flex items-center justify-between p-4 hover:bg-gray-50 transition-colors cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="shrink-0">
                            <svg class="w-10 h-10 text-cyan-400" viewBox="-11.5 -10.23174 23 20.46348"><circle cx="0" cy="0" r="2.05" fill="currentColor"/><g stroke="currentColor" stroke-width="1" fill="none"><ellipse rx="11" ry="4.2"/><ellipse rx="11" ry="4.2" transform="rotate(60)"/><ellipse rx="11" ry="4.2" transform="rotate(120)"/></g></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">React Documentation</h3>
                            <a href="#" class="text-sm text-gray-500 hover:text-gray-700 flex items-center gap-1">
                                react.dev
                                <svg class="w-3 h-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                            </a>
                        </div>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200">Development</span>
                </li>

            </ul>
        </div>
        @include('modales.addCategories')
    </main>
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
