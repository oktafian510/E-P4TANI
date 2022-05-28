{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Table Product</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead class="table-dark">
            <tr>
              <th style="width: 10px">No</th>
              {{-- <th>Code Product</th> --}}
              {{-- <th>Category</th> --}}
              <th>Nama Product</th>
              {{-- <th>Description</th> --}}
              <th>Price</th>
              <th>Image</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $key=>$value)
              <tr>
                  <td>{{ $key+1 }}</td>
                  {{-- <td>{{ $value->code }}</td> --}}
                  {{-- <td>{{ $value->category }}</td> --}}
                  <td>{{ $value->nameProduct }}</td>
                  {{-- <td>{{ $value->description }}</td> --}}
                  <td>{{ $value->priceRange }}</td>
                  <td><img style="width: 150px" src="{{ asset('storage/'.$value->image) }}" alt=""></td>
                  <td>
                    <form action="{{ url('adminProduct/'.$value->id) }}" method="POST">
                      @csrf
                      <a class="btn btn-success" href="{{ url('productImage/'.$value->id) }}"><i class="fas fa-plus"></i> ADD Img</a>
                      <a class="btn btn-primary" href="{{ url('adminProduct/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i>Update</a>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                  </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
        <!-- baru -->
        
        <div class="card-footer clearfix align-centre">
          <a class="btn btn-success" href="{{ url('adminProduct/create') }}"><i class="fas fa-plus"></i> Tambah</a>
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
         
            
      <!-- end baru -->
        

@endsection