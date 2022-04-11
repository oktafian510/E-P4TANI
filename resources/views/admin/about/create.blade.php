@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminAbout') }}" method="POST">
                @csrf
                <input type="text" name="company" id="company">
                <label for="company">company</label><br>
                <input type="text" name="description" id="description">
                <label for="description">description</label><br>
                <input type="text" name="email"  id="email">
                <label for="email">email</label><br>
                <input type="text" name="fb"  id="fb">
                <label for="fb">fb</label><br>
                <input type="text" name="hp"  id="hp">
                <label for="hp">hp</label><br>
                <input type="text" name="ig"  id="ig">
                <label for="ig">ig</label><br>
                <input type="text" name="yt"  id="yt">
                <label for="yt">yt</label><br>
                <input type="text" name="image"  id="image">
                <label for="image">image</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection