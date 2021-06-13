@extends('layouts.app')
@section('title', 'Travelgo | Package')

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
            </div>
            <div class="my-5">
                <section class="section-popular-content" id="popularContent">
                    <div class="section-popular-travel row justify-content-center">
                        @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column py-5"
                            style="background-image: url('{{ $item->galleries->count() ? Storage::url ($item -> galleries -> first() -> image) : '' }}');">
                                <div class="travel-country">{{ $item->location }}</div>
                                <div class="travel-location">{{ $item->title }}</div>
                                <div class="travel-button">
                                    <a href="{{ route('package-detail', $item->slug)}}" class="btn btn-travel-details px-4">View Details</a>
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