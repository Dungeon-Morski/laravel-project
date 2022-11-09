@section('content')
    @extends('layouts.main')
    <div class="products mt-8">
        <div class="container">
            <div class="flex gap-4 ">
                @foreach($products as $product)
                    <form action="" method="post">
                        @csrf
                        <a href="{{route('product.show', $product->id)}}">
                            <div class="card border flex flex-col gap-2 p-4 ">
                                <div class="product__img__container">
                                    <img class="product__img" src="/storage/{{ Str::replace('public', '', $product->image) }}" alt="продукт">
                                </div>
                                <p class="pruduct__title">{{$product->title}}</p>
                                <p class="product__price">{{$product->price}} ₽</p>
                                @auth
                                    <button type="submit">В корзинуy</button>
                                @endauth


                            </div>
                        </a>
                    </form>
                @endforeach

            </div>
        </div>
    </div>
@endsection

