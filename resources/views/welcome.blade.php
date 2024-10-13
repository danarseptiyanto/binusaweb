<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>

<body>
    <div class="bg-slate-800">
        <div class="mx-auto flex max-w-screen-xl items-center justify-between text-xs text-white">
            <p>Jl. Kemantren Raya No. 10 Wonosari Ngaliyan - Kota Semarang</p>
            <div class="flex items-center gap-4">
                <div class="flex gap-2">
                    <a href="#" target="_blank"
                        class="flex h-5 w-5 items-center justify-center rounded-full bg-white">
                        <i class="ri-youtube-fill text-slate-800"></i>
                    </a>
                    <a href="#" target="_blank"
                        class="flex h-5 w-5 items-center justify-center rounded-full bg-white">
                        <i class="ri-facebook-fill text-slate-800"></i>
                    </a>
                    <a href="#" target="_blank"
                        class="flex h-5 w-5 items-center justify-center rounded-full bg-white">
                        <i class="ri-instagram-fill text-slate-800"></i>
                    </a>
                </div>
                <p class="bg-blue-700 p-3 px-4 leading-none">(024) 8662971</p>
            </div>
        </div>
    </div>
    <div class="sticky top-0 bg-blue-500">
        <div class="mx-auto flex max-w-screen-xl items-center justify-between py-4 text-white">
            <img src="/img/ui/logonav.svg">
            <div class="flex gap-7">
                <a href="#" class="font-bold hover:text-blue-200">Beranda</a>
                <a href="#" class="hover:text-blue-200">Profile</a>
                <a href="#" class="hover:text-blue-200">Jurusan</a>
                <a href="#" class="hover:text-blue-200">Berita</a>
                <a href="#" class="hover:text-blue-200">Alumni</a>
                <a href="#" class="hover:text-blue-200">Kontak Kami</a>
            </div>
            <button
                class="rounded-full bg-blue-700 px-5 py-2.5 text-[14px] font-semibold text-white transition duration-150 ease-in-out hover:bg-blue-800">
                PPDB<i class="ri-arrow-right-up-line font-normal"></i>
            </button>
        </div>
    </div>
    <div class="bg-gradient-to-tl from-orange-50 via-white to-white py-12">
        <div class="mx-auto flex max-w-screen-xl items-center justify-between">
            <div class="flex h-[478px] flex-col justify-between py-7">
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <div class="flex -space-x-4">
                        <img class="h-10 w-10 rounded-full border-2 border-white"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg">
                        <img class="h-10 w-10 rounded-full border-2 border-white"
                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg">
                        <img class="h-10 w-10 rounded-full border-2 border-white"
                            src="https://flowbite.com/docs/images/people/profile-picture-3.jpg">
                    </div>
                    Gabung ribuan alumni lainnya!
                </div>
                <div>
                    <p class="text-[32px] text-slate-500">
                        Selamat datang di Website
                    </p>
                    <h1 class="mt-2 text-6xl font-bold">SMK Bina Nusantara Semarang</h1>
                    <p class="mt-4 max-w-[527px] text-xl text-slate-500">Upgrade soft skill dan dapatkan sertifikat
                        resmi dari tim Belajar Era Digital dengan mengikuti berbagai event diklat nasional di bawah ini!
                    </p>
                </div>
                <a href="/event"
                    class="mt-1 flex w-fit items-center gap-2 rounded-full border border-slate-300 p-1 transition duration-150 hover:bg-blue-100 md:mt-0">
                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-700">
                        <i class="ri-arrow-right-up-line text-xl text-white"></i>
                    </div>
                    <p class="me-3 text-[14px] font-bold leading-none">PPDB 2025/26</p>
                </a>
            </div>
            <img src="/img/ui/hero.svg">
        </div>
    </div>
    <div class="mx-auto flex max-w-screen-xl justify-between py-14">
        <div class="w-[900px]">
            <div class="flex items-center justify-between">
                <p class="text-3xl font-semibold">Berita Sekolah</p>
                <button
                    class="rounded-full bg-blue-700 px-5 py-2.5 text-[14px] font-semibold text-white transition duration-150 ease-in-out hover:bg-blue-800">
                    Semua Artikel<i class="ri-arrow-right-up-line font-normal"></i>
                </button>
            </div>
            <div class="mt-7 grid grid-cols-2 gap-8">
                <div>
                    <img class="rounded-2xl" src="/img/ui/blog-thumbnail.png">
                    <div class="mt-5 flex gap-7">
                        <div class="flex items-center gap-1.5">
                            <i class="ri-calendar-todo-line text-lg leading-none text-blue-500"></i>
                            <p class="text-sm leading-none text-slate-500">11 October 2024</p>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="ri-user-heart-line text-lg leading-none text-blue-500"></i>
                            <p class="text-sm leading-none text-slate-500">Admin</p>
                        </div>
                    </div>
                    <a href="" class="my-2.5 inline-block text-xl font-medium leading-tight">Kemeriahan
                        Lomba 17 Agustus SMK Bina Nusantara Semarang</a>
                </div>
                <div>
                    <img class="rounded-2xl" src="/img/ui/blog-thumbnail.png">
                    <div class="mt-5 flex gap-7">
                        <div class="flex items-center gap-1.5">
                            <i class="ri-calendar-todo-line text-lg leading-none text-blue-500"></i>
                            <p class="text-sm leading-none text-slate-500">11 October 2024</p>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="ri-user-heart-line text-lg leading-none text-blue-500"></i>
                            <p class="text-sm leading-none text-slate-500">Admin</p>
                        </div>
                    </div>
                    <a href="" class="my-2.5 inline-block text-xl font-medium leading-tight">Kemeriahan
                        Lomba 17 Agustus SMK Bina Nusantara Semarang</a>
                </div>
                <div>
                    <img class="rounded-2xl" src="/img/ui/blog-thumbnail.png">
                    <div class="mt-5 flex gap-7">
                        <div class="flex items-center gap-1.5">
                            <i class="ri-calendar-todo-line text-lg leading-none text-blue-500"></i>
                            <p class="text-sm leading-none text-slate-500">11 October 2024</p>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="ri-user-heart-line text-lg leading-none text-blue-500"></i>
                            <p class="text-sm leading-none text-slate-500">Admin</p>
                        </div>
                    </div>
                    <a href="" class="my-2.5 inline-block text-xl font-medium leading-tight">Kemeriahan
                        Lomba 17 Agustus SMK Bina Nusantara Semarang</a>
                </div>
                <div>
                    <img class="rounded-2xl" src="/img/ui/blog-thumbnail.png">
                    <div class="mt-5 flex gap-7">
                        <div class="flex items-center gap-1.5">
                            <i class="ri-calendar-todo-line text-lg leading-none text-blue-500"></i>
                            <p class="text-sm leading-none text-slate-500">11 October 2024</p>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="ri-user-heart-line text-lg leading-none text-blue-500"></i>
                            <p class="text-sm leading-none text-slate-500">Admin</p>
                        </div>
                    </div>
                    <a href="" class="my-2.5 inline-block text-xl font-medium leading-tight">Kemeriahan
                        Lomba 17 Agustus SMK Bina Nusantara Semarang</a>
                </div>
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
            <button
                class="rounded-full bg-blue-700 px-5 py-2.5 text-[14px] font-semibold text-white transition duration-150 ease-in-out hover:bg-blue-800">
                Selengkapnya<i class="ri-arrow-right-up-line font-normal"></i>
            </button>
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
                        <a href="#" class="mt-1.5 inline-block text-base font-semibold text-blue-500">Profil
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
                        <a href="#" class="mt-1.5 inline-block text-base font-semibold text-orange-500">Profil
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
                        <a href="#" class="mt-1.5 inline-block text-base font-semibold text-blue-500">Profil
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
                        <a href="#" class="mt-1.5 inline-block text-base font-semibold text-blue-500">Profil
                            Jurusan TKJ -></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl py-16">
        <img src="/img/ui/video-thumbnail.jpg" class="rounded-3xl">
    </div>
    <div class="mx-auto grid max-w-screen-xl grid-cols-3 gap-4 pb-16">
        <div>
            <div class="flex h-14 w-14 items-center justify-center rounded-lg border border-blue-500 bg-blue-200">
                <i class="ri-calculator-line text-xl text-blue-500"></i>
            </div>
            <h3 class="mt-5 text-xl font-semibold">SMK Pusat Keunggulan</h3>
            <p class="mb-8 mt-1.5 text-[15px] text-slate-500">
                Mengelola, merancang, dan memelihara sistem jaringan komputer,
                serta troubleshooting
            </p>
        </div>
        <div>
            <div class="flex h-14 w-14 items-center justify-center rounded-lg border border-blue-500 bg-blue-200">
                <i class="ri-calculator-line text-xl text-blue-500"></i>
            </div>
            <h3 class="mt-5 text-xl font-semibold">SMK Pusat Keunggulan</h3>
            <p class="mb-8 mt-1.5 text-[15px] text-slate-500">
                Mengelola, merancang, dan memelihara sistem jaringan komputer,
                serta troubleshooting
            </p>
        </div>
        <div>
            <div class="flex h-14 w-14 items-center justify-center rounded-lg border border-blue-500 bg-blue-200">
                <i class="ri-calculator-line text-xl text-blue-500"></i>
            </div>
            <h3 class="mt-5 text-xl font-semibold">SMK Pusat Keunggulan</h3>
            <p class="mb-8 mt-1.5 text-[15px] text-slate-500">
                Mengelola, merancang, dan memelihara sistem jaringan komputer,
                serta troubleshooting
            </p>
        </div>
        <div>
            <div class="flex h-14 w-14 items-center justify-center rounded-lg border border-blue-500 bg-blue-200">
                <i class="ri-calculator-line text-xl text-blue-500"></i>
            </div>
            <h3 class="mt-5 text-xl font-semibold">SMK Pusat Keunggulan</h3>
            <p class="mt-1.5 text-[15px] text-slate-500">
                Mengelola, merancang, dan memelihara sistem jaringan komputer,
                serta troubleshooting
            </p>
        </div>
        <div>
            <div class="flex h-14 w-14 items-center justify-center rounded-lg border border-blue-500 bg-blue-200">
                <i class="ri-calculator-line text-xl text-blue-500"></i>
            </div>
            <h3 class="mt-5 text-xl font-semibold">SMK Pusat Keunggulan</h3>
            <p class="mt-1.5 text-[15px] text-slate-500">
                Mengelola, merancang, dan memelihara sistem jaringan komputer,
                serta troubleshooting
            </p>
        </div>
        <div>
            <div class="flex h-14 w-14 items-center justify-center rounded-lg border border-blue-500 bg-blue-200">
                <i class="ri-calculator-line text-xl text-blue-500"></i>
            </div>
            <h3 class="mt-5 text-xl font-semibold">SMK Pusat Keunggulan</h3>
            <p class="mt-1.5 text-[15px] text-slate-500">
                Mengelola, merancang, dan memelihara sistem jaringan komputer,
                serta troubleshooting
            </p>
        </div>
    </div>
    <div class="mx-auto flex max-w-screen-xl justify-between gap-8 pb-16">
        <div class="grid grid-cols-1 xl:grid-cols-5">
            <div class="flex h-24 items-center justify-center rounded-l-2xl border border-slate-200">
                <img class="w-[250px] p-6 px-16"
                    src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Logo_AHM.svg">
            </div>
            <div class="flex h-24 items-center justify-center border border-x-0 border-slate-200">
                <img class="w-[250px] p-6 px-16"
                    src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Logo_AHM.svg">
            </div>
            <div class="flex h-24 items-center justify-center border border-slate-200">
                <img class="w-[250px] p-6 px-16"
                    src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Logo_AHM.svg">
            </div>
            <div class="flex h-24 items-center justify-center border border-x-0 border-slate-200">
                <img class="w-[250px] p-6 px-16"
                    src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Logo_AHM.svg">
            </div>
            <div class="flex h-24 items-center justify-center rounded-r-2xl border border-slate-200">
                <img class="w-[250px] p-6 px-16"
                    src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Logo_AHM.svg">
            </div>
        </div>
    </div>
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
    <div>
        <div
            class="mx-auto mb-16 flex max-w-screen-xl flex-col items-center justify-between rounded-2xl bg-gradient-to-r from-blue-700 to-violet-600 p-10 lg:flex-row lg:px-20 lg:py-14">
            <div class="mb-5 block text-center lg:mb-0 lg:text-left">
                <h2 class="font-manrope mb-5 text-4xl font-semibold text-white lg:mb-2">
                    PPDB Sudah Dibuka
                </h2>
                <p class="text-xl text-indigo-100">
                    Penerimaan peserta Didik Baru TA 2025/26
                </p>
            </div>
            <a href="#"
                class="flex items-center gap-2 rounded-full bg-white px-8 py-4 text-lg font-semibold text-indigo-600 shadow-sm transition-all duration-500">Daftar
                Sekarang
                <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.75 7L16.4167 7M11.8333 12.5L16.6852 7.64818C16.9907 7.34263 17.1435 7.18985 17.1435 7C17.1435 6.81015 16.9907 6.65737 16.6852 6.35182L11.8333 1.5"
                        stroke="#4F46E5" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>

</body>

<footer class="bg-slate-900">
    <div class="mx-auto w-full max-w-screen-xl py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="me-3 h-8" alt="FlowBite Logo" />
                    <span class="self-center whitespace-nowrap text-2xl font-semibold text-white">Flowbite</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6">
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white">Resources</h2>
                    <ul class="font-medium text-slate-400">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white">Follow us</h2>
                    <ul class="font-medium text-slate-400">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white">Legal</h2>
                    <ul class="font-medium text-slate-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-slate-700 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-slate-400 sm:text-center">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>
            <div class="mt-4 flex sm:mt-0 sm:justify-center">
                <a href="#" class="hover:text-white">
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="ms-5 text-slate-500 hover:text-white">
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 21 16">
                        <path
                            d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                    </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="ms-5 text-slate-500 hover:text-white">
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 17">
                        <path fill-rule="evenodd"
                            d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="ms-5 text-slate-500 hover:text-white">
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">GitHub account</span>
                </a>
                <a href="#" class="ms-5 text-slate-500 hover:text-white">
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Dribbble account</span>
                </a>
            </div>
        </div>
    </div>
</footer>

</html>

