<div>
    <section class="md:grid md:grid-cols-7 w-full">
        <div class="bg-intelblue md:col-span-3 p-4 md:p-6 md:flex md:flex-col md:justify-center">
            <h2 class="text-white font-intelmedium text-2xl my-4 w-full">Get Started</h2>
            <p class="text-white font-intelregular text-lg my-4 leading-tight">
                Get started with Intel Simulated InternshipProgram. You need to enrol in 3 projects for your internship.
            </p>
            <div class="mx-auto hidden md:block">
                <img src="{{ asset('images/start.png') }}" alt="">
            </div>
        </div>
        <div class="md:col-span-4 p-4 md:p-6">
            <h3 class="font-intelregular text-lg my-4 text-gray-700 leading-tight">
                Sign in to your account to continue.
            </h3>
            <div class="mt-6 grid gap-6 mb-6 md:grid-cols-2">
                <div class="">
                    <label for="email" class="block mb-2 text-sm text-gray-700">Email</label>
                    @error('email')
                        <label for="email" class="block mb-2 text-sm text-red-700">{{ $message }}</label>
                    @enderror
                    <input type="email" id="email" wire:model="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        placeholder="jane@email.com" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm text-gray-700">Password</label>
                    @error('password')
                        <label for="password" class="text-xs text-red-700 block">{{ $message }}</label>
                    @enderror
                    <input id="password" wire:model="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        type="password" placeholder="*******" required />
                </div>
                <div>
                <div class="">
                    <button wire:click="login"
                        class="text-base h-11 w-44 py-2 bg-intelblue text-center border rounded-full border-intelblue">
                        <span
                            class="hover:underline text-white hover:text-secondary font-intelmedium transition duration-300">
                            login
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
