@extends('layouts.app')

@section('content')

    <main>
        <div class="item-container">
            <div class="basket-wrap">
                <span class="is-empty">Замовлення</span>
                @foreach($items as $item)
                    <div style="text-align: center" class="content ">{{$item['name']}} Ціна: {{$item['price']}} x {{$item['quantity']}}</div>
                @endforeach
                <div style="text-align: center" class="content "><b>Усього: {{$total}}грн</b></div>
                <form style="display: flex; align-items: center; flex-direction: column" method="POST" action="/proceedOrder">
                    @csrf
                    <div class="order-form">
                        <label for="name">Ім`я</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="order-form">
                        <label for="phone">Телефон</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>

                    <div class="order-form">
                        <label for="delivery">Спосіб доставки</label>
                        <select  id="delivery" name="delivery" required>
                            <option value="pickup">Самовіз</option>
                            <option value="np">НП(Експрес)</option>
                            <option value="courier">Кур'єр</option>
                        </select>
                    </div>

                    <button style="margin: 1em" class="order gold" type="submit">Відправити</button>
                </form>
            </div>
        </div>
    </main>








    <style>
        .order-form {
            font-family: KyivType;
            align-self: center;
            font-size: 2em;
            margin: 1em;


        }
        #name, #phone, #delivery {
            font-family: KyivType;
            font-size: .75em;

        }
    </style>
@endsection

