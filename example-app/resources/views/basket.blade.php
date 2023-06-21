@extends('layouts.app')

@section('content')
<main>
    <div class="item-container">
        <div class="basket-wrap">
            <span class="is-empty">{{$isempty}}</span>
{{--            <div>{{print_r($items)}}</div>--}}
            @foreach($items as $item)
                <div class="cart-items">
                    <div class="tile">
                        {{--                    <a href="item/{{$good->id}}">--}}
                        <img src="{{$item['img_path']}}" class="tile-img">
                        {{--                    </a>--}}
                        <div class="tile-text">
                            {{$item['name']}} <p>Ціна: {{$item['price']}}грн</p></div>
                    </div>
                    <div class="name">Кількість: {{$item['quantity']}}</div>
                </div>


{{--                <div>--}}
{{--                    <div>{{$item['name']}}</div>--}}
{{--                    <div>{{$item['price']}}</div>--}}
{{--                    <div>{{$item['quantity']}}</div>--}}
{{--                    <img src="{{$item['img_path']}}">--}}
{{--                </div>--}}
            @endforeach

                <a {{$toDisplay}} href="/order" class="order gold">Замовити як гість</a>
                <form {{$toDisplay}} method="POST" action="/clear_cart">
                    @csrf
                    <button style="margin: 1em" id="item_form" class="order gold" type="submit">Очистити корзину</button>
                </form>


        </div>
    </div>
</main>
@endsection

