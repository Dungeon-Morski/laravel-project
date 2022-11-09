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
            <div class="flex justify-between">
                <div class="flex flex-col gap-2">
                    <p>Актуальные категории:</p>
                    @foreach($categories as $category)
                        <form action="{{route('admin.categoryDestroy', $category->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <p>{{$category->id}}. {{$category->title}} <button class="ml-4 dark:bg-gray-800 rounded text-white p-2" type="submit">Удалить</button></p>
                        </form>
                    @endforeach
                    <a class="bg-black text-white rounded-md text-center py-2" href="{{route('admin.categoriesCreate')}}">Добавить</a>
                </div>


            </div>
        </div>

    </main>
</div>
</body>
</html>
