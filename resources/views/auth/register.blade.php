@section('content')
    @extends('layouts.main')
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div >
            <!-- Surname -->
            <div class="mt-4">
                <x-input-label for="surname" :value="__('Surname')" />

                <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required />

                <x-input-error :messages="$errors->get('surname')" class="mt-2" />
            </div>
            <!-- Patronymic -->
            <div class="mt-4">
                <x-input-label for="patronymic" :value="__('Patronymic')" />

                <x-text-input id="patronymic" class="block mt-1 w-full" type="text" name="patronymic" :value="old('patronymic')" required />

                <x-input-error :messages="$errors->get('patronymic')" class="mt-2" />
            </div>
            <!-- Login -->
            <div class="mt-4">
                <x-input-label for="login" :value="__('Login')" />

                <x-text-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required />

                <x-input-error :messages="$errors->get('login')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4 flex-wrap gap-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Уже зарегистрированы?') }}
                </a>

                <x-primary-button class="">
                    {{ __('Зарегистрироваться') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
@endsection
