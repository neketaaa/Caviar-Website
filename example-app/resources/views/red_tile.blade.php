@extends('layouts.app')

@section('content')
<main>
    <div class="container-wrap">
        <div class="help-container">
            <div class="title-wrap">
                <div class="title-line"></div>
                <div class="title gold">Червона ікра</div>
                <div class="title-line"></div>
            </div>
        </div>
        <div class="tile-wrap">
            @foreach($goods as $good)
                <div class="tile"><a href="item_forel400"><img src="{{$good->img_path}}" class="tile-img"></a><div class="tile-text">{{$good->naming}} <p>Ціна: {{$good->price}}</p></div></div>
            @endforeach
        </div>
    </div>
</main>
@endsection

