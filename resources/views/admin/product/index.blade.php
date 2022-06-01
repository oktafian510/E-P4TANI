{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')
        <!-- baru -->
        <div class="container col-md-12">
          <div class="card-body table-responsive p-0">
            <table class="table table-bordered">
              <thead class="table-dark">
                <tr>
                  <th>No</th>
                  <th>Code Product</th>
                  <th>Category</th>
                  <th>Nama Product</th>
                  <th style="width:40%">Description</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th style="width: 15%"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datas as $key=>$value)
                  <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $value->code }}</td>
                      <td>{{ $value->category }}</td>
                      <td>{{ $value->nameProduct }}</td>
                      <td>{{ $value->description }}</td>
                      <td>{{ $value->priceRange }}</td>
                      <td><center><img style="width: 150px;" src="{{ asset('storage/'.$value->image) }}" alt=""></center></td>
                      <td>
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
                  </tr>
                @endforeach
              </tbody>     
            </table>
            <br>
          </div>
        </div>

        <!-- end baru -->

        <!-- baru -->
        
        <div class="card-footer clearfix align-centre">
          <a class="btn btn-success" href="{{ url('adminProduct/create') }}"><i class="fas fa-plus"></i> Tambah Product</a>
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