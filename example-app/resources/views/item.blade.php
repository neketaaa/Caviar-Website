@extends('layouts.app')

@section('content')
    <main>
        <div class="item-container">
            <div class="item-wrap">
                <div class="item-photo"><img src="../{{$good->img_path}}"></div>
                <div class="item-info">
                    <div class="item-title">{{$good->naming}}</div>
                    <div class="item-price">Ціна: {{$good->price}}грн</div>
                    <div style="align-self: flex-start; margin-bottom: 1em" id="counter-title"><strong>Кількість</strong></div>
{{--                    <div id="counter">--}}
{{--                        <input type="button" id="buttonCountMinus" value="-">--}}
{{--                        <div id="buttonCountNumber">1</div>--}}
{{--                        <input type="button" id="buttonCountPlus" value="+">--}}
{{--                    </div>--}}
{{--                    <a href="item/{{$good->id}}" class="order gold">У кошик</a>--}}
                    <div>
                        <form  method="POST" action="/cart/{{ $good->id }}">
                            @csrf
                            <input style="cursor: text" class="order gold" type="number" name="quantity" value="1" min="1" max="10" />
                            <button class="order gold" type="submit">У кошик</button>

                        </form>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </main>
@endsection

