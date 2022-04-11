{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')

  
        <div class="card-body">

          {{-- Start creating your amazing application! --}}
          <table class="table">
              <tr>
                  <th>id</th>
                  <th>Company</th>
                  <th>deskripsi</th>
                  <th>email</th>
                  <th>fb</th>
                  <th>hp</th>
                  <th>ig</th>
                  <th>yt</th>
                  <th>image</th>
                  <th>aksi</th>
              </tr>

              @foreach ($datas as $key=>$value)
              <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->company }}</td>
                  <td>{{ $value->description }}</td>
                  <td>{{ $value->email }}</td>
                  <td>{{ $value->fb }}</td>
                  <td>{{ $value->hp }}</td>
                  <td>{{ $value->ig }}</td>
                  <td>{{ $value->yt }}</td>
                  <td>{{ $value->image }}</td>
                  <td>
                    <a href="{{ url('adminAbout/'.$value->id.'/edit') }}">Update</a>
                    <form action="{{ url('adminAbout/'.$value->id) }}" method="POST">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit">DELETE</button>
                    </form>
                  </td>
              </tr>
                  
              @endforeach
          </table>
          <br>
          <a href="{{ url('adminAbout/create') }}">Tambah</a>
        </div>
        

@endsection