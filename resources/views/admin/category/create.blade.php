@extends('admin.index')
@section('conten')

    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ url('adminCategory') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label for="name">Category</label>
                    <input type="text" name="name"  id="name" class="form-control" placeholder="Please insert...">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                <!-- textarea -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description"  id="description" class="form-control" rows="3" placeholder="Please insert..."></textarea>
                </div>
                </div>
            </div>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>

        </form>
    </div>
    <!-- /.card-body -->

@endsection