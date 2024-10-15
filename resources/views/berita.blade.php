<x-app>
    <div class="border-t border-t-white/20 bg-gradient-to-r from-blue-600 to-violet-500 py-16">
        <div class="mx-auto max-w-screen-xl text-white">
            <p class="text-3xl font-bold">Berita Sekolah</p>
            <p class="mt-1 text-xl">Berita dan Pengumaman Terbaru SMK Binusa</p>
        </div>
    </div>
    <form class="mx-auto mt-6 max-w-screen-xl">
        <label for="default-search" class="sr-only mb-2 text-sm font-medium text-slate-900">Search</label>
        <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                <svg class="h-4 w-4 text-slate-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full rounded-xl border border-slate-300 bg-slate-50 p-4 ps-10 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                placeholder="Cari artikel..." required />
            <button type="submit"
                class="absolute bottom-2.5 end-2.5 rounded-xl bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Search</button>
        </div>
    </form>
    <div class="mx-auto mb-7 mt-6 grid max-w-screen-xl grid-cols-3 gap-6">
        @foreach ($articles as $article)
            <div class="mb-4">
                <img class="aspect-video rounded-2xl object-cover" src="/upload/{{ $article->thumbnail }}">
                <div class="mt-5 flex gap-7">
                    <div class="flex items-center gap-1.5">
                        <i class="ri-calendar-todo-line text-lg leading-none text-blue-500"></i>
                        <p class="text-sm leading-none text-slate-500">{{ $article->date }}</p>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <i class="ri-user-heart-line text-lg leading-none text-blue-500"></i>
                        <p class="text-sm leading-none text-slate-500">{{ $article->author->name }}</p>
                    </div>
                </div>
                <a href="/berita/{{ $article->slug }}"
                    class="my-2.5 inline-block text-lg font-medium leading-tight">{{ $article->title }}</a>
            </div>
        @endforeach
    </div>
    </div>
    <x-cta-ppdb />
</x-app>

