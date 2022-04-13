@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminProduct') }}" method="POST">
                @csrf
                <input type="text" name="code"  id="code">
                <label for="code">Code</label> <br>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category" style="width: 100px">
                        @foreach ($category as $key=>$value)
                        <option>{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="text" name="nameProduct"  id="nameProduct">
                <label for="nameProduct">Name Product</label><br>
                <input type="text" name="description"  id="description">
                <label for="description">description</label><br>
                {{-- <input type="text" name="category"  id="category">
                <label for="category">category</label><br> --}}
                <input type="text" name="image" id="image">
                <label for="image">image</label><br>
                
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection