<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>

<body>
    <div class="hidden bg-slate-800 md:block">
        <div class="mx-auto flex items-center justify-between px-5 text-xs text-white md:max-w-screen-xl md:px-0">
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
    <div class="sticky top-0 z-50 bg-gradient-to-r from-blue-600 to-violet-500">
        <div class="mx-auto flex items-center justify-between px-5 text-white md:max-w-screen-xl md:px-0">
            <a href="/"><img src="/img/ui/logonav.svg"></a>
            <div class="hidden gap-1 md:flex">
                <a href="/"
                    class="{{ request()->routeIs('home') ? 'font-bold border-b-2 border-b-orange-400 bg-blue-300/5' : '' }} px-4 py-5 hover:text-blue-200">
                    Beranda</a>
                <a href="/berita"
                    class="{{ request()->routeIs('berita.detail', 'berita') ? 'font-bold border-b-2 border-b-orange-400 bg-blue-300/5' : '' }} px-4 py-5 hover:text-blue-200">
                    Berita</a>
                <a href="/profil-sekolah"
                    class="{{ request()->routeIs('profil-sekolah') ? 'font-bold border-b-2 border-b-orange-400 bg-blue-300/5' : '' }} px-4 py-5 hover:text-blue-200">Profil
                    Sekolah</a>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="{{ request()->routeIs('jurusan-tkj', 'jurusan-tsm', 'jurusan-dpb', 'jurusan-akt') ? 'font-bold border-b-2 border-b-orange-400 bg-blue-300/5' : '' }} px-4 py-5 hover:text-blue-200">Jurusan
                    <i class="ri-arrow-down-s-line"></i></button>
                {{-- <a href="#" class="hover:text-blue-200 py-5 px-4">Alumni</a> --}}
                <a href="#" class="px-4 py-5 hover:text-blue-200">Kontak Kami</a>
            </div>
            <button type="button" data-modal-target="crypto-modal" data-modal-toggle="crypto-modal"
                class="my-3.5 inline-flex h-fit w-fit items-center rounded-full bg-white/50 p-2 text-center text-sm text-gray-900 hover:bg-gray-100 md:hidden">
                <img class="h-5" src="/img/ui/hamburger.svg" alt="">
            </button>
            <!-- Main modal -->
            <div id="crypto-modal" tabindex="-1" aria-hidden="true"
                class="fixed left-0 right-0 top-0 z-50 hidden h-full max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden bg-black/50 md:inset-0">
                <div class="relative max-h-full w-full max-w-md p-4">
                    <!-- Modal content -->
                    <div class="relative rounded-lg bg-white shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Connect wallet
                            </h3>
                            <button type="button"
                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                                data-modal-toggle="crypto-modal">
                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <p class="text-sm font-normal text-gray-500">Connect with one of our
                                available wallet providers or create a new one.</p>
                            <ul class="my-4 space-y-3">
                                <li>
                                    <a href="#"
                                        class="group flex items-center rounded-lg bg-gray-50 p-3 text-base font-bold text-gray-900 hover:bg-gray-100 hover:shadow">
                                        <span class="ms-3 flex-1 whitespace-nowrap">Opera Wallet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="group flex items-center rounded-lg bg-gray-50 p-3 text-base font-bold text-gray-900 hover:bg-gray-100 hover:shadow">
                                        <span class="ms-3 flex-1 whitespace-nowrap">Opera Wallet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="group flex items-center rounded-lg bg-gray-50 p-3 text-base font-bold text-gray-900 hover:bg-gray-100 hover:shadow">
                                        <span class="ms-3 flex-1 whitespace-nowrap">Opera Wallet</span>
                                    </a>
                                </li>
                            </ul>
                            <div>
                                <a href="#"
                                    class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline">
                                    <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Why do I need to connect with my wallet?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="hidden md:block" href="/ppdb">
                <x-buttons.button>
                    PPDB<i class="ri-arrow-right-up-line font-normal"></i>
                </x-buttons.button>
            </a>
        </div>
        <div id="dropdown" class="z-10 hidden w-[260px] divide-y divide-slate-100 rounded-lg bg-white shadow">
            <ul class="py-2 text-sm text-slate-700" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="{{ route('jurusan-tkj') }}" class="block px-4 py-2 hover:bg-slate-100">
                        <i class="ri-macbook-line me-2 text-blue-500"></i>Teknik Komputer dan Jaringan</a>
                </li>
                <li>
                    <a href="{{ route('jurusan-tsm') }}" class="block px-4 py-2 hover:bg-slate-100">
                        <i class="ri-settings-line me-2 text-blue-500"></i>Teknik Sepeda Motor</a>
                </li>
                <li>
                    <a href="{{ route('jurusan-dpb') }}" class="block px-4 py-2 hover:bg-slate-100">
                        <i class="ri-shirt-line me-2 text-blue-500"></i>Desain dan Produksi Busana</a>
                </li>
                <li>
                    <a href="{{ route('jurusan-akt') }}" class="block px-4 py-2 hover:bg-slate-100">
                        <i class="ri-calculator-line me-2 text-blue-500"></i>Akuntansi</a>
                </li>
            </ul>
        </div>
    </div>

    {{ $slot }}

</body>

<footer class="bg-slate-900">
    <div class="mx-auto w-full max-w-screen-xl py-6 lg:py-8">
        <div class="mt-7 md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="/img/ui/logonav.svg" class="me-3 h-11" alt="FlowBite Logo" />
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6">
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white">Navigasi</h2>
                    <ul class="font-medium text-slate-400">
                        <li class="mb-4">
                            <a href="/berita" class="hover:underline">Berita Sekolah</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">PPDB</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white">Follow us</h2>
                    <ul class="font-medium text-slate-400">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline">Instagram</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">YouTube</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white">Legal</h2>
                    <ul class="font-medium text-slate-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Kebijakan Privasi</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Syarat & Ketetuan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-slate-700 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-slate-400 sm:text-center">© 2024 SMK Bina Nusantara Semarang
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

