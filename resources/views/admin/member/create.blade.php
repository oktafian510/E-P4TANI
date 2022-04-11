@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminMember') }}" method="POST">
                @csrf
                <input type="text" name="name"  id="name">
                <label for="name">Name</label> <br>
                <input type="text" name="description"  id="description">
                <label for="description">description</label><br>
                <input type="text" name="category"  id="category">
                <label for="category">category</label><br>
                <input type="text" name="image" id="image">
                <label for="image">image</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection