@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6 mt-3">
                                <label for="firstName">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="firstName">Email</label>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="firstName">Nomor Hp</label>
                                <input type="text" class="form-control" placeholder="Masukan nomor Handphone">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="firstName">Alamat</label>
                                <input type="text" class="form-control" placeholder="Masukan alamat">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="firstName">kota</label>
                                <input type="text" class="form-control" placeholder="Nama kota">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="firstName">Nama Jalan</label>
                                <input type="text" class="form-control" placeholder="Nama Jalan">
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
                        <button class="btn btn-primary float-end">Beli sekarang</button>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection