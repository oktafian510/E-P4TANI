@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminArticle/'.$model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <input type="text" name="title" value="{{ $model->title }}" id="title">
                <label for="title">Judul</label> <br>
                <input type="text" name="description" value="{{ $model->description }}" id="description">
                <label for="description">description</label><br>
                <input type="text" name="writer" value="{{ $model->writer }}" id="writer">
                <label for="writer">writer</label><br>
                <input type="text" name="category" value="{{ $model->category }}" id="category">
                <label for="category">category</label><br>
                <input type="text" name="image" value="{{ $model->image }}" id="image">
                <label for="image">image</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection