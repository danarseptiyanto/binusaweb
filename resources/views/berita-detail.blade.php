<x-app>
    <div class="border-t border-t-white/20 bg-gradient-to-r from-blue-600 to-violet-500 py-16">
        <div class="mx-auto max-w-screen-xl text-white">
            <p class="text-xl">Berita Sekolah</p>
            <p class="mt-1 text-3xl font-bold">{{ $article->title }}</p>
        </div>
    </div>
    <div class="mx-auto mb-7 flex max-w-screen-xl justify-between">
        <div>
            <div class="mt-8 flex gap-7 pb-6">
                <div class="flex items-center gap-2">
                    <i class="ri-calendar-todo-line text-xl leading-none text-blue-500"></i>
                    <p class="text-lg leading-none text-slate-500">{{ $article->date }}</p>
                </div>
                <div class="flex items-center gap-2">
                    <i class="ri-user-heart-line text-xl leading-none text-blue-500"></i>
                    <p class="text-lg leading-none text-slate-500">{{ $article->author->name }}</p>
                </div>
            </div>
            <img class="aspect-video w-[835px] rounded-xl object-cover" src="/upload/{{ $article->thumbnail }}">
            <article
                class="prose prose-lg prose-blue max-w-[835px] xl:prose-lg prose-h1:-mb-2 prose-h1:mt-6 prose-p:my-4 prose-p:text-slate-600 prose-a:no-underline prose-img:my-6 prose-img:w-full prose-img:rounded-xl">
                {!! \Illuminate\Support\Str::markdown($article->content) !!}
            </article>
        </div>
        <div class="w-[380px]">
            <div class="mt-8 flex gap-7 pb-6">
                <p class="text-xl font-bold leading-none">Berita Terbaru</p>
            </div>
            @foreach ($otherArticles as $article)
                <div class="mb-5">
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

