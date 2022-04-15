{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')

  
        <div class="card-body">

          {{-- Start creating your amazing application! --}}
          <table class="table">
              <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>Description</th>
                  <th>aksi</th>
              </tr>

              @foreach ($datas as $key=>$value)
              <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->description }}</td>
                  <td>
                    <a href="{{ url('adminCategory/'.$value->id.'/edit') }}">Update</a>
                    <form action="{{ url('adminCategory/'.$value->id) }}" method="POST">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit">DELETE</button>
                    </form>
                  </td>
              </tr>
                  
              @endforeach
          </table>
          <br>
          <a href="{{ url('adminCategory/create') }}">Tambah</a>
        </div>

        <!-- baru -->
        <div class="container col-md-12">
            <div class="card-body">
              <table class="table table-bordered">
                <thead class="table-dark">
                  <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>Description</th>
                  <th>aksi</th>
                  </tr>
                </thead>
                @foreach ($datas as $key=>$value)
                  <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->description }}</td>
                      <td>
                        <div class="btn btn-primary" href="{{ url('adminCategory/'.$value->id.'/edit') }}">Update</div>
                        <form action="{{ url('adminCategory/'.$value->id) }}" method="POST">
                          <br>
                          @csrf
                          <button class="btn btn-danger" type="submit" name="_method" value="DELETE">DELETE</button>
                        </form>
                      </td>
                  </tr>    
              @endforeach
                    
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