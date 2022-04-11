{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')

  
        <div class="card-body">

          {{-- Start creating your amazing application! --}}
          <table class="table">
              <tr>
                  <th>id</th>
                  <th>judul</th>
                  <th>deskripsi</th>
                  <th>image</th>
                  <th>aksi</th>
              </tr>

              @foreach ($datas as $key=>$value)
              <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->title }}</td>
                  <td>{{ $value->description }}</td>
                  <td>{{ $value->image }}</td>
                  <td>
                    <a href="{{ url('adminPoster/'.$value->id.'/edit') }}">Update</a>
                    <form action="{{ url('adminPoster/'.$value->id) }}" method="POST">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit">DELETE</button>
                    </form>
                  </td>
              </tr>
                  
              @endforeach
          </table>
          <br>
          <a href="{{ url('adminPoster/create') }}">Tambah</a>
        </div>
        

@endsection