<x-app>
    <div class="border-t border-t-white/20 bg-gradient-to-r from-blue-600 to-violet-500 px-5 py-10 md:px-5 md:py-16">
        <div class="mx-auto max-w-screen-xl text-white">
            <p class="text-2xl font-bold md:text-3xl">Berita Sekolah</p>
            <p class="mt-1 text-lg md:text-xl">Berita dan Pengumaman Terbaru SMK Binusa</p>
        </div>
    </div>
    <form class="mx-auto mt-6 max-w-screen-xl px-5 md:px-0" action="{{ route('berita') }}" method="GET">
        <label for="default-search" class="sr-only mb-2 text-sm font-medium text-slate-900">Search</label>
        <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                <svg class="h-4 w-4 text-slate-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" name="search"
                class="block w-full rounded-xl border border-slate-300 bg-slate-50 p-4 ps-10 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                placeholder="Cari artikel..." value="{{ request('search') }}" required />
            <button type="submit"
                class="absolute bottom-2.5 end-2.5 rounded-xl bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Search</button>
        </div>
        <select name="label" onchange="this.form.submit()"
            class="mt-2 block w-full rounded-xl border border-slate-300 p-4 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500 md:hidden">
            <option value="">Semua Kategori</option>
            <option value="Berita Sekolah" {{ request('label') == 'Berita Sekolah' ? 'selected' : '' }}>
                Berita Sekolah
            </option>
            <option value="Prestasi Terkini" {{ request('label') == 'Prestasi Terkini' ? 'selected' : '' }}>
                Prestasi Terkini
            </option>
            <option value="Pengumuman" {{ request('label') == 'Pengumuman' ? 'selected' : '' }}>
                Pengumuman
            </option>
            <option value="Teknik Komputer dan Jaringan"
                {{ request('label') == 'Teknik Komputer dan Jaringan' ? 'selected' : '' }}>
                Teknik Komputer dan Jaringan
            </option>
            <option value="Teknik Sepeda Motor" {{ request('label') == 'Teknik Sepeda Motor' ? 'selected' : '' }}>
                Teknik Sepeda Motor
            </option>
            <option value="Desain dan Produksi Busana"
                {{ request('label') == 'Desain dan Produksi Busana' ? 'selected' : '' }}>
                Desain dan Produksi Busana
            </option>
            <option value="Akuntansi" {{ request('label') == 'Akuntansi' ? 'selected' : '' }}>
                Akuntansi
            </option>
        </select>
    </form>
    <div class="mx-auto mt-6 hidden max-w-screen-xl justify-between md:flex">
        <a href="{{ route('berita') }}"
            class="{{ request('label') == '' ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-700' }} inline-block rounded-lg px-4 py-2 text-sm font-medium hover:bg-blue-500 hover:text-white">
            Semua
        </a>
        <a href="{{ route('berita', ['label' => 'Berita Sekolah']) }}"
            class="{{ request('label') == 'Berita Sekolah' ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-700' }} inline-block rounded-lg px-4 py-2 text-sm font-medium hover:bg-blue-500 hover:text-white">
            Berita Sekolah
        </a>
        <a href="{{ route('berita', ['label' => 'Prestasi Terkini']) }}"
            class="{{ request('label') == 'Prestasi Terkini' ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-700' }} inline-block rounded-lg px-4 py-2 text-sm font-medium hover:bg-blue-500 hover:text-white">
            Prestasi Terkini
        </a>
        <a href="{{ route('berita', ['label' => 'Pengumuman']) }}"
            class="{{ request('label') == 'Pengumuman' ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-700' }} inline-block rounded-lg px-4 py-2 text-sm font-medium hover:bg-blue-500 hover:text-white">
            Pengumuman
        </a>
        <a href="{{ route('berita', ['label' => 'Teknik Komputer dan Jaringan']) }}"
            class="{{ request('label') == 'Teknik Komputer dan Jaringan' ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-700' }} inline-block rounded-lg px-4 py-2 text-sm font-medium hover:bg-blue-500 hover:text-white">
            Teknik Komputer dan Jaringan
        </a>
        <a href="{{ route('berita', ['label' => 'Teknik Sepeda Motor']) }}"
            class="{{ request('label') == 'Teknik Sepeda Motor' ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-700' }} inline-block rounded-lg px-4 py-2 text-sm font-medium hover:bg-blue-500 hover:text-white">
            Teknik Sepeda Motor
        </a>
        <a href="{{ route('berita', ['label' => 'Desain dan Produksi Busana']) }}"
            class="{{ request('label') == 'Desain dan Produksi Busana' ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-700' }} inline-block rounded-lg px-4 py-2 text-sm font-medium hover:bg-blue-500 hover:text-white">
            Desain dan Produksi Busana
        </a>
        <a href="{{ route('berita', ['label' => 'Akuntansi']) }}"
            class="{{ request('label') == 'Akuntansi' ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-700' }} inline-block rounded-lg px-4 py-2 text-sm font-medium hover:bg-blue-500 hover:text-white">
            Akuntansi
        </a>
    </div>
    <div class="mx-auto mt-6 grid max-w-screen-xl grid-cols-1 gap-6 px-5 md:grid-cols-3 md:px-0">
        @forelse ($articles as $article)
            <div>
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
        @empty
    </div>
    <div
        class="mx-5 block max-w-screen-xl rounded-xl border-2 border-dashed border-slate-300 px-3 py-14 text-center text-base text-slate-700 md:mx-auto md:text-lg">
        Berita sekolah tidak ditemukan
    </div>
    @endforelse
    </div>
    <div class="mx-auto my-8 max-w-screen-xl px-5 md:px-0">
        {{ $articles->appends(request()->query())->links() }}
    </div>
    <x-cta-ppdb />
</x-app>

