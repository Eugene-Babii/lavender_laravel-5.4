@extends('layouts.main')

@section('content')

<!-- Infoblock -->
<section class="page-section">
    <div class="container">
        <div class="card mb-3" style="border: 2px solid #7e179a">
            <div class="row no-gutters bg-primary">
                <div class="col-md-5 img-center p-5">
                    <img src="/images/purple-flower.jpg" class="card-img round" alt="foto of lavender">
                </div>
                <div class="col-md-7">
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bolder">Аренда лавандового полюшка</h5>
                        <p class="mb-3"> В 2020 году открывается аренда лавандового полюшка для фотосеcсий.</p>
                        <p>Попасть на цветущее лавандовое полюшко можно
                            только по предварительному бронированию. </p>
                        <p> Бронирование открывается за 2-3 недели до начала цветения лаванды. </p>
                        <p> Стоимость аренды полюшка - 500 грн/час. </p>
                        <p> Режим роботи поля: з 5.00 до 21.00. </p>
                        <p> Бронирование только онлайн после 100% предоплаты. </p>
                        <p> Перед бронированием просим ознакомиться с правилами аренды полюшка! </p>
                        <div class="intro-button mx-auto">
                            <a class="btn btn-secondary text-primary btn-signup lobster" href="home">Бронировать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Slider -->
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col mx-auto">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="border: 2px solid #7e179a">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/carousel/carousel-1.jpg" class="d-block w-100" alt="foto1">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-2.jpg" class="d-block w-100" alt="foto2">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-3.jpg" class="d-block w-100" alt="foto3">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-4.jpg" class="d-block w-100" alt="foto4">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-5.jpg" class="d-block w-100" alt="foto5">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-6.jpg" class="d-block w-100" alt="foto6">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-7.jpg" class="d-block w-100" alt="foto7">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-8.jpg" class="d-block w-100" alt="foto8">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-9.jpg" class="d-block w-100" alt="foto9">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-10.jpg" class="d-block w-100" alt="fot10">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-11.jpg" class="d-block w-100" alt="foto11">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-12.jpg" class="d-block w-100" alt="foto12">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/carousel/carousel-13.jpg" class="d-block w-100" alt="foto13">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection