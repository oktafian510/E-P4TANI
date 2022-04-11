{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ABOUT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://p4tani.test/">Home</a></li>
              <li class="breadcrumb-item active">ABOUT</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
                      
          <h3 class="card-title">About Company</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

          {{-- Start creating your amazing application! --}}
          <table class="table">
              <tr>
                  <th>ig</th>
                  <th>hp</th>
                  <th>yt</th>
                  <th>fb</th>
              </tr>

              @foreach ($datas as $key=>$value)
              <tr>
                <td>{{ $value->ig  }}</td>
                <td>{{ $value->hp  }}</td>
                <td>{{ $value->yt  }}</td>
                <td>{{ $value->fb  }}</td>
              </tr>
                  
              @endforeach
          </table>
          <br>
          {{-- <a href="{{ url('adminFaq/create') }}">Tambah</a> --}}
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection