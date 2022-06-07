@extends('view.index')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

@section('conten')
<br><br>
<br><br>
<div class="row">
  <form action="{{ url('viewTransaksi') }}" method="POST">
    <div class="col-12">
      <div class="card">
          <div class="card-header">
            <h3 class="card-title">Table Cart</h3>
          </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 500px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    {{-- <th style="width: 5%"></th> --}}
                    <th>ID</th>
                    <th>image</th>
                    <th>Nama</th>
                    <th>Size</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th style="width: 15%">aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($cart as $key=>$value)
                    <tr>
                        {{-- <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkbox[]" id="checkbox[]" value="{{ $value->code }}" id="flexCheckDefault">
                          </div>
                        </td> --}}
                        <td>{{ $key+1}}</td>
                        <td><img width="100px" class="rounded" src="{{ asset('storage/'.$value->image ) }}" alt=""></td>
                        <td>{{ $value->nameProduct }}</td>
                        <td>{{ $value->size }}</td>
                        <td>{{ $value->quantity }}</td>
                        <td>{{ $value->price }}</td>
                        <td>
                          <form class="text-center" action="{{ url('cart/'.$value->id) }}" method="POST">
                            @csrf
                            <a class="btn btn-primary" href="{{ url('adminProduct/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i></a>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            <a class="btn btn-primary" href="{{ url('adminProduct/'.$value->id.'/edit') }}"><i class="fas fa-barcode"></i></a>

                          </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <a href="{{ url('viewTransaksi/create') }}"  class="btn btn-success" name="a"> Bayar</a>
            <!-- /.card-body -->
      </div>
        <!-- /.card -->
    </div>
  </form>
</div><br>
<div class="row">
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
                <th>ID Transaksi</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
          

            <!-- Ini aku hapus -->
            
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('admin/dist/js/demo.js') }}"></script> --}}



@endsection