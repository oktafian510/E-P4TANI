@extends('admin.index')
@section('conten')
        <div class="card-body">

            <form action="{{ url('adminCategory') }}" method="POST">
                @csrf
                <input type="text" name="name" id="name">
                <label for="name">name</label> <br>
                <input type="text" name="description" id="description">
                <label for="description">description</label><br>

            
            
                <button type="submit">SIMPAN</button>
            
            </form>
            
        </div>
@endsection