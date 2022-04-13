{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')

  
        <div class="card-body">

          {{-- Start creating your amazing application! --}}
          <table class="table">
              <tr>
                  <th>Id</th>
                  <th>Code</th>
                  <th>Size</th>
                  <th>Stock</th>
                  <th>Price</th>
                  <th>aksi</th>
              </tr>

              @foreach ($datas as $key=>$value)
              <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->code }}</td>
                  <td>{{ $value->size }}</td>
                  <td>{{ $value->stock }}</td>
                  <td>{{ $value->price }}</td>
                  <td>
                    <a href="{{ url('adminStock/'.$value->id.'/edit') }}">Update</a>
                    <form action="{{ url('adminStock/'.$value->id) }}" method="POST">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit">DELETE</button>
                    </form>
                  </td>
              </tr>
                  
              @endforeach
          </table>
          <br>
          <a href="{{ url('adminStock/create') }}">Tambah</a>
        </div>
        

@endsection