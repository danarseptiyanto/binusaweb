<x-app>
    <div class="bg-slate-100 py-16">
        <div class="mx-auto flex max-w-screen-xl justify-between">
            <img class="h-fit w-[620px] rounded-xl" src="/img/ui/brosur-ppdb.jpeg">
            <form class="w-[620px] rounded-xl bg-white p-10">
                <div class="mb-5">
                    <h1 class="text-2xl font-bold">Formulir PPDB Online</h1>
                    <p class="mt-3 rounded-lg bg-blue-100 px-5 py-3 text-sm text-slate-700">
                        Masukan data-data pendaftar pada formulir dibawah, <b>kami akan segera menghubungi pendaftar via
                            WhatsApp</b> untuk menginformasikan terkait daftar ulang dan pembayaran
                    </p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="mb-2 block text-sm font-medium text-slate-900">Nama Lengkap</label>
                    <input type="text" id="name" name="name"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Masukan Nama Lengkap" required />
                </div>
                <div class="mb-4">
                    <label for="nama" class="mb-2 block text-sm font-medium text-slate-900">Nomor WhatsApp
                        Orang Tua</label>
                    <input type="text" id="name" name="name"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Masukan No Hp" required />
                </div>
                <div class="mb-4">
                    <label for="nama" class="mb-2 block text-sm font-medium text-slate-900">Nomor WhatsApp
                        Siswa</label>
                    <input type="text" id="name" name="name"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Masukan No Hp" required />
                </div>
                <div class="mb-4">
                    <label for="nama" class="mb-2 block text-sm font-medium text-slate-900">Asal Sekolah</label>
                    <input type="text" id="name" name="name"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Masukan Asal Sekolah" required />
                </div>
                <div class="mb-4 grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="mb-2 block text-sm font-medium text-slate-900">Tempat
                            Lahir</label>
                        <input type="text" id="first_name"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="John" required />
                    </div>
                    <div>
                        <label for="last_name" class="mb-2 block text-sm font-medium text-slate-900">Tanggal
                            Lahir</label>
                        <input type="text" id="last_name"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Doe" required />
                    </div>
                    <div>
                        <label for="first_name" class="mb-2 block text-sm font-medium text-slate-900">Nama Ibu</label>
                        <input type="text" id="first_name"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="John" required />
                    </div>
                    <div>
                        <label for="last_name" class="mb-2 block text-sm font-medium text-slate-900">Nama Ayah</label>
                        <input type="text" id="last_name"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Doe" required />
                    </div>
                </div>
                <div class="mb-4">
                    <label for="nama" class="mb-2 block text-sm font-medium text-slate-900">Alamat Rumah</label>
                    <input type="text" id="name" name="name"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Masukan Asal Sekolah" required />
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
