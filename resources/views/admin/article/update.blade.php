@extends('admin.index')
@section('conten')

<div class="card-body">
    <form action="{{ url('adminArticle/'.$model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">

        <div class="row">
            <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title"  id="title" class="form-control" value="{{ $model->title }}">
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category"  id="category" class="form-control" value="{{ $model->category }}">
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label for="writer">Penulis</label>
                <input type="text" name="writer"  id="writer" class="form-control" value="{{ $model->writer }}">
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description"  id="description" class="form-control" rows="3" placeholder="Please insert...">{{ $model->description }}</textarea>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img style="width: 150px" src="{{ asset('storage/'.$model->image) }}" alt="">
                <input hidden type="text" name="image1" value="{{ $model->image }}" id="image1">
                <div class="form-group">
                    <input type="file" class="form-control-file"  name="image"  id="image">
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>

    </form>
</div>
        
@endsection