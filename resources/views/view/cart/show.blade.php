@extends('view.index')
@section('conten')
<br><br>
<br><br>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Table Cart</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>image</th>
                <th>Nama</th>
                <th>Size</th>
                <th>Qty</th>
                <th>Price</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($cart as $key=>$value)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $value->image }}</td>
                    <td>{{ $value->nameProduct }}</td>
                    <td>{{ $value->size }}</td>
                    <td>{{ $value->quantity }}</td>
                    <td>{{ $value->price }}</td>
                    <td>
                      <a class="btn btn-primary" href="{{ url('adminProduct/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i>Update</a>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                      <a class="btn btn-success"href="{{ url('cart/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i>Bayar</a>
                      
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div><br>
{{-- <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Table Transaksi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>image</th>
                <th>Nama</th>
                <th>Size</th>
                <th>Qty</th>
                <th>Price</th>
         
              </tr>
            </thead>
            <tbody>
            @foreach($cart as $key=>$value)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $value->image }}</td>
                    <td>{{ $value->nameProduct }}</td>
                    <td>{{ $value->size }}</td>
                    <td>{{ $value->quantity }}</td>
                    <td>{{ $value->price }}</td>
                   
                </tr>
            @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div> --}}

@endsection