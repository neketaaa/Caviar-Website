<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script src="https://kit.fontawesome.com/bc0ada2434.js" crossorigin="anonymous"></script>
    <title>Caviar Revolution</title>

</head>
<body>
<header>
    <div class="header">
        <div class="naming">
            <h1 class="name gold">Caviar Revolution</h1>
            <h6 class="sec-name gold">Інтернет магазин ікри</h6>
        </div>
        <a href="/catalog" class="order gold">До каталогу</a>
        <!--        <a href="catalog.html" class="order gold">Замовити</a>-->
        <div class="hech">
            <a href="/basket"><i class="fa-solid fa-basket-shopping gold"></i></a>
            <!--            <a href="basket.html"><i class="fa-solid fa-basket-shopping gold"></i></a>-->
            <!--                <i class="fa-solid fa-bars gold"></i>-->
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="footer-left">
        <div class="footer-naming">
            <span class="footer-name">Caviar Revolution</span>
            <span class="footer-sec-name">Смак, що дарує насолоду</span>
        </div>
        <div class="contact-wrap">
            <span class="contact">Напиши нам</span>
            <i class="fa-brands fa-viber fa-2xl"></i>
            <i class="fa-brands fa-telegram fa-2xl"></i>
            <i class="fa-brands fa-instagram  fa-2xl"></i>
        </div>
    </div>
    <a href="/about" class="footer-right"><b>Про нас</b>
        <br> Постачальники
        <br> Гарантія якості
        <br> Доставка
    </a>
    <a href="/catalog" class="footer-right"><b>Каталог</b>
        <br> Червона ікра
        <br> Чорна ікра
        <br> Пропозиція місяця
    </a>

</footer>
</body>
</html>
