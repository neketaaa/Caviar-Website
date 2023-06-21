@extends('layouts.app')

@section('content')
<main>
    <div class="first-view">
        <div class="circles-block">
            <div class="circle"><span class="circle-text gold">Гарантія якості</span></div>
            <div class="circle"><span class="circle-text gold">{іни від 599₴</span></div>
            <div class="circle"><span class="circle-text gold">Доставка <br> 1-2 дні</span></div>
        </div>
    </div>
    <div class="even-block">
        <div class="container">
            <div class="title-wrap">
                <div class="title-line"></div>
                <div class="title gold">Якість</div>
                <div class="title-line"></div>
            </div>
            <div class="content-wrap">
                <div class="content">
                    Насолоджуйтеся насиченим, розкішним смаком нашої ікри преміум-класу, що походить з найкращих осетрових господарств світу. Наша ікра ретельно збирається та обробляється для забезпечення найвищої якості та свіжості, що дозволяє досягти неперевершеного смаку. Зробіть свою вечерю більш вишуканою з нашим асортиментом ікри, доступним вже зараз в нашому онлайн-магазині.
                </div>
                <div class="content-img">
                    <img src="/css/images/red_caviar.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="uneven-block">
        <div class="container">
            <div class="title-wrap">
                <div class="title-line"></div>
                <div class="title gold">Смак</div>
                <div class="title-line"></div>
            </div>
            <div class="content-wrap">
                <div class="content-img"><img src="../css/images/black_caviar.jpg"></div>
                <div class="content">
                    Скуштуйте найвишуканіші декадентські смаки з нашим вишуканим асортиментом ікри. Наша ікра, відібрана експертами, відома своїм виразним маслянистим смаком, що тане в роті. Наш інтернет-магазин пропонує широкий вибір ікри, кожна з яких має унікальний смаковий профіль, який перенесе вас у світ неперевершеної розкоші. Подаруйте собі неперевершений гурманський досвід.
                </div>

            </div>
        </div>
    </div>
    <div class="even-block">
        <div class="container">
            <div class="title-wrap">
                <div class="title-line"></div>
                <div class="title gold">Різноманіття</div>
                <div class="title-line"></div>
            </div>
            <div class="content-wrap">
                <div class="content">
                    Шукаєте різноманітну виняткову ікру на будь-який смак та гаманець? Завітайте до нашого інтернет-магазину. Ми пропонуємо неперевершений асортимент найкращої у світі ікри, від класичних сортів до більш унікальних і рідкісних варіантів. Якщо ви шукаєте традиційну ікру або щось більш екзотичне, у нас є ідеальний вибір, щоб задовольнити ваші бажання. Відчуйте справжнє розкішне задоволення.                    </div>
                <div class="content-img"><img src="../css/images/mixed_caviar.jpg"></div>
            </div>
        </div>
    </div>
    <div class="pre-footer">
        <a href="catalog" class="order gold">Замовити</a>
    </div>
</main>
@endsection
