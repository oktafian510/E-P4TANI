@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminPoster') }}" method="POST">
                @csrf
                <input type="text" name="title"  id="title">
                <label for="title">Judul</label> <br>
                <input type="text" name="description"  id="description">
                <label for="description">description</label><br>
                <input type="text" name="image" id="image">
                <label for="image">image</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection