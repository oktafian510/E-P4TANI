@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminStock') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="code">Code</label>
                    <select class="form-control" name="code" id="code" style="width: 100px">
                        @foreach ($code as $key=>$value)
                        <option>{{ $value->code }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="text" name="size"  id="size">
                <label for="size">Size</label><br>
                <input type="text" name="stock"  id="stock">
                <label for="stock">stock</label><br>
                {{-- <input type="text" name="category"  id="category">
                <label for="category">category</label><br> --}}
                <input type="text" name="price" id="price">
                <label for="price">price</label><br>
                
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection