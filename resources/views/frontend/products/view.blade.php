@extends('layouts.front')

@section('title', $products->nama)
    


@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('category') }}"> 
                Collections 
            </a>/ 
            <a href="{{ url('category/'.$products->category->slug) }}"> 
                {{ $products->category->nama}} 
            </a>/ 
            <a href="{{ url('category/'.$products->category->slug.'/'.$products->slug) }}">
                {{ $products->nama }}
            </a>
        </h6>
    </div>
</div>

    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100" alt="Product image">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->nama }}
                            @if ($products->trending == '1')
                                <label style="font-size: 16px;" class="float-end badge bg danger trending_tag">Trending</label>
                            @endif
                        </h2>

                        <hr>
                        <label class="me-3">Original Price : <s>Rp. {{ $products->original_price }}</s></label>
                        <label class="fw-bold">Selling Price : Rp. {{ $products->selling_price }}</label>
                        <p class="mt-3">
                            {{ $products->small_description }}
                        </p>
                        <hr>
                        @if ($products->qty > 0)
                            <label class="badge bg-success">In stock</label>
                        @else
                            <label class="badge bg-danger">Out of stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <input type="hidden" value="{{ $products->id }}" class="prod_id">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width:130px">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" value="1" class="qty_input text-center form-control">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-13">
                                
                                <button type="button" class="btn btn-success me-3 float-start">Tambahkan Ke Favorit <i class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-primary addToCartBtn me-3 float-start">Tambahkan Ke Keranjang <i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <h3>Deskripsi</h3>
                    <p class="mt-3">
                        {{ $products->deskripsi }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    
@endsection
