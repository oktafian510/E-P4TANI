@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminCategory/'.$model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <input type="text" name="name" value="{{ $model->name }}" id="name">
                <label for="name">name</label> <br>
                <input type="text" name="description" value="{{ $model->description }}" id="description">
                <label for="description">description</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>

        <!-- baru -->
        <div class="container">
            <div class="card-body">
                    <form action="{{ url('adminCategory/'.$model->id) }}" method="POST">
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
                                        <label for="name">Name</label>
                                    </th>
                                    <td>
                                        <input type="text" name="name" value="{{ $model->name }}" id="name">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="description">Description</label>
                                    </th>
                                    <td>
                                        <input type="text" name="description" value="{{ $model->description }}" id="description">
                                    </td>
                                </tr>
                                
                            </tbody>
                            </table>
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            
                    </form>
            </div>
        </div>
        <!-- end baru -->
@endsection