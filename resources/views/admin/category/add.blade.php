@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambahkan Kategori</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">deskripsi</label>
                         <textarea name="deskripsi" rows="3" class="form-control"></textarea>
                    </div>
                   <div class="col-md-6 mb-3">
                       <label for="">status</label>
                       <input type="checkbox" name="status">
                   </div>
                   <div class="col-md-6 mb-3">
                       <label for="">popular</label>
                       <input type="checkbox" name="popular">
                   </div>
                   <div class="col-md-12 mb-3">
                       <label for="">Meta Title</label>
                       <input type="text" class="form-control" name="meta_title">
                   </div>
                   <div class="col-md-12 mb-3">
                       <label for="">Meta Keywords</label>
                       <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                   </div>
                   <div class="col-md-12 mb-3">
                       <label for="">Meta Description</label>
                       <textarea name="meta_descrip" rows="3" class="form-control"></textarea>
                   </div>
                   <div class="col-md-12 mb-3">
                       <input type="file" name="image" class="form-control">
                   </div>
                   <div class="col-md-12 mb-3">
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                </div>
            </form>
        </div>
    </div>
@endsection