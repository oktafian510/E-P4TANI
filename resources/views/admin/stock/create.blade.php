@extends('admin.index')
@section('conten')
<!-- baru -->

<div class="container">
    <div class="card-body row">
        <div class="col-5  d-flex ">
            <div class="container col-md-12">
                <div class="card-body table-responsive p-0">
                    <form action="{{ url('adminStock') }}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            <thead class=" table-dark">
                                <tr>
                                
                                <th scope="col">Label</th>
                                <th scope="col">Input</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <label for="code">Code</label>
                                    </th>
                                    <td>
                                    <input disabled type="text" value="{{ $product->code }}">
                                    <input hidden type="text" name="code" id="code" value="{{ $product->code }}">
                                    <input hidden type="text"  name="idProduct" id="idProduct" value="{{ $product->id }}">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="size" class="">Size</label>
                                    </th>
                                    <td>
                                        <input type="text" name="size"  id="size">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="stock" class="">Stock</label>
                                    </th>
                                    <td>
                                        <input type="text" name="stock"  id="stock">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="price" class="">Price</label>
                                    </th>
                                    <td>
                                    <input type="text" name="price"  id="price">
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-7">
            <!-- baru -->
            <div class="container col-md-12">
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered">
                    <thead class="table-dark">
                      <tr>
                      <th>Id</th>
                      <th>Code Product</th>
                      <th>Size Product</th>
                      <th>Stock Product</th>
                      <th>Price Product</th>
                      <th style="width: 15%"></th>
                      </tr>
                    </thead> 
                    <tbody>
                      @foreach ($dataStock as $key=>$value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->code }}</td>
                            <td>{{ $value->size }}</td>
                            <td>{{ $value->stock }}</td>
                            <td>{{ $value->price }}</td>
                            <td class="text-right">
                              <form action="{{ url('adminStock/'.$value->id.','.$value->code.','.$product->id) }}" method="POST">
                                @csrf
                                <a class="btn btn-primary" href="{{ url('adminStock/'.$value->id.','.$product->id.'/edit') }}"><i class="fas fa-edit"></i></a>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                              </form>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
              <br>
            <div class="card-footer clearfix align-centre">
                {{-- <a class="btn btn-success" href="{{ url('adminStock/create') }}"><i class="fas fa-plus"></i> Tambah</a> --}}
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
             
                
          <!-- end baru -->
            
        </div>
    </div>
</div>

<!-- end baru -->
@endsection