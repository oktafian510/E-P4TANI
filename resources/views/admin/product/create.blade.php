@extends('admin.index')
@section('conten')
<!-- baru -->
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
                                <label for="priceRange">Price</label>
                            </th>
                            <td>
                            <input type="text" name="priceRange"  id="priceRange">
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
                    <button class="btn btn-success" type="submit">SIMPAN</button>
                    
            </form>
    </div>
</div>
<!-- end baru -->
        
@endsection