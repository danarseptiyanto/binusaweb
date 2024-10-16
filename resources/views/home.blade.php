<x-app>
    <div class="bg-gradient-to-tl from-orange-100 via-white to-white py-3 pb-7 md:py-8">
        <div
            class="mx-auto flex w-full flex-col-reverse items-center justify-between px-5 md:max-w-screen-xl md:flex-row md:px-0">
            <div class="flex h-full flex-col justify-between py-4 md:h-[478px] md:py-8">
                <div class="flex items-center gap-2 text-xs text-slate-500 md:text-sm">
                    <div class="flex -space-x-4">
                        <img class="h-8 w-8 rounded-full border-2 border-white md:h-10 md:w-10"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg">
                        <img class="h-8 w-8 rounded-full border-2 border-white md:h-10 md:w-10"
                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg">
                        <img class="h-8 w-8 rounded-full border-2 border-white md:h-10 md:w-10"
                            src="https://flowbite.com/docs/images/people/profile-picture-3.jpg">
                    </div>
                    Gabung ribuan alumni sukses lainnya!
                </div>
                <div class="py-5 md:py-0">
                    <p class="text-lg text-slate-500 md:text-[32px]">
                        Selamat datang di Website
                    </p>
                    <h1 class="mt-2 text-[30px] font-bold leading-none md:text-6xl">SMK Bina Nusantara Semarang</h1>
                    <p class="mt-4 text-base text-slate-500 md:max-w-[527px] md:text-xl">
                        SMK Bina Nusantara Semarang merupakan sekolah yang berfokus pada pendidikan dan keterampilan
                        praktis yang berkualitas
                    </p>
                </div>
                <a href="/ppdb"
                    class="mt-1 flex w-fit items-center gap-2 rounded-full border border-slate-300 p-1 transition duration-150 hover:bg-blue-100 md:mt-0">
                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-700">
                        <i class="ri-arrow-right-up-line text-xl text-white"></i>
                    </div>
                    <p class="me-3 text-[14px] font-bold leading-none">PPDB 2025/26</p>
                </a>
            </div>
            <div id="image-slider" class="relative my-8 w-full overflow-hidden md:w-[800px]">
                <img src="/img/ui/hero.svg" alt="Hero Image 1"
                    class="slider-image transition-transform duration-500 ease-in-out">
                <img src="/img/ui/hero2.svg" alt="Hero Image 2"
                    class="slider-image absolute left-0 top-0 translate-x-full transition-transform duration-500 ease-in-out">
            </div>
        </div>
    </div>
    <div class="mx-auto flex flex-col justify-between px-5 py-10 md:max-w-screen-xl md:flex-row md:px-0 md:py-14">
        <div class="w-full md:w-[900px]">
            <div class="flex items-center justify-between">
                <p class="text-xl font-semibold md:text-3xl">Berita Sekolah</p>
                <a href="/berita">
                    <x-buttons.button>
                        Semua <span class="hidden md:inline-block">Artikel</span>
                        <i class="ri-arrow-right-up-line font-normal"></i>
                    </x-buttons.button>
                </a>
            </div>
            <div class="mt-7 grid grid-cols-1 gap-8 md:grid-cols-2">
                @foreach ($articles as $article)
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
                @endforeach
            </div>
        </div>
        <div class="max-w-[323px] space-y-2">
            <img src="/img/ui/kepala-sekolah.png" class="rounded-3xl bg-[#DDE9F8]">
            <div>
                <h4 class="mt-5 text-2xl font-semibold leading-tight">Sambutan Kepala Sekolah</h4>
                <p class="text-lg font-semibold text-slate-600">Ari Dwi Handoko, S.Pd</p>
            </div>
            <p class="pb-2 leading-relaxed text-slate-500">
                Segala puji bagi Allah SWT yang telah melimpahkan rahmat dan hidayah-Nya kepada kita semua. Selamat
                datang di website resmi SMK Bina Nusantara Semarang, Melalui website ini, kami ingin memperkenalkan
                lebih dekat berbagai program unggulan, fasilitas sekolah, serta kegiatan siswa yang mendukung
                pengembangan potensi mereka secara menyeluruh. Kami juga berupaya menjadikan sekolah ini sebagai
                tempat yang aman, nyaman, dan menyenangkan untuk belajar serta berkembang...
            </p>
            <a href="/sambutan-kepsek">
                <x-buttons.button>
                    Selengkapnya<i class="ri-arrow-right-up-line font-normal"></i>
                </x-buttons.button>
            </a>
        </div>
    </div>
    <div class="bg-slate-100">
        <div class="mx-auto max-w-screen-xl py-16">
            <div>
                <h2 class="text-center text-4xl font-semibold">Kompetensi Keahlian</h2>
                <p class="mx-auto mt-4 w-[560px] text-center text-xl text-slate-500">
                    Jelajahi berbagai pilihan Komptensi kejuruan yang di layani SMK Bina Nusantara Semarang berikut
                    ini
                </p>
            </div>
            <div class="mt-8 grid grid-cols-2 gap-7">
                <div class="flex w-full gap-6 rounded-xl border border-slate-200 bg-white p-9 hover:bg-slate-50">
                    <div
                        class="flex h-14 min-w-14 items-center justify-center rounded-lg border border-blue-500 bg-blue-200">
                        <i class="ri-macbook-line text-xl text-blue-500"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-semibold leading-none">Teknik Komputer dan Jaringan</h4>
                        <p class="mt-2 text-[15px] text-slate-500">
                            Mengelola, merancang, dan memelihara sistem jaringan komputer, serta
                            troubleshooting perangkat keras dan perangkat lunak.
                        </p>
                        <a href="{{ route('jurusan-tkj') }}"
                            class="mt-1.5 inline-block text-base font-semibold text-blue-500">Profil
                            Jurusan TKJ -></a>
                    </div>
                </div>
                <div class="flex w-full gap-6 rounded-xl border border-slate-200 bg-white p-9 hover:bg-slate-50">
                    <div
                        class="flex h-14 min-w-14 items-center justify-center rounded-lg border border-orange-500 bg-orange-200">
                        <i class="ri-settings-line text-xl text-orange-500"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-semibold leading-none">Teknik Sepeda Motor</h4>
                        <p class="mt-2 text-[15px] text-slate-500">
                            Mempersiapkan siswa untuk menjadi teknisi yang ahli dalam perbaikan dan perawatan sepeda
                            motor.
                        </p>
                        <a href="{{ route('jurusan-tsm') }}"
                            class="mt-1.5 inline-block text-base font-semibold text-orange-500">Profil
                            Jurusan TSM -></a>
                    </div>
                </div>
                <div class="flex w-full gap-6 rounded-xl border border-slate-200 bg-white p-9 hover:bg-slate-50">
                    <div
                        class="flex h-14 min-w-14 items-center justify-center rounded-lg border border-red-500 bg-red-200">
                        <i class="ri-shirt-line text-xl text-red-500"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-semibold leading-none">Desain Produksi Busana</h4>
                        <p class="mt-2 text-[15px] text-slate-500">
                            Keterampilan dalam mendesain, membuat pola, menjahit,
                            hingga menghasilkan produk fashion yang kreatif dan sesuai tren.
                        </p>
                        <a href="{{ route('jurusan-dpb') }}"
                            class="mt-1.5 inline-block text-base font-semibold text-blue-500">Profil
                            Jurusan DPB -></a>
                    </div>
                </div>
                <div class="flex w-full gap-6 rounded-xl border border-slate-200 bg-white p-9 hover:bg-slate-50">
                    <div
                        class="flex h-14 min-w-14 items-center justify-center rounded-lg border border-green-500 bg-green-200">
                        <i class="ri-calculator-line text-xl text-green-500"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-semibold leading-none">Akuntansi</h4>
                        <p class="mt-2 text-[15px] text-slate-500">
                            Pengembangan kemampuan dalam pencatatan keuangan, penyusunan laporan, serta
                            analisis keuangan.
                        </p>
                        <a href="{{ route('jurusan-akt') }}"
                            class="mt-1.5 inline-block text-base font-semibold text-blue-500">Profil
                            Jurusan AKT -></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-kelebihan />
    <div class="mx-auto grid max-w-screen-xl grid-cols-3 gap-8 pb-16">
        <div
            class="slide_active:border-indigo-600 group mx-auto w-full rounded-xl border border-solid border-slate-200 bg-white p-6 transition-all duration-500 hover:border-blue-600 hover:shadow-sm">
            <div>
                <h2 class="mb-2 text-lg font-semibold">Pengalaman Yang Luar Biasa</h2>
                <p
                    class="pb-6 text-base leading-6 text-slate-500 transition-all duration-500 group-hover:text-slate-800">
                    Belajar di SMK Binus adalah pengalaman yang luar biasa bagi saya. Selama di sana, saya tidak
                    hanya mendapatkan pengetahuan teoretis, tetapi juga keterampilan praktis yang sangat relevan dengan
                    dunia kerja. Dengan bimbingan para guru yang penuh dedikasi dan fasilitas yang mendukung, saya
                    berhasil mengembangkan kemampuan yang dibutuhkan untuk sukses di bidang saya.
                </p>
            </div>
            <div class="flex items-center gap-5 border-t border-solid border-slate-200 pt-5">
                <img class="h-10 w-10 rounded-full object-cover" src="https://pagedone.io/asset/uploads/1696229969.png"
                    alt="avatar" />
                <div class="block">
                    <h5 class="font-medium leading-none text-slate-900 transition-all duration-500">Ahmad Lutfi Jailani
                    </h5>
                    <span class="text-sm leading-4 text-slate-500">Alumni 2018</span>
                </div>
            </div>
        </div>
        <div
            class="slide_active:border-indigo-600 group mx-auto w-full rounded-xl border border-solid border-slate-200 bg-white p-6 transition-all duration-500 hover:border-blue-600 hover:shadow-sm">
            <div>
                <h2 class="mb-2 text-lg font-semibold">Pengalaman Yang Luar Biasa</h2>
                <p
                    class="pb-6 text-base leading-6 text-slate-500 transition-all duration-500 group-hover:text-slate-800">
                    Belajar di SMK Binus adalah pengalaman yang luar biasa bagi saya. Selama di sana, saya tidak
                    hanya mendapatkan pengetahuan teoretis, tetapi juga keterampilan praktis yang sangat relevan dengan
                    dunia kerja. Dengan bimbingan para guru yang penuh dedikasi dan fasilitas yang mendukung, saya
                    berhasil mengembangkan kemampuan yang dibutuhkan untuk sukses di bidang saya.
                </p>
            </div>
            <div class="flex items-center gap-5 border-t border-solid border-slate-200 pt-5">
                <img class="h-10 w-10 rounded-full object-cover"
                    src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar" />
                <div class="block">
                    <h5 class="font-medium leading-none text-slate-900 transition-all duration-500">Ahmad Lutfi Jailani
                    </h5>
                    <span class="text-sm leading-4 text-slate-500">Alumni 2018</span>
                </div>
            </div>
        </div>
        <div
            class="slide_active:border-indigo-600 group mx-auto w-full rounded-xl border border-solid border-slate-200 bg-white p-6 transition-all duration-500 hover:border-blue-600 hover:shadow-sm">
            <div>
                <h2 class="mb-2 text-lg font-semibold">Pengalaman Yang Luar Biasa</h2>
                <p
                    class="pb-6 text-base leading-6 text-slate-500 transition-all duration-500 group-hover:text-slate-800">
                    Belajar di SMK Binus adalah pengalaman yang luar biasa bagi saya. Selama di sana, saya tidak
                    hanya mendapatkan pengetahuan teoretis, tetapi juga keterampilan praktis yang sangat relevan dengan
                    dunia kerja. Dengan bimbingan para guru yang penuh dedikasi dan fasilitas yang mendukung, saya
                    berhasil mengembangkan kemampuan yang dibutuhkan untuk sukses di bidang saya.
                </p>
            </div>
            <div class="flex items-center gap-5 border-t border-solid border-slate-200 pt-5">
                <img class="h-10 w-10 rounded-full object-cover"
                    src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar" />
                <div class="block">
                    <h5 class="font-medium leading-none text-slate-900 transition-all duration-500">Ahmad Lutfi Jailani
                    </h5>
                    <span class="text-sm leading-4 text-slate-500">Alumni 2018</span>
                </div>
            </div>
        </div>
    </div>
    <x-cta-ppdb />
    <script>
        const slider = document.getElementById('image-slider');
        const images = slider.querySelectorAll('.slider-image');
        let currentIndex = 0;

        function slideImages() {
            const nextIndex = (currentIndex + 1) % images.length;

            images[currentIndex].style.transform = 'translateX(-100%)';
            images[nextIndex].style.transform = 'translateX(0)';

            currentIndex = nextIndex;

            // Prepare the next image
            const nextNextIndex = (nextIndex + 1) % images.length;
            setTimeout(() => {
                images[nextNextIndex].style.transition = 'none';
                images[nextNextIndex].style.transform = 'translateX(100%)';
                setTimeout(() => {
                    images[nextNextIndex].style.transition = 'transform 0.5s ease-in-out';
                }, 50);
            }, 500); // Wait for the current transition to finish
        }

        // Change images every 5 seconds
        setInterval(slideImages, 5000);
    </script>
</x-app>

