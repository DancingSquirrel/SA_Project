<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Larave Layout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <section class="h-screen flex justify-center items-center bg-gray-100">
        <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg flex flex-col items-center">
            <div class="w-1/2">
                <a href="{{ url('/user/welcome') }}">
                    <img src="https://www.iconhome.co.th/media/website/IMG-1617358689824.png" class="h-auto" alt="Logo">
                </a>
            </div>
            <div class="w-1/2 ml-8">
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    

                    <div class="flex items-center justify-end mt-4">
                        <!--                        @if (Route::has('password.request'))-->
                        <!--                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">-->
                        <!--                            {{ __('Forgot your password?') }}-->
                        <!--                        </a>-->
                        <!--                        @endif-->



                        <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>