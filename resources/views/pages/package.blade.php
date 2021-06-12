@extends('layouts.app')
@section('title', 'Travelgo | Package')

@section('content')
    <main>
        <div class="my-5">
            <section class="section-popular-content" id="popularContent">
                <div class="container">
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
                </div>
            </section>
        </div>
    </main>
@endsection