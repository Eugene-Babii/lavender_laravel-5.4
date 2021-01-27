@extends('layouts.layout')

@section('content')
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class="bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4" class="bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5" class="bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6" class="bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7" class="bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="8" class="bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="9" class="bg-secondary"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="10" class="bg-secondary"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/rules/title.jpg" class="d-block w-100" alt="title">
                        </div>
                        <div class="carousel-item">
                            <img src="images/rules/rule1.jpg" class="d-block w-100" alt="rule1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/rules/rule2.jpg" class="d-block w-100" alt="rule2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/rules/rule3.jpg" class="d-block w-100" alt="rule3">
                        </div>
                        <div class="carousel-item">
                            <img src="images/rules/rule4.jpg" class="d-block w-100" alt="rule4">
                        </div>
                        <div class="carousel-item">
                            <img src="images/rules/rule5.jpg" class="d-block w-100" alt="rule5">
                        </div>
                        <div class="carousel-item">
                            <img src="images/rules/rule6.jpg" class="d-block w-100" alt="rule6">
                        </div>
                        <div class="carousel-item">
                            <img src="images/rules/rule7.jpg" class="d-block w-100" alt="rule7">
                        </div>
                        <div class="carousel-item">
                            <img src="images/rules/rule8.jpg" class="d-block w-100" alt="rule8">
                        </div>
                        <div class="carousel-item">
                            <img src="images/rules/end.jpg" class="d-block w-100" alt="end">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection