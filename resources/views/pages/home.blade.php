@extends('layouts.app')
@section('title', 'Travelgo')
@section('style')
    <link rel="stylesheet" href="{{url('css/home.css')}}">
@endsection

@section('content')
<header class="home text-center">
    <h1>Explore The Beauty<br>of Indonesia</h1>
    <p class="mt-3">You wish you never knew another country</p>
    <a href="#popular" class="btn btn-get-started px-4 py-2 mt-2">
        Get Started
    </a>
</header>

<main>
    <section class="section-stats d-none d-sm-block">
        <div class="container">
            <div class="row justify-content-center " id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <p class="stats-detail-title">20K</p>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <p class="stats-detail-title">12</p>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <p class="stats-detail-title">3K</p>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <p class="stats-detail-title">72</p>
                    <p>Partners</p>
                </div>
            <div>
        </div>
    </section>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Top Destination</h2>
                    <p>Something that you never try before <br> in this world</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column py-5"
                    style="background-image: url('{{ $item->galleries->count() ? url($item -> galleries -> first() -> image) : '' }}');">
                        <div class="travel-country">{{ $item->location }}</div>
                        <div class="travel-location">{{ $item->title }}</div>
                        <div class="travel-button">
                            <a href="{{ route('package-detail', $item->id)}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>Companies are trusted us<br>more than just a trip.</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{url('images/logos_partner.png')}}" alt="partner-logo" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Moments were giving them <br>the best experience</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('images/testi_1.png')}}" alt="testi_1" class="mb-4 rounded-circle">
                            <p class="h3 mb-4">Ken</p>
                            <p class="testimonial">
                                " It was glorious and I couldn't<br>
                                not stop to say wohooo for<br>
                                every single moment<br>
                                Dankeeeeee "
                            </p>
                        </div>
                        <hr>
                        <p class="trip-top mt-2">Trip to Bandung</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('images/testi_2.png')}}" alt="testi_2" class="mb-4 rounded-circle">
                            <p class="h3 mb-4">Shayna</p>
                            <p class="testimonial">
                                " The trip was amazing and<br>
                                I saw something beautiful in<br>
                                that City that makes me<br>
                                want to learn more "
                            </p>
                        </div>
                        <hr>
                        <p class="trip-top mt-2">Trip to Jakarta</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('images/testi_3.png')}}" alt="testi_3" class="mb-4 rounded-circle">
                            <p class="h3 mb-4">Shabrina</p>
                            <p class="testimonial">
                                " I loved it when the waves<br>
                                was shaking harder — I was<br>
                                scared too "
                            </p>
                        </div>
                        <hr>
                        <p class="trip-top mt-2">Trip to Bali</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 py-2 mt-4 mx-1">I Need Help</a>
                    <a href="{{route('register')}}" class="btn btn-get-started px-4 py-2 mt-4 mx-1">Get Started</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

