@extends('admin.index')
@section('conten')
<!-- baru -->
<div class="container">
    <div class="card-body">
            <form action="{{ url('adminCategory') }}" method="POST">
                @csrf
                <table class="table col-sm-6">
                    <thead class=" table-dark">
                                             
                        <th scope="col">Label</th>
                        <th scope="col">Input</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="name" class="">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name"  id="name">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="description" class="">Description</label>
                            </th>
                            <td>
                                <input type="text" name="description"  id="description">
                            </td>
                        </tr>

                    </tbody>
                    </table>
                    <button class="btn btn-success" type="submit"><i class="fas fa-save"></i>SIMPAN</button>
                    
            </form>
    </div>
</div>
@endsection