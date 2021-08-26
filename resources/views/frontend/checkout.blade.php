@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6 mt-3">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="nama" placeholder="Nama">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nomor Hp</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->phone }}" name="phone" placeholder="Masukan nomor Handphone">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->adress }}" name="adress" placeholder="Masukan alamat">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">kota</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->city }}" name="city" placeholder="Nama kota">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nama Jalan</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->state }}" name="state" placeholder="Nama Jalan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Order details</h6>
                        <hr>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>jumlah</th>
                                    <th>harga</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($cartitems as $item)
                                <tr>
                                    <td>{{ $item->products->nama }}</td>
                                    <td>{{ $item->prod_qty }}</td>
                                    <td>{{ $item->products->selling_price }}</td>
                                    
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>  
                        <hr>
                        <button type="submit" class="btn btn-primary">Beli sekarang</button>                     
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection