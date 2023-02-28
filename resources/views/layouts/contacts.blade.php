<div class="p-4 bg-white my-12">
    <div class="container mx-auto">
        <section>
            <h1 class="font-intelmedium pt-10 text-3xl text-intelblue">
                Contact Us
            </h1>

            <p class="font-intelmedium pb-10 text-xl text-intelblu">
                Get in touch with us and we'll be happy to hear from you!
            </p>

            <form action="" class="max-w-2xl mt-6 grid gap-6 mb-6 md:grid-cols-2">
                <div class="">
                    <label for="name" class="block mb-2 text text-gray-700">Name</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <input type="text" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        placeholder="Jane Doe" required>
                </div>
                <div class="">
                    <label for="email" class="block mb-2 text text-gray-700">Email Address</label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        placeholder="Jane Doe" required>
                </div>
                <div class="col-span-2">
                    <label for="subject" class="block mb-2 text text-gray-700">Subject</label>
                    <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                    <input type="text" id="subject"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        placeholder="JaneDoe@email.com" required>
                </div>
                <div class="col-span-2">
                    <label for="message" class="block mb-2 text text-gray-700">Message</label>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <textarea id="message"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                        required rows="5" value="">
                    </textarea>
                </div>
            </form>
        </section>
    </div>
</div>
