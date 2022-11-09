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
            <p>Редактирование товара</p>
            <form action="{{route('admin.update', $product->id)}}" method="post" class="max-w-max text-white" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card border flex flex-col gap-2 p-4 bg-gray-700">
                    <div class="flex flex-col gap-2">
                        <label for="title">Название</label>
                        <input type="text" id="title" name="title">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="description">Описание</label>
                        <textarea id="description" name="description"></textarea>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="category_id">Категория</label>
                        <select name="category_id" id="category_id">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="price">Цена</label>
                        <input type="number" id="price" name="price">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="image">Фото</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="country_of_origin">Страна производитель</label>
                        <input type="text" id="country_of_origin" name="country_of_origin">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="year_of_release">Год выпуска</label>
                        <input type="number" min="1900" max="2099" step="1" value="2018" id="year_of_release" name="year_of_release">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="model">Модель</label>
                        <input type="text" id="model" name="model">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="quantity">Кол-во</label>
                        <input type="number" id="quantity" name="quantity">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="is_published">Опубликован</label>
                        <select id="is_published" name="is_published" >
                            <option selected value="1">Да</option>
                            <option value="2">Нет</option>

                        </select>
                    </div>
                    <button type="submit" class="edit__btn">Редактировать</button>


                </div>

            </form>
        </div>

    </main>
</div>
</body>
</html>
