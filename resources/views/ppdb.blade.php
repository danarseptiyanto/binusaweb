<x-app>
    <div class="bg-slate-100 py-6 md:py-16">
        @if (session('success'))
            <div class="mx-auto max-w-screen-xl p-5 md:p-0">
                <div id="alert-additional-content-5" class="mb-10 rounded-lg border border-slate-200 bg-white p-8"
                    role="alert">
                    <div class="flex items-center">
                        <i class="ri-checkbox-circle-fill me-1.5 text-lg text-green-500"></i>
                        <h3 class="text-lg font-bold text-slate-800">Pendaftaran Berhasil!</h3>
                    </div>
                    <div class="mb-4 mt-2 text-slate-500">
                        Terima kasih sudah mendaftar! Informasi pendaftaran kamu sudah tercatat, kami akan segera
                        menghubungi anda via WhatsApp untuk menginformasikan terkait daftar ulang, pembayaran dan
                        onformasi
                        penting lainnya!
                    </div>
                    <div class="flex">
                        <button type="button"
                            class="rounded-lg border border-slate-700 bg-transparent px-3 py-1.5 text-center text-xs font-medium text-slate-800 hover:bg-slate-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-slate-300"
                            data-dismiss-target="#alert-additional-content-5" aria-label="Close">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        @endif
        <div class="mx-5 flex max-w-screen-xl flex-col-reverse justify-between md:mx-auto md:flex-row">
            <img class="h-fit w-[620px] rounded-xl" src="/img/ui/brosur-ppdb.jpeg">
            <form action="{{ route('ppdb.create') }}" method="POST"
                class="mb-7 w-full rounded-xl bg-white p-5 md:mb-7 md:w-[620px] md:p-10">
                @csrf
                <div class="mb-5">
                    <h1 class="text-2xl font-bold">Formulir PPDB Online</h1>
                    <p class="mt-3 rounded-lg bg-blue-100 px-5 py-3 text-sm text-slate-700">
                        Masukan data-data pendaftar pada formulir dibawah, <b>kami akan segera menghubungi pendaftar via
                            WhatsApp</b> untuk menginformasikan terkait daftar ulang dan pembayaran
                    </p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="mb-2 block text-sm font-medium text-slate-900">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Cth. Rafif Andi Pratama" required />
                </div>
                <div class="mb-4">
                    <label for="wa-ortu" class="mb-2 block text-sm font-medium text-slate-900">Nomor WhatsApp
                        Orang Tua</label>
                    <input type="text" id="wa-ortu" name="wa-ortu"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Cth. 081234567890" required />
                </div>
                <div class="mb-4">
                    <label for="wa-siswa" class="mb-2 block text-sm font-medium text-slate-900">Nomor WhatsApp
                        Siswa</label>
                    <input type="text" id="wa-siswa" name="wa-siswa"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Cth. 081234567890" required />
                </div>
                <div class="mb-4">
                    <label for="asal-sekolah" class="mb-2 block text-sm font-medium text-slate-900">Asal Sekolah</label>
                    <input type="text" id="asal-sekolah" name="asal-sekolah"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Cth. SMP N 18 Semarang" required />
                </div>
                <div class="mb-4 grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="tpt-lahir" class="mb-2 block text-sm font-medium text-slate-900">Tempat
                            Lahir</label>
                        <input type="text" id="tpt-lahir" name="tpt-lahir"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Semarang" required />
                    </div>
                    <div>
                        <label for="tgl-lahir" class="mb-2 block text-sm font-medium text-slate-900">Tanggal
                            Lahir</label>
                        <input type="text" id="tgl-lahir" name="tgl-lahir"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="12 Desember 2009" required />
                    </div>
                    <div>
                        <label for="ibu" class="mb-2 block text-sm font-medium text-slate-900">Nama Ibu</label>
                        <input type="text" id="ibu" name="ibu"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Cth. Siti" required />
                    </div>
                    <div>
                        <label for="ayah" class="mb-2 block text-sm font-medium text-slate-900">Nama Ayah</label>
                        <input type="text" id="ayah" name="ayah"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Cth. Abdul" required />
                    </div>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="mb-2 block text-sm font-medium text-slate-900">Alamat Rumah</label>
                    <input type="text" id="alamat" name="alamat"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Cth. Jln. Walisongo No. 1, Kel. Tambakaji, Kec. Ngaliyan, Kota Semarang"
                        required />
                </div>

                {{-- <div class="mb-4 flex items-start">
                    <div class="flex h-5 items-center">
                        <input id="remember" type="checkbox" value=""
                            class="focus:ring-3 h-4 w-4 rounded border border-slate-300 bg-slate-50 focus:ring-blue-300"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-slate-900">I agree with the
                        <a href="#" class="text-blue-600 hover:underline">terms and
                            conditions</a>.</label>
                </div> --}}
                <x-buttons.button type="submit">Daftar Sekarang</x-buttons.button>
            </form>
        </div>
    </div>
</x-app>

