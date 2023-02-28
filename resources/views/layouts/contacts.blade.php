<div class="p-4 bg-white my-12">
    <div class="container mx-auto">
        <section>
            {{-- Success --}}
            @if (session()->has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">
                        Thank you for your message!
                    </strong>
                    {{-- <span class="block sm:inline">{{ session('success') }}</span> --}}
                </div>
            @endif

            <h1 class="font-intelmedium pt-10 text-3xl text-intelblue">
                Contact Us
            </h1>

            <p class="font-intelmedium pb-10 text-xl text-intelblu">
                Get in touch with us and we'll be happy to hear from you!
            </p>

            <form action="{{ route('contact.store') }}" method="POST"  class="max-w-2xl mt-6 grid gap-6 mb-6 md:grid-cols-2">
                @csrf
                <div class="">
                    <label for="name" class="block mb-2 text text-gray-700">Name</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <input type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        placeholder="Jane Doe" required>
                </div>
                <div class="">
                    <label for="email" class="block mb-2 text text-gray-700">Email Address</label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        placeholder="Jane Doe" required>
                </div>
                <div class="col-span-2">
                    <label for="subject" class="block mb-2 text text-gray-700">Subject</label>
                    <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                    <input type="text" id="subject" name="subject"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        placeholder="JaneDoe@email.com" required>
                </div>
                <div class="col-span-2">
                    <label for="message" class="block mb-2 text text-gray-700">Message</label>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <textarea id="message" name="message"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        required rows="5" value="">
                    </textarea>
                </div>


                <div class="">
                    <button type="submit"
                        class="text-base h-11 w-44 py-2 bg-intelblue text-center border rounded-full border-intelblue">
                        <span
                            class="hover:underline text-white hover:text-secondary font-intelmedium transition duration-300">
                            Submit
                        </span>
                    </button>
                </div>
            </form>
        </section>
    </div>
</div>
