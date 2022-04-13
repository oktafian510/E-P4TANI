@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminProduct/'.$model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <input type="text" name="code" value="{{ $model->code }}" id="code">
                <label for="code">Code</label> <br>
                <input type="text" name="category" value="{{ $model->category }}" id="category">
                <label for="category">category</label><br>
                <input type="text" name="nameProduct" value="{{ $model->nameProduct }}" id="nameProduct">
                <label for="nameProduct">Name Product</label><br>
                <input type="text" name="description" value="{{ $model->description }}" id="description">
                <label for="description">description</label><br>
                <input type="text" name="image" value="{{ $model->image }}" id="image">
                <label for="image">image</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection