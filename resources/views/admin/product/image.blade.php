@extends('admin.index')
@section('conten')
<!-- baru -->
<div class="container">
    <div class=" card-body row">
        <div class="col-5  d-flex ">
            <form action="{{ url('productImage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="table">
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
        <div class="col-7  d-flex ">
            <table class="table">
                <thead class=" table-dark">
                    <th>
                        <label scope="col" class="text-center">Image</label>
                    </th>
                </thead>
                <tbody>
                    @foreach($productImage as $key=>$value)
                            <td>
                                    <img class="card-img-top img-thumbnail" style="width: 200px" src="{{ asset('storage/'.$value->image) }}" alt="..." />
                                    <form class="text-center" action="{{ url('adminProduct/'.$value->id) }}" method="POST">
                                        @csrf
                                        {{-- <a class="btn btn-success" href="{{ url('adminStock/'.$value->id.'/edit') }}"><i class="fas fa-plus"></i> Tambah Stok</a> --}}
                                        <br> <br>
                                        <a class="btn btn-success" href="{{ url('productImage/'.$value->id) }}"><i class="fas fa-image"></i> </a>
                                        <a class="btn btn-primary" href="{{ url('adminProduct/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i></a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                      </form>
                            </td>
                            
                    @endforeach
                </tbody>
            </table>
            <img src="" alt="">
        </div>
    </div>
    
</div>
<!-- end baru -->
        
@endsection