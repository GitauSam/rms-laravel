<x-guest-layout>
    <style>
        
    </style>
    <x-jet-authentication-card>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <div class="w-full relative">
                    <input id="password-field" type="password" 
                        class="text-black block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
                        name="password" required autocomplete="current-password">
                    <span toggle="#password-field" class="field-icon toggle-password" onclick="toggleViewPass()"><i class="fas fa-eye field"></i></span>
                </div>
            </div>

            <script>
                function toggleViewPass() {
                    var input = document.getElementById("password-field")
                    if (input.getAttribute("type") == "password") {
                        input.setAttribute("type", "text");
                    } else {
                        input.setAttribute("type", "password");
                    }
                }
            </script>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-black">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4 mr-4">
                <a class="underline text-xs text-black hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Not yet registered? Click here to sign up') }}
                </a>
            </div>

            <div class="flex items-center justify-end mt-2">
                @if (Route::has('password.request'))
                    <a class="underline text-xs text-black hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
