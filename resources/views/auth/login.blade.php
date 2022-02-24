<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-realstate bg-fixed w-full h-full bg-cover">
    <div class="flex h-full justify-center mt-5 pt-5">
        <div class="w-full md:w-2/3 lg:w-1/2 rounded-3xl">
            <section class="break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <header class="font-semibold bg-gray-200 text-gray-700 py-3 text-center sm:py-3 sm:rounded-t-md text-2xl">
                    Login to Realstate
                </header>
                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>
                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror text-xl my-2 w-full text-xl p-2 rounded-xl border-2 border-gray-300" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>
                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror text-xl my-2 w-full text-xl p-2 rounded-xl border-2 border-gray-300" name="password"
                            required>
                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm text-gray-700 text-xl" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                        <a class="text-sm hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto text-xl"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                    <div class="flex flex-wrap">
                        <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-primary hover:bg-blue-700 sm:py-4">
                            Login
                        </button>
                        @if (Route::has('register'))
                        <p class="w-full text-center text-gray-700 my-6 sm:my-8 text-xl">
                            {{ __("Don't have an account?") }}
                            <a class="text-primary hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </div>
</body>
</html>