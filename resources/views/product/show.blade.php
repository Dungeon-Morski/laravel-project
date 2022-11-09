@section('content')
    @extends('layouts.main')
    <div class="products mt-8">
        <div class="container">
            <div class="flex gap-4 flex-col">

                <form action="" method="post">
                    @csrf
                    <div class="show border flex gap-8 p-4">

                        <div class="product__img__container">
                            <img class="product__img" src="/storage/{{ Str::replace('public', '', $product->image) }}" alt="">
                        </div>
                        <div class="flex flex-col justify-center gap-4">

                            <p class="pruduct__title">{{$product->title}}</p>
                            <p class="pruduct__title">Описание:  {{$product->description}}</p>
                            <p class="pruduct__title">Страна производитель: {{$product->country_of_origin}}</p>
                            <p class="pruduct__title">Год выпуска: {{$product->year_of_release}}</p>
                            <p class="pruduct__title">Модель: {{$product->model}}</p>
                            <p class="product__price">Цена: {{$product->price}} ₽</p>
                            <div class="flex gap-4">
                                @auth
                                    <button type="submit">В корзину</button>
                                @endauth
                                <a class="back" href="{{route('product.index')}}">Назад</a>
                            </div>

                        </div>


                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection

