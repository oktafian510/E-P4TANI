{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')
<!-- baru -->
          <div class="container col-md-12">
            <div class="card-body table-responsive p-0">
              <table class="table table-bordered">
                <thead class="table-dark">
                  <tr>
                  <th>Id</th>
                  <th>Code Product</th>
                  <th>Size Product</th>
                  <th>Stock Product</th>
                  <th>Price Product</th>
                  <th></th>
                  </tr>
                </thead> 
                @foreach ($datas as $key=>$value)
                  <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $value->code }}</td>
                      <td>{{ $value->size }}</td>
                      <td>{{ $value->stock }}</td>
                      <td>{{ $value->price }}</td>
                      <td class="text-right">
                        <form action="{{ url('adminStock/'.$value->id) }}" method="POST">
                          @csrf
                          <a class="btn btn-primary" href="{{ url('adminStock/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i>Update</a>
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                      </td>
                  </tr>
                @endforeach
                      <!-- /.card-body -->
              </table>
            </div>
          </div>
          <br>
          <div class="card-footer clearfix align-centre">
            <a class="btn btn-success" href="{{ url('adminStock/create') }}"><i class="fas fa-plus"></i> Tambah</a>
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