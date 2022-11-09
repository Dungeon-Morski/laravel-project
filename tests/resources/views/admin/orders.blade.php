
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
    <main class="admin__main flex flex-col justify-center" >
        <div class="container">
            <div class="products mt-8">
                <div class="container">
                    <div class="flex gap-4">

                    <p>23423</p>
                    </div>
                    <div class="mt-8">
                        <a class="bg-sky-900 text-white p-2 rounded" href="">Загрузить товар</a>
                    </div>
                </div>
            </div>

        </div>

    </main>
</div>
</body>
</html>

