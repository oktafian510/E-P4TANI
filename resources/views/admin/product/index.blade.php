{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')
        <!-- baru -->
        <div class="container col-md-12">
            <div class="card-body">
              <table class="table table-bordered">
                <thead class="table-dark">
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Code Product</th>
                    <th>Category</th>
                    <th>Nama Product</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th></th>
                  </tr>
                </thead>
                      @foreach ($datas as $key=>$value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->code }}</td>
                            <td>{{ $value->category }}</td>
                            <td>{{ $value->nameProduct }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->image }}</td>
                            <td>
                              <form action="{{ url('adminProduct/'.$value->id) }}" method="POST">
                                @csrf
                                <a class="btn btn-primary" href="{{ url('adminProduct/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i>Update</a>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                              </form>
                            </td>
                        </tr>
                      
                      @endforeach                  
                      <!-- /.card-body -->
              </table>
              <br>
            </div>
        </div>
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