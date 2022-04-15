{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')

  
        <div class="card-body">

          {{-- Start creating your amazing application! --}}
          <table class="table">
              <tr>
                  <th>Id</th>
                  <th>Code</th>
                  <th>Category</th>
                  <th>nama Product</th>
                  <th>description</th>
                  <th>image</th>
                  <th>aksi</th>
              </tr>

              @foreach ($datas as $key=>$value)
              <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->code }}</td>
                  <td>{{ $value->category }}</td>
                  <td>{{ $value->nameProduct }}</td>
                  <td>{{ $value->description }}</td>
                  <td>{{ $value->image }}</td>
                  <td>
                    <a href="{{ url('adminProduct/'.$value->id.'/edit') }}">Update</a>
                    <form action="{{ url('adminProduct/'.$value->id) }}" method="POST">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit">DELETE</button>
                    </form>
                  </td>
              </tr>
                  
              @endforeach
          </table>
          <br>
          <a href="{{ url('adminProduct/create') }}">Tambah</a>
        </div>

        <!-- baru -->
        <div class="container col-md-12">
            <div class="card-body">
              <table class="table table-bordered">
                <thead class="table-dark">
                  <tr>
                    <th style="width: 10px">id</th>
                    <th>Code</th>
                    <th>Category</th>
                    <th>Nama Product</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Aksi</th>
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
                              <div class="btn btn-danger" href="{{ url('adminProduct/'.$value->id.'/edit') }}">Update</div>
                              <form action="{{ url('adminProduct/'.$value->id) }}" method="POST">
                                <br>
                               
                                <div class="btn btn-primary" name="_method" value="delete">DELETE</div>
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
                <div class="btn btn-success" href="{{ url('adminProduct/create') }}">Tambah</div>
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