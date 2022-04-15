{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')
<!-- baru -->
<div class="container col-md-12">
            <div class="card-body">
              <table class="table table-bordered">
                <thead class="table-dark">
                  <tr>
                  <th>Id</th>
                  <th>Code</th>
                  <th>Size</th>
                  <th>Stock</th>
                  <th>Price</th>
                  <th>aksi</th>
                  </tr>
                </thead> @foreach ($datas as $key=>$value)
              <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->code }}</td>
                  <td>{{ $value->size }}</td>
                  <td>{{ $value->stock }}</td>
                  <td>{{ $value->price }}</td>
                  <td>
                    <a class="btn btn-primary" href="{{ url('adminStock/'.$value->id.'/edit') }}">Update</a>
                    <form action="{{ url('adminStock/'.$value->id) }}" method="POST">
                      @csrf
                      <br>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                  </td>
              </tr>
                  
              @endforeach
                             
                      <!-- /.card-body -->
                  </div>
        

                </div>
                    
              </table>
              <br>
              
              <div class="card-footer clearfix align-centre">
                <a href="{{ url('adminStock/create') }}">Tambah</a>
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