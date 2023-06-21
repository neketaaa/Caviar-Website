@extends('layouts.app')

@section('content')
<main>
    <div class="container-wrap">
        <div class="help-container">
            <div class="title-wrap">
                <div class="title-line"></div>
                <div class="title gold">Каталог</div>
                <div class="title-line"></div>
            </div>
        </div>
        <div class="slider-field">
            <i class="fa-solid fa-chevron-left slider-prev"></i>
            <div class="slider">

                <div class="slider-line">
                    <a href="tile/special"><img src="../css/images/catalog-mixed.png" class="slide-single"></a>
                    <a href="tile/red"><img src="../css/images/catalog-red.png" class="slide-single"></a>
                    <a href="tile/black"><img src="../css/images/catalog-black.png" class="slide-single"></a>
                </div>

            </div>
            <i class="fa-solid fa-chevron-right slider-next"></i>
        </div>
        <div class="catalog-text-wrap">
            <a href="tile/black" id="catalog-black-text" class="catalog-text">Чорна ікра</a>
            <a href="tile/special" id="catalog-offer-text" class="catalog-text">Пропозиція</a>
            <a href="tile/red" id="catalog-red-text" class="catalog-text">Червона ікра</a>
        </div>
    </div>
</main>
    <script>
        const images = document.querySelectorAll('.slider .slider-line img');
        const sliderLine = document.querySelector('.slider .slider-line');
        const caviar_names = document.querySelectorAll('#catalog-red-text, #catalog-black-text, #catalog-offer-text');
        let count = 0;
        let width;

        function text_move() {

            console.log(count, caviar_names[count]);

            if(count == 0) {
                caviar_names[1].style.textDecoration = 'underline';
                caviar_names[0].style.textDecoration = 'none';
                caviar_names[2].style.textDecoration = 'none';
            }
            if(count == 1) {
                caviar_names[2].style.textDecoration = 'underline';
                caviar_names[0].style.textDecoration = 'none';
                caviar_names[1].style.textDecoration = 'none';
            }
            if(count == 2) {
                caviar_names[0].style.textDecoration = 'underline';
                caviar_names[1].style.textDecoration = 'none';
                caviar_names[2].style.textDecoration = 'none';
            }
        }

        function init() {

            console.log('resize');
            width = document.querySelector('.slider').offsetWidth;
            sliderLine.style.width = width * images.length + 'px';
            images.forEach(item => {
                item.style.width = width + 'px';
                item.style.height = 'auto';
            });
            rollSlider();
            mobile_img();
        }

        init();
        window.addEventListener('resize', init);

        document.querySelector('.slider-next').addEventListener('click', function () {
            count++;
            if (count >= images.length) {
                count = 0;
            }
            rollSlider();
        });

        document.querySelector('.slider-prev').addEventListener('click', function () {
            count--;
            if (count < 0) {
                count = images.length - 1;
            }
            rollSlider();
        });

        function rollSlider() {
            sliderLine.style.transform = 'translate(-' + count * width + 'px)';
            text_move();
        }

        function mobile_img() {
            images[0].src = 'css/images/catalog-mixed.png';
            images[1].src = 'css/images/catalog-red.png';
            images[2].src = 'css/images/catalog-black.png';
            if (width < 500) {
                images[0].src = 'css/images/mobile-catalog-mixed.png';
                images[1].src = 'css/images/mobile-catalog-red.png';
                images[2].src = 'css/images/mobile-catalog-black.png';
            }
        }
        window.addEventListener("resize", mobile_img());
    </script>
@endsection

