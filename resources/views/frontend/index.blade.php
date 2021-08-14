@extends('layouts.front')
@section('title')
    E-commerce Popsicle
@endsection

@section('content')
    @include('layouts.inc.frontend.slider')
    <h1>Selamat datang di web</h1>

    <div class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($featured_products as $prod)               
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/products/
                        '.$prod->image) }}" alt="Product image">
                        <div class="card-body">
                            <h4>{{ $prod->nama }}</h4>
                            <small>{{ $prod->selling_price }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection