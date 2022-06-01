@extends('admin.index')
@section('conten')
        <!-- baru -->
        <div class="container">
            <div class="card-body">
                    <form action="{{ url('adminStock/'.$model->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <table class="table col-sm-6">
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
                                        <input type="text" name="code" value="{{ $model->code }}" id="code">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="size">Size</label>
                                    </th>
                                    <td>
                                        <input type="text" name="size" value="{{ $model->size }}" id="size">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="stock">Stock</label>
                                    </th>
                                    <td>
                                        <input type="text" name="stock" value="{{ $model->stock }}" id="stock">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="price">Price</label>
                                    </th>
                                    <td>
                                        <input type="text" name="price" value="{{ $model->price }}" id="price">
                                        <input  hidden type="text" name="idProduct" value="{{ $product->id }}" id="idProduct">

                                    </td>
                                </tr>
                            </tbody>
                            </table>
                            <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>SIMPAN</button>
                            
                    </form>
            </div>
        </div>
        <!-- end baru -->
       
@endsection