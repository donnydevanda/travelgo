@extends('layouts.app')
@section('title', 'Travelgo | Package')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{url('css/package.css')}}">
@endsection

@section('content')
    <main>
        <div class="package-header"></div>
        <div class="container package-content">
            <div class="package-search my-1">
                <p class="mb-0">Ready to travel?</p>
                <h1><b>Where do you want to go?</b></h1>
                <form action="{{ route('package') }}" method="GET" role="search">
                    <input type="search" class="form-control rounded" name="search" id="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                </form>
                @if ($searches != "")
                    <p class="mt-1">Showing {{ count($searches) }} results</p>
                @endif
            </div>
            @if ($searches != "")
            <div class="my-5">
                <h2 class="section-popular-package" style="color: #ffffff;">Search Result</h2>
                @if ($searches == "[]")
                    <div class="row my-5 pb-5">
                        <p class="section-popular-package h1 text-center">-- No Result Found --</h1>
                    </div>
                @else
                    <section class="section-popular-content">
                        <div class="section-popular-travel row justify-content-center">
                            @foreach ($searches as $search)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column py-5"
                                style="background-image: url('{{ $search->galleries->count() ? url ($search -> galleries -> first() -> image) : '' }}');">
                                    <div class="travel-country">{{ $search->location }}</div>
                                    <div class="travel-location">{{ $search->title }}</div>
                                    <div class="travel-button">
                                        <a href="{{ route('package-detail', $search->id)}}" class="btn btn-travel-details px-4">View Details</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                @endif
            </div>
            @endif
            <div class="my-5">
                <h2 class="{{$searches != "" ? "" : "section-popular-package"}}" style="{{ $searches == "" ? "color: #ffffff;" : " " }}">Popular Destination</h2>
                <section class="section-popular-content">
                    <div class="section-popular-travel row justify-content-center">
                        @foreach ($populars as $popular)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column py-5"
                            style="background-image: url('{{ $popular->galleries->count() ? url ($popular -> galleries -> first() -> image) : '' }}');">
                                <div class="travel-country">{{ $popular->location }}</div>
                                <div class="travel-location">{{ $popular->title }}</div>
                                <div class="travel-button">
                                    <a href="{{ route('package-detail', $popular->id)}}" class="btn btn-travel-details px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="my-5">
                <h2>Mountain or Beach?</h2>
                <section class="section-popular-content">
                    <div class="section-popular-travel row justify-content-center">
                        @foreach ($mountainBeaches as $mountainBeach)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column py-5"
                            style="background-image: url('{{ $mountainBeach->galleries->count() ? url ($mountainBeach -> galleries -> first() -> image) : '' }}');">
                                <div class="travel-country">{{ $mountainBeach->location }}</div>
                                <div class="travel-location">{{ $mountainBeach->title }}</div>
                                <div class="travel-button">
                                    <a href="{{ route('package-detail', $mountainBeach->id)}}" class="btn btn-travel-details px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
