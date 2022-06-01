@extends('admin.index')
@section('conten')


    {{-- <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ url('adminCategory') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label for="name">Category</label>
                    <input type="text" name="name"  id="name" class="form-control" placeholder="Please insert...">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                <!-- textarea -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description"  id="description" class="form-control" rows="3" placeholder="Please insert..."></textarea>
                </div>
                </div>
            </div>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>

        </form>
    </div>
    <!-- /.card-body --> --}}

<!-- baru -->
<div class="container">
    <div class="card-body">
            <form action="{{ url('adminProduct') }}" method="POST" enctype="multipart/form-data">
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
                                <div class="form-group">
                                    <input type="file" class="form-control-file"  name="image"  id="image">
                                </div>
                            </td>
                        </tr>
                       
                    </tbody>
                    </table>
                    <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>
                    
            </form>
    </div>
</div>
<!-- end baru -->
        
@endsection