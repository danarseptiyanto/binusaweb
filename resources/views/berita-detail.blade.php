<x-app>
    <div class="border-t border-t-white/20 bg-gradient-to-r from-blue-600 to-violet-500 px-5 py-10 md:px-5 md:py-16">
        <div class="mx-auto max-w-screen-xl text-white">
            <p class="text-base md:text-xl">Berita Sekolah</p>
            <p class="mt-1 text-xl font-bold md:text-3xl">{{ $article->title }}</p>
        </div>
    </div>
    <div class="mx-auto mb-7 flex max-w-screen-xl flex-col justify-between px-5 md:flex-row md:px-0">
        <div>
            <div class="mt-8 flex gap-7 pb-6">
                <div class="flex items-center gap-2">
                    <i class="ri-calendar-todo-line text-base leading-none text-blue-500 md:text-xl"></i>
                    <p class="text-base leading-none text-slate-500 md:text-lg">{{ $article->date }}</p>
                </div>
                <div class="flex items-center gap-2">
                    <i class="ri-user-heart-line text-base leading-none text-blue-500 md:text-xl"></i>
                    <p class="text-base leading-none text-slate-500 md:text-lg">{{ $article->author->name }}</p>
                </div>
            </div>
            <img class="aspect-video w-[835px] rounded-xl object-cover" src="/upload/{{ $article->thumbnail }}">
            <article
                class="prose prose-base prose-blue max-w-[835px] xl:prose-lg prose-h1:-mb-2 prose-h1:mt-6 prose-p:my-4 prose-p:text-slate-600 prose-a:no-underline prose-img:my-6 prose-img:w-full prose-img:rounded-xl">
                {!! \Illuminate\Support\Str::markdown($article->content) !!}
            </article>
        </div>
        <div class="w-full md:w-[380px]">
            @if ($article->label)
                <div class="mt-8 flex gap-7 pb-8">
                    <p class="text-xl font-bold leading-none">Kategori</p>
                </div>
                @foreach (json_decode($article->label) as $label)
                    <a href="{{ route('berita', ['label' => $label]) }}"
                        class="mb-2 me-2 inline-block rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-blue-500 hover:text-white md:text-base">{{ $label }}</a>
                @endforeach
            @endif
            <div class="mt-8 flex gap-7 pb-8">
                <p class="text-xl font-bold leading-none">Berita Terbaru</p>
            </div>
            @foreach ($otherArticles as $article)
                <div class="mb-4">
                    <a href="/berita/{{ $article->slug }}">
                        <img class="aspect-video rounded-2xl object-cover hover:scale-[0.99] hover:transform hover:object-center hover:duration-300"
                            src="/upload/{{ $article->thumbnail }}">
                    </a>
                    <div class="mt-5 flex gap-7">
                        <div class="flex items-center gap-1.5">
                            <i class="ri-calendar-todo-line text-lg leading-none text-blue-500"></i>
                            <p class="text-xs leading-none text-slate-500 md:text-sm">{{ $article->date }}</p>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="ri-user-heart-line text-lg leading-none text-blue-500"></i>
                            <p class="text-xs leading-none text-slate-500 md:text-sm">{{ $article->author->name }}
                            </p>
                        </div>
                    </div>
                    <a href="/berita/{{ $article->slug }}"
                        class="my-2.5 inline-block text-lg font-medium leading-tight transition duration-200 hover:text-blue-700 md:text-xl">{{ $article->title }}</a>
                </div>
            @endforeach
        </div>
    </div>
    <x-cta-ppdb />
</x-app>

