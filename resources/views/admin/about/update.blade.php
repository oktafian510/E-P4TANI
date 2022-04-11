@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminAbout/'.$model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">

                <input type="text" name="company" value="{{ $model->company }}" id="company">
                <label for="company">company</label><br>
                <input type="text" name="description" value="{{ $model->description }}" id="description">
                <label for="description">description</label><br>
                <input type="text" name="email" value="{{ $model->email }}" id="email">
                <label for="email">email</label><br>
                <input type="text" name="fb" value="{{ $model->fb }}" id="fb">
                <label for="fb">fb</label><br>
                <input type="text" name="hp" value="{{ $model->hp }}" id="hp">
                <label for="hp">hp</label><br>
                <input type="text" name="ig" value="{{ $model->ig }}" id="ig">
                <label for="ig">ig</label><br>
                <input type="text" name="yt" value="{{ $model->yt }}" id="yt">
                <label for="yt">yt</label><br>
                <input type="text" name="image" value="{{ $model->image }}" id="image">
                <label for="image">image</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection