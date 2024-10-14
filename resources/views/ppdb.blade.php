<x-app>
    <div class="bg-slate-50 py-16">
        <div class="mx-auto flex max-w-screen-xl justify-between">
            <img class="h-fit w-[620px] rounded-2xl"
                src="https://belajareradigital.com/pendaftaran/WEBINAR%2024%20OKTOBER.png">
            <form class="w-[620px] rounded-2xl bg-white p-10">
                <div class="mb-6">
                    <label for="nama" class="mb-2 block text-sm font-medium text-slate-900">Email
                        address</label>
                    <input type="text" id="name" name="name"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="john.doe@company.com" required />
                </div>
                <div class="mb-6">
                    <label for="nama" class="mb-2 block text-sm font-medium text-slate-900">Nomor WhatsApp (WA)
                        Aktif</label>
                    <input type="text" id="name" name="name"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="john.doe@company.com" required />
                </div>
                <div class="mb-6 grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="mb-2 block text-sm font-medium text-slate-900">First
                            name</label>
                        <input type="text" id="first_name"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="John" required />
                    </div>
                    <div>
                        <label for="last_name" class="mb-2 block text-sm font-medium text-slate-900">Last
                            name</label>
                        <input type="text" id="last_name"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Doe" required />
                    </div>
                    <div>
                        <label for="company" class="mb-2 block text-sm font-medium text-slate-900">Company</label>
                        <input type="text" id="company"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Flowbite" required />
                    </div>
                    <div>
                        <label for="phone" class="mb-2 block text-sm font-medium text-slate-900">Phone
                            number</label>
                        <input type="tel" id="phone"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                    </div>
                    <div>
                        <label for="website" class="mb-2 block text-sm font-medium text-slate-900">Website
                            URL</label>
                        <input type="url" id="website"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="flowbite.com" required />
                    </div>
                    <div>
                        <label for="visitors" class="mb-2 block text-sm font-medium text-slate-900">Unique
                            visitors (per month)</label>
                        <input type="number" id="visitors"
                            class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="" required />
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="mb-2 block text-sm font-medium text-slate-900">Email
                        address</label>
                    <input type="email" id="email"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="john.doe@company.com" required />
                </div>
                <div class="mb-6">
                    <label for="password" class="mb-2 block text-sm font-medium text-slate-900">Password</label>
                    <input type="password" id="password"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="•••••••••" required />
                </div>
                <div class="mb-6">
                    <label for="confirm_password" class="mb-2 block text-sm font-medium text-slate-900">Confirm
                        password</label>
                    <input type="password" id="confirm_password"
                        class="block w-full rounded-lg border border-slate-300 bg-slate-50 p-2.5 text-sm text-slate-900 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="•••••••••" required />
                </div>
                <div class="mb-6 flex items-start">
                    <div class="flex h-5 items-center">
                        <input id="remember" type="checkbox" value=""
                            class="focus:ring-3 h-4 w-4 rounded border border-slate-300 bg-slate-50 focus:ring-blue-300"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-slate-900">I agree with the
                        <a href="#" class="text-blue-600 hover:underline">terms and
                            conditions</a>.</label>
                </div>
                <button type="submit"
                    class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto">Submit</button>
            </form>
        </div>
    </div>
</x-app>
