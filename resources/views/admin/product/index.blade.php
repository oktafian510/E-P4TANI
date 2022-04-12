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
        

@endsection