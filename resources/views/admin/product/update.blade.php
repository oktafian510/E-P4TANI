@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminProduct/'.$model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <input type="text" name="code" value="{{ $model->code }}" id="code">
                <label for="code">Code</label> <br>
                <input type="text" name="category" value="{{ $model->category }}" id="category">
                <label for="category">category</label><br>
                <input type="text" name="nameProduct" value="{{ $model->nameProduct }}" id="nameProduct">
                <label for="nameProduct">Name Product</label><br>
                <input type="text" name="description" value="{{ $model->description }}" id="description">
                <label for="description">description</label><br>
                <input type="text" name="image" value="{{ $model->image }}" id="image">
                <label for="image">image</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
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
                                        <label for="category">Category</label>
                                    </th>
                                    <td>
                                        <input type="text" name="category" value="{{ $model->category }}" id="category">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="nameProduct" class="">Name Product</label>
                                    </th>
                                    <td>
                                        <input type="text" name="nameProduct" value="{{ $model->nameProduct }}" id="nameProduct">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="description">description</label>
                                    </th>
                                    <td>
                                    <input type="text" name="description" value="{{ $model->description }}" id="description">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="image">image</label>
                                    </th>
                                    <td>
                                    <input type="text" name="image" value="{{ $model->image }}" id="image">
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                            <div class="btn btn-success" type="submit">SIMPAN</div>
                            
                    </form>
            </div>
        </div>
        <!-- end baru -->
@endsection