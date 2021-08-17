@extends('layouts.front')
@section('title')
    E-commerce Popsicle
@endsection

@section('content')
    @include('layouts.inc.frontend.slider')
   

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2> Kategori</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                     @foreach ($trending_category as $tcate)               
                        <div class="item mt-3">
                            <a href="{{ url('category/'.$tcate->slug) }}">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/category/'.$tcate->image) }}" alt="category image">
                                <div class="card-body">
                                    <h4>{{ $tcate->nama }}</h4>
                                    <p>
                                        {{ $tcate->deskripsi }}
                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>               
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Produk yang sedang trending</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                     @foreach ($featured_products as $prod)               
                        <div class="item mt-3">
                            <div class="card">
                                <a href="{{ url('category/'. $tcate->slug .'/'. $prod->slug) }}">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product image">
                                <div class="card-body">
                                    <h4>{{ $prod->nama }}</h4>
                                    <span class="float-start">{{ $prod->selling_price }}</span>
                                </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>               
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
    
@endsection