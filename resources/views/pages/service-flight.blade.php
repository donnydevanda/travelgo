@extends('layouts.app')
@section('title', 'Travelgo | Flight')
@section('style')
    <link rel="stylesheet" href="./css/service.css">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-7 my-auto">
                    <h1>Best Price</h1>
                    <p class="h3">For your best experience.</p>
                    <button class="btn btn-deal px-3 py-2 my-2">Check our special deal!</button>
                </div>
                <div class="col-5">
                    <div class="card px-3" style="width: 100%;">
                        <div class="card-body">
                            <form>
                                <div class="form-group py-2">
                                    <label for="exampleInputEmail1">Departure City</label>
                                    <input class="form-control form-control-lg" type="text" placeholder="CGK - Jakarta">
                                </div>
                                <div class="form-group py-2">
                                    <label for="exampleInputEmail1">Arrival City</label>
                                    <input class="form-control form-control-lg" type="text" placeholder="DPS - Denpasar">
                                </div>
                                <div class="form-group py-2">
                                    <label for="exampleInputPassword1">Departure</label>
                                    <input class="form-control form-control-lg" type="date" placeholder="DOE Passport"">
                                </div>
                                <div class="form-group py-2">
                                    <label for="exampleInputPassword1">Return</label>
                                    <input class="form-control form-control-lg" type="date" placeholder=".form-control-lg">
                                </div>
                                <button type="submit" class="btn btn-orange my-4 px-2 py-2" style="width: 100%">Search</button>
                            </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </header>
@endsection
