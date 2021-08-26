@extends('layouts.front')

@section('title')
    My orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order view
                            <a href="{{ url('orders') }}" class="btn btn-success text-white float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Shipping details</h4><hr>
                                <label for="">Nama</label>
                                <div class="border ">{{ $orders->nama }}</div>
                                <label for="">Email</label>
                                <div class="border ">{{ $orders->email }}</div>
                                <label for="">No Handphone</label>
                                <div class="border ">{{ $orders->phone }}</div>
                                <label for="">Alamat Tujuan</label>
                                <div class="border ">
                                    {{ $orders->adress }},
                                    {{ $orders->city }},
                                    {{ $orders->state }},
                                </div>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered"> 
                                    <h4>Order Details</h4><hr>
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item) 
                                            <tr>
                                                <td>{{ $item->products->nama }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/'.$item->products->image)  }}" width="50px" alt="product image">
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                         </table>
                                        <h4 class="px-2"> Harga Total : <span class="float-end">{{ $orders->total_price }}</span></h4>

                                        <div class="mt-5 px-2">
                                            <label for="">Order Status</label>
                                                <form action="{{ url('update-order/'.$orders->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <select class="form-select" name="order_status">
                                                        <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">pending</option>
                                                        <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">Delivered</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-primary float-end mt-3">Update</button>
                                                </form>
                                        </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection