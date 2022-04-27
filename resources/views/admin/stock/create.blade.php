@extends('admin.index')
@section('conten')
<!-- baru -->
<div class="container">
    <div class="card-body">
            <form action="{{ url('adminStock') }}" method="POST">
                @csrf
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
                            <select class="form-control" name="code" id="code">
                                @foreach ($code as $key=>$value)
                                <option>{{ $value->code }}</option>
                                @endforeach
                            </select>
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
                    <button class="btn btn-success" type="submit"><i class="fas fa-save"></i>SIMPAN</button>
                    
            </form>
    </div>
</div>
<!-- end baru -->
@endsection