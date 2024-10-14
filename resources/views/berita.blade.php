<x-app>
    <div class="border-t border-t-blue-600 bg-blue-500 py-16">
        <div class="mx-auto max-w-screen-xl text-white">
            <p class="text-3xl font-bold">Berita Sekolah</p>
            <p class="mt-1 text-xl">Berita dan Pengumaman Terbaru SMK Binusa</p>
        </div>
    </div>
    <div class="mx-auto mb-7 mt-9 grid max-w-screen-xl grid-cols-3 gap-6">
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
