@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminCategory/'.$model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <input type="text" name="name" value="{{ $model->name }}" id="name">
                <label for="name">name</label> <br>
                <input type="text" name="description" value="{{ $model->description }}" id="description">
                <label for="description">description</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection