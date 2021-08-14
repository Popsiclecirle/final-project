@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Kategori</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Nama</label>
                        <input type="text" value="{{ $category->nama }}" class="form-control" name="nama">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">slug</label>
                        <input type="text" value="{{ $category->slug }}" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">deskripsi</label>
                         <textarea name="deskripsi" rows="3" class="form-control">{{ $category->deskripsi }}</textarea>
                    </div>
                   <div class="col-md-6 mb-3">
                       <label for="">status</label>
                       <input type="checkbox" {{ $category->status == "1" ? 'checked':'' }} name="status">
                   </div>
                   <div class="col-md-6 mb-3">
                       <label for="">popular</label>
                       <input type="checkbox" {{ $category->popular == "1" ? 'checked':'' }} name="popular">
                   </div>
                   <div class="col-md-12 mb-3">
                       <label for="">Meta Title</label>
                       <input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
                   </div>
                   <div class="col-md-12 mb-3">
                       <label for="">Meta Keywords</label>
                       <textarea name="meta_keywords" rows="3" class="form-control">{{ $category->meta_keywords }}</textarea>
                   </div>
                   <div class="col-md-12 mb-3">
                       <label for="">Meta Description</label>
                       <textarea name="meta_descrip" rows="3" class="form-control">{{ $category->meta_descrip }}</textarea>
                   </div>
                   @if ($category->image)
                       <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="Category image">
                   @endif
                   <div class="col-md-12 mb-3">
                       <input type="file" name="image" class="form-control">
                   </div>
                   <div class="col-md-12 mb-3">
                       <button type="submit" class="btn btn-primary">Update</button>
                   </div>
                </div>
            </form>
        </div>
    </div>
@endsection