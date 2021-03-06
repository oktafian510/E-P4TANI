{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')
      <!-- baru -->
        <div class="container col-md-12">
            <div class="card-body table-responsive p-0">
              <table class="table table-bordered">
                <thead class="table-dark">
                  <tr>
                  <th style="width:5%">No</th>
                  <th style="width:15%">Name Category</th>
                  <th style="width:65%">Description</th>
                  <th style="width:15%"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($datas as $key=>$value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->description }}</td>
                        <td>
                          <form action="{{ url('adminCategory/'.$value->id) }}" method="POST">
                            @csrf
                            <a class="btn btn-primary" href="{{ url('adminCategory/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i></a>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                          </form>
                        </td>
                        
                    </tr>    
                @endforeach
                </tbody>      
              </table>
              <br>
            </div>
        </div>
        <div class="card-footer clearfix align-centre">
          <a class="btn btn-success" href="{{ url('adminCategory/create') }}"><i class="fas fa-plus"></i> Tambah</a>
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