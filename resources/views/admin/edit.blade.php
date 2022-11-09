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
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="admin__main flex flex-col justify-center" style="min-height: 90vh;">
        <div class="container">
            <form action="" method="post" class="max-w-max text-white">
                @csrf
{{--                @method('patch')--}}
                <a href="{{route('admin.show', $product->id)}}">
                    <div class="card border flex flex-col gap-2 p-4 bg-gray-700">


                        <div class="product__img__container max-w-[250px]">
                            <img class="product__img" src="{{$product->image}}" alt="">
                        </div>
                        <p class="pruduct__title">{{$product->title}}</p>
                        <p class="product__price">{{$product->price}} ₽</p>
                        @auth

                            <button type="submit">Обновить</button>

                        @endauth


                    </div>
                </a>
            </form>
        </div>

    </main>
</div>
</body>
</html>
