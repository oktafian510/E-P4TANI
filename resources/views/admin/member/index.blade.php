{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')

  
        <div class="card-body">

          {{-- Start creating your amazing application! --}}
          <table class="table">
              <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>deskripsi</th>
                  <th>Category</th>
                  <th>image</th>
                  <th>aksi</th>
              </tr>

              @foreach ($datas as $key=>$value)
              <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->description }}</td>
                  <td>{{ $value->category }}</td>
                  <td>{{ $value->image }}</td>
                  <td>
                    <a href="{{ url('adminMember/'.$value->id.'/edit') }}">Update</a>
                    <form action="{{ url('adminMember/'.$value->id) }}" method="POST">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit">DELETE</button>
                    </form>
                  </td>
              </tr>
                  
              @endforeach
          </table>
          <br>
          <a href="{{ url('adminMember/create') }}">Tambah</a>
        </div>
        

@endsection