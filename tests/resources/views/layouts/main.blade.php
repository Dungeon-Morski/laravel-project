<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Copy Star</title>
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>
<body class="">
<header class="bg-gray-100 dark:bg-gray-900 w-ful z-10">
    <div class="container">
        <div class="flex items-center justify-between l">
            <a href="{{route('product.index')}}" class="text-white"><img src="{{asset('img/logo.svg')}}" alt="logo"></a>
            <ul class="flex items-center text-white gap-4">
                <li><a href="{{route('product.index')}}">Каталог</a></li>
                <li><a href="{{route('contact')}}">Где нас найти?</a></li>
                <li><a href="{{route('about')}}">О нас</a></li>
            </ul>
            <div>
                @if (Route::has('login'))
                    <div class="top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/cabinet') }}" class="text-sm text-gray-700 dark:text-white ">Кабинет</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-white ">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-white ">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>


        </div>
    </div>
</header>
    @yield('content')
</body>
</html>
