@extends('admin.index')
@section('conten')
      

        <div class="card-body">
            <form action="{{ url('adminMember') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name"  id="name" class="form-control" placeholder="Please insert...">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label for="category">Jabatan</label>
                        <input type="text" name="category"  id="category" class="form-control" placeholder="Please insert...">
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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="file" class="form-control-file"  name="image"  id="image">
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>
    
            </form>
        </div>
@endsection