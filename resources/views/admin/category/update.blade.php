@extends('admin.index')
@section('conten')

    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ url('adminCategory/'.$model->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <div class="row">
                <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label for="name">Category</label>
                    <input type="text" name="name"  id="name" class="form-control" value="{{ $model->name }}">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                <!-- textarea -->
                <div class="form-group">
                    <label for="description">Description</label>
                    {{-- <input type="text" name="description" value="{{ $model->description }}" id="description"> --}}
                    
                    <textarea name="description"  id="description" class="form-control" rows="3"  >{{ $model->description }}</textarea>
                </div>
                </div>
            </div>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>

        </form>
    </div>
    <!-- /.card-body -->


@endsection