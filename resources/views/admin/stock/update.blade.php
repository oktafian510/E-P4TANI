@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminStock/'.$model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <input type="text" name="code" value="{{ $model->code }}" id="code">
                <label for="code">Code</label> <br>
                <input type="text" name="size" value="{{ $model->size }}" id="size">
                <label for="size">size</label><br>
                <input type="text" name="stock" value="{{ $model->stock }}" id="stock">
                <label for="stock">stock</label><br>
                <input type="text" name="price" value="{{ $model->price }}" id="price">
                <label for="price">price</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection