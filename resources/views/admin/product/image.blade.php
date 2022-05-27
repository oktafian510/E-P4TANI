@extends('admin.index')
@section('conten')
<!-- baru -->
<div class="container">
    <div class="card-body">
            <form action="{{ url('productImage') }}" method="POST" enctype="multipart/form-data">
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
                                <input disabled type="text"  value="{{ $model->code }}">
                                <input hidden type="text" name="code" value="{{ $model->code }}" id="code">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="category">Category</label>
                            </th>
                            <td>
                                <input disabled type="text"  value="{{ $model->category }}" >
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="nameProduct" class="">Name Product</label>
                            </th>
                            <td>
                                <input type="text" disabled value="{{ $model->nameProduct }}" >
                            </td>
                        </tr>
                       
                        <tr>
                            <th scope="row">
                                <label for="image">image</label>
                            </th>
                            <td>
                                <div class="form-group">
                                    <img style="width: 150px" src="{{ asset('storage/'.$model->image) }}" alt="">
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