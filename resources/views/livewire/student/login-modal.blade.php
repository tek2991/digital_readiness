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
            @if ($error)
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-4"
                    role="alert">
                    <span class="block sm:inline">{{ $error }}</span>
                </div>
            @endif
            @if ($message)
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4"
                    role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @endif
            <form action="" wire:submit.prevent="submit">
                <div class="mt-6 grid gap-6 mb-6 md:grid-cols-2">
                    <div class="md:col-span-2">
                        <label for="email" class="block mb-2 text-sm text-gray-700">Email</label>
                        @error('email')
                            <label for="email" class="block mb-2 text-sm text-red-700">{{ $message }}</label>
                        @enderror
                        <input type="email" id="email" wire:model="email" {{ $step != 1 ? 'disabled' : '' }}
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                            placeholder="jane@email.com" required>
                    </div>
                    @if ($step == 2)
                        <div class="md:col-span-2">
                            <label for="user_otp" class="block mb-2 text-sm text-gray-700">Email OTP</label>
                            @error('user_otp')
                                <label for="user_otp" class="block mb-2 text-sm text-red-700">{{ $message }}</label>
                            @enderror
                            <input type="text" id="user_otp" wire:model="user_otp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5"
                                required>
                        </div>
                    @endif
                    <div>
                        <button type="submit"
                            class="text-base h-11 w-44 py-2 bg-intelblue text-center border rounded-full border-intelblue">
                            <span
                                class="hover:underline text-white hover:text-secondary font-intelmedium transition duration-300">
                                @if ($step == 1)
                                    Send Email OTP
                                @else
                                    Verify OTP
                                @endif
                            </span>
                        </button>
                    </div>

                    <div class="col-span-2 mt-3" wire:ignore>
                        @if ($step == 2 )
                            <button id="resend-otp" wire:click="resendOtp" type="button"
                                class="cursor-pointer text-intelblue text-sm ml-1 disabled:text-gray-500 disabled:cursor-default"
                                disabled>
                                Resend OTP
                                <span id="countdown">
                                    {{-- Countdown 2 mins --}}
                                </span>
                            </button>

                            <script>
                                // Countdown 2 mins for resend OTP
                                let timeLeft = 120;
                                let countdown = document.getElementById("countdown");
                                let resendOtp = document.getElementById("resend-otp");
                                let timerId = setInterval(countdownTimer, 1000);
                                
                                function countdownTimer() {
                                    if (timeLeft == 0) {
                                        clearTimeout(timerId);
                                        countdown.innerHTML = "";
                                        resendOtp.disabled = false;
                                        resendOtp.classList.remove("disabled:text-gray-500");
                                        resendOtp.classList.remove("disabled:cursor-default");
                                    } else {
                                        countdown.innerHTML = " (" + timeLeft + "s)";
                                        resendOtp.disabled = true;
                                        resendOtp.classList.add("disabled:text-gray-500");
                                        resendOtp.classList.add("disabled:cursor-default");
                                    }
                                    timeLeft--;
                                }
                            </script>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
