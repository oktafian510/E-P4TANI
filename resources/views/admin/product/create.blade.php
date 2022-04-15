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
<div class="container">
    <div class="card-body">
            <form action="{{ url('adminProduct') }}" method="POST">
                @csrf
                <table class="table col-sm-6">
                    <thead class=" table-dark">
                        <tr>
                        
                        <th scope="col">Label</th>
                        <th scope="col">Input</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="code">Code</label>
                            </th>
                            <td>
                                <input type="text" name="code"  id="code">
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <label for="category">Category</label>
                            </th>
                            <td>
                            <select class="form-control" name="category" id="category" style="width: 100px">
                                @foreach ($category as $key=>$value)
                                <option>{{ $value->name }}</option>
                                @endforeach
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="nameProduct" class="">Name Product</label>
                            </th>
                            <td>
                            <input type="text" name="nameProduct"  id="nameProduct">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="description">description</label>
                            </th>
                            <td>
                            <input type="text" name="description"  id="description">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="category">category</label>
                            </th>
                            <td>
                            <input type="text" name="category"  id="category">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="image">image</label>
                            </th>
                            <td>
                            <input type="text" name="image"  id="image">
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    <div class="btn btn-success" type="submit">SIMPAN</div>
                    
            </form>
    </div>

</div>
        
@endsection