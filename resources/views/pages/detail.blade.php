@extends('layouts.app')
@section('title', 'Travelgo | Package Details')
@section('style')
    <link rel="stylesheet" href="{{url('css/package.css')}}">
@endsection

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        Travel Package
                    </li>
                    <li class="breadcrumb-item active">
                        Details
                    </li>
                </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 my-1">
                    <div class="card card-details">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->location }}</p>
                        @if ($item->galleries->count())
                            <div class="gallery">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ url($item->galleries->first()->image) }}" class="d-block w-100" alt="...">
                                        </div>
                                        @foreach ($item->galleries as $gallery)
                                            <div class="carousel-item">
                                                <img src="{{ url($gallery->image) }}" class="d-block w-100" alt="...">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <h2 class="mt-4">About Destination</h2>
                        <p>{!! $item->about !!}</p>
                        <div class="features row">
                            <div class="col-md-4 my-1 border-start">
                                <div class="description">
                                    <img src="{{url('images/ic_event.png')}}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>{{ $item->featured_event }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-1 border-start">
                                <div class="description">
                                    <img src="{{url('images/ic_language.png')}}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>{{ $item->language }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-1 border-start">
                                <div class="description">
                                    <img src="{{url('images/ic_foods.png')}}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>{{ $item->foods }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-1">
                    <div class="card card-details">
                        <h2><b>Members are going</b></h2>
                        <div class="members my-3">
                            <img src="{{url('images/member_1.png')}}" alt="" class="member_image mr-1">
                            <img src="{{url('images/member_2.png')}}" alt="" class="member_image mr-1">
                            <img src="{{url('images/member_3.png')}}" alt="" class="member_image mr-1">
                            <img src="{{url('images/member_4.png')}}" alt="" class="member_image mr-1">
                            <img src="{{url('images/member_etc.png')}}" alt="" class="member_image mr-1">
                        </div>
                        <hr>
                        <h2>Trip information</h2>
                        <div class="row trip-information mt-2">
                            <div class="col-6">Date of Departure</div>
                            <div class="col-6 text-right">{{ \Carbon\Carbon::create($item->departure_date) -> format('F n, Y')}}</div>
                        </div>
                        <div class="row trip-information mt-2">
                            <div class="col-6">Duration</div>
                            <div class="col-6 text-right">{{ $item->duration }}</div>
                        </div>
                        <div class="row trip-information mt-2">
                            <div class="col-6">Type</div>
                            <div class="col-6 text-right">{{ $item->type }}</div>
                        </div>
                        <div class="row trip-information mt-2">
                            <div class="col-6">Price</div>
                            <div class="col-6 text-right">IDR {{ number_format($item->price) }}</div>
                        </div>
                        <div class="row join-container mt-3">
                            @auth
                            <form action="{{ route('checkout', $item->id)}}" method="post">
                                @csrf
                                <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">Join Now</button>
                            </form>
                            @endauth
                            @guest
                            <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">Login or Register to Join</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
