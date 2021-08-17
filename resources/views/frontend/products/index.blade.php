@extends('layouts.front')

@section('title')
    {{ $category->nama }}
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
           <a href="{{ url('category') }}"> 
               Collections 
            </a>/ 
            <a href="{{ url('category/'.$category->slug) }}"> 
                {{ $category->nama }} 
            </a>
        </h6>
    </div>
</div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>{{ $category->nama }}</h2>               
                    @foreach ($products as $prod)               
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <a href="{{ url('category/'. $category->slug .'/'. $prod->slug) }}">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="category image">
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
@endsection